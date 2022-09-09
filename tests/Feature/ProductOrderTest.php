<?php

namespace Tests\Feature;

use App\Billing\FakePaymentGateaway;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Billing\PaymentGateway;

class ProductOrderTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */

    function customer_can_purchase_products()
    {
        $this->withoutExceptionHandling();

        $paymentGateway = new FakePaymentGateaway() ;

        $this->app->instance(PaymentGateway::class,$paymentGateway);

        //Arrange
        //Create a product
        $category = Category::factory()->create();
        $product  = Product::factory()->create(['price'=>3250]);
        $product->categories()->attach($category->id);
        $user     = User::factory()->create();

        //Act
        //Purchase a product
       $response = $this->actingAs($user)->json('POST',"/products/{$product->id}/orders",[
            'email' => 'anxhelo@example.com' ,
            'product_quantity' =>'3',
            'payment_token' => $paymentGateway->getValidTestToken()
        ]);

        $response->assertStatus(201);

        //Assert

        //Make sure the customer was charged the correct amount
        $this->assertEquals(9750, $paymentGateway->totalCharges());

        //Make sure that an order exists for this customer
        $order = $product->orders()->where('email','anxhelo@example.com')->first() ;

        $this->assertNotNull($order);

        //Make sure the order contains the 3 products
        $this->assertEquals(3, $order->products()->count());

    }

//    /** @test */
//    public function a_order_can_be_made_on_the_product()
//    {
//        $category = Category::factory()->create();
//        $product  = Product::factory()->create();
//        $product->categories()->attach($category->id);
//        $user     = User::factory()->create();
//
//        $product->order($user);
//
//        $this->assertCount(1, Order::all());
//        $this->assertEquals($user->id, Order::first()->user_id);
//        $this->assertEquals($product->id, Order::first()->product_id);
//        $this->assertEquals(now(), Order::first()->ordered_at);
//
//    }
//    /** @test */
//    public function a_order_can_be_canceled()
//    {
//        $category = Category::factory()->create();
//        $product  = Product::factory()->create();
//        $product->categories()->attach($category->id);
//        $user     = User::factory()->create();
//
//        $product->order($user);
//
//        $product->cancelOrder($user);
//
//        $this->assertCount(1, Order::all());
//        $this->assertEquals($user->id, Order::first()->user_id);
//        $this->assertEquals($product->id, Order::first()->product_id);
//        $this->assertNotNull(Order::first()->canceled_at);
//        $this->assertEquals(now(), Order::first()->canceled_at);
//
//    }
//    /** @test */
//    public function a_user_can_order_a_product_twice()
//    {
//        $category = Category::factory()->create();
//        $product  = Product::factory()->create();
//        $product->categories()->attach($category->id);
//        $user     = User::factory()->create();
//        $product->order($user);
//        $product->cancelOrder($user);
//
//        $product->order($user);
//
//        $this->assertCount(1, Order::all());
//        $this->assertEquals($user->id, Order::first()->user_id);
//        $this->assertEquals($product->id, Order::first()->product_id);
//        $this->assertNotNull(Order::first()->canceled_at);
//        $this->assertEquals(now(), Order::first()->canceled_at);
//
//    }
}
