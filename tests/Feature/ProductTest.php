<?php
namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ProductTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */

//    public function a_product_can_be_added_to_the_collection()
//    {
//        $this->withoutExceptionHandling();
//
//        $user = User::factory()->create();
//
//        $response = $this->actingAs($user)->post('/admin/add-product', [
//            'category_id' => 1,
//            'name' => 'name',
//            'color' => 'color',
//            'photo' => 'photo',
//            'price' => 'price',
//            'short_description' => 'short_description',
//            'long_description' => 'long_description',
//            'available' => 10,
//            'quantity' => 10,
//        ]);
//
//        $response->assertOk();
//        $this->assertCount(1, Product::all());
//    }


    /** @test */

    public function a_product_can_be_deleted_from_the_collection()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $product= Product::all();
        dd($product);

        $response = $this->actingAs($user)->delete('/admin/delete-product',$product->id);

        $response->assertOk();
        $this->assertCount(1, Product::all());
    }
}
