<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'order_number' => 'ORD-001',
            'customer_id' => 2,
            'book_id' => 1,
            'total_amount' => 250000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-002',
            'customer_id' => 2,
            'book_id' => 2,
            'total_amount' => 50000.00,
        ]);
    }
}
