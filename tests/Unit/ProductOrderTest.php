<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ProductOrderTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function a_order_can_be_made_on_the_product()
    {
        $category = Category::factory()->create();
        $product  = Product::factory()->create();
        $product->categories()->attach($category->id);
        $user     = User::factory()->create();

        $product->order($user);

        $this->assertCount(1, Order::all());
        $this->assertEquals($user->id, Order::first()->user_id);
        $this->assertEquals($product->id, Order::first()->product_id);
        $this->assertEquals(now(), Order::first()->ordered_at);

    }
    /** @test */
    public function a_order_can_be_canceled()
    {
        $category = Category::factory()->create();
        $product  = Product::factory()->create();
        $product->categories()->attach($category->id);
        $user     = User::factory()->create();

        $product->order($user);

        $product->cancelOrder($user);

        $this->assertCount(1, Order::all());
        $this->assertEquals($user->id, Order::first()->user_id);
        $this->assertEquals($product->id, Order::first()->product_id);
        $this->assertNotNull(Order::first()->canceled_at);
        $this->assertEquals(now(), Order::first()->canceled_at);

    }
    /** @test */
    public function a_user_can_order_a_product_twice()
    {
        $category = Category::factory()->create();
        $product  = Product::factory()->create();
        $product->categories()->attach($category->id);
        $user     = User::factory()->create();
        $product->order($user);
        $product->cancelOrder($user);

        $product->order($user);

        $this->assertCount(1, Order::all());
        $this->assertEquals($user->id, Order::first()->user_id);
        $this->assertEquals($product->id, Order::first()->product_id);
        $this->assertNotNull(Order::first()->canceled_at);
        $this->assertEquals(now(), Order::first()->canceled_at);

    }
}
