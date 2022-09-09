<?php

namespace Tests\Unit\Billing;

use App\Billing\FakePaymentGateaway;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class FakePaymentGatewayTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */

    public function charges_with_a_valid_token_are_successful()
    {
        $paymentGateway = new FakePaymentGateaway;

        $paymentGateway->charge(2500 ,$paymentGateway->getValidTestToken());

        $this->assertEquals(2500 , $paymentGateway->totalCharges());
    }

}
