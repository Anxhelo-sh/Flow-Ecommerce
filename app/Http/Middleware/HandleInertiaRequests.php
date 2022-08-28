<?php

namespace App\Http\Middleware;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;
use function Safe\ssdeep_fuzzy_compare;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function share(Request $request): array
    {
        $categories = Category::all();

        $categories = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'category_name' => $category->category_name
            ];
        });

        $productsByCategories = Product::with('categories')
            ->select('id', 'name')
            ->get()
            ->groupBy('categories.*.category_name');

        $role='Guest';

        if(isset(Auth::user()->user_role)){
            $role=Auth::user()->user_role ;
        }

        return array_merge(parent::share($request), [
            'categories' => $categories,
            'products' => Product::all(),
            'products_by_categories' => $productsByCategories,
            'user_role'=>$role
        ]);
    }
}
