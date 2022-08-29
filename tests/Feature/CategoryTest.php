<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */

    public function add_new_category()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/add-category', [
            'category_name' => 'Case',
        ]);

        $response->assertStatus(302);
        $this->assertCount(1, Category::all());
    }

    /** @test */

    public function a_category_can_be_deleted()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post('/admin/add-category', [
            'category_name' => 'Case',
        ]);
        $this->assertCount(1, Category::all());
        $category = Category::first();
        $response = $this->actingAs($user)->post($category->path());

        $this->assertCount(0, Category::all());
        $response->assertRedirect('/admin');

    }
}
