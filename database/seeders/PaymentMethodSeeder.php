<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentMethods = ['Cash', 'Card', 'Cheque'];

        foreach ($paymentMethods as $key => $method) {
            $custom[$key]['title'] = $method;
        }

        DB::table((new PaymentMethod())->getTable())->insert($custom);
    }
}
