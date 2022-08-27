<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class RouteTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
//        $user = User::factory()->create();
//        $response = $this->actingAs($user)
//                         ->withSession(['foo' => 'bar'])
//                         ->get("/");
        $user = User::where('id',1)->first();
        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get("/");
        $response->assertStatus(200);
    }
}
