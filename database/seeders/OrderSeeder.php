<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ensure the database is cleared first (optional)
        DB::table('orders')->truncate();

        // Insert dummy data
        Order::factory()->count(10)->create();

        // Alternatively, add specific dummy records
        Order::create([
            'Customer_ID' => 1,
            'Cart_ID' => 1,
            'Total_Amount' => 100.50,
            'Order_Status' => 'Processing',
        ]);

        Order::create([
            'Customer_ID' => 2,
            'Cart_ID' => 2,
            'Total_Amount' => 250.00,
            'Order_Status' => 'Completed',
        ]);

        Order::create([
            'Customer_ID' => 3,
            'Cart_ID' => 3,
            'Total_Amount' => 75.00,
            'Order_Status' => 'Rejected',
        ]);
    }
}
