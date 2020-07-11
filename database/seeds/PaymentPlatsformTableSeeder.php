<?php

use App\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatsformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'Paypal',
            'image' => 'img/paypal.svg'
        ]);
        PaymentPlatform::create([
            'name' => 'Stripe',
            'image' => 'img/stripe.svg'
        ]);
    }
}
