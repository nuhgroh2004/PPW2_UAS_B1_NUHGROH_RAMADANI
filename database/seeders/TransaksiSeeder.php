<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use Faker\Factory as Faker;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $startDate = Carbon::create(2024, 11, 1); // startDate = 2024-11-01
        $endDate = Carbon::create(2024, 11, 10); // endDate = 2024-11-10

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            $numberOfTransactions = $faker->numberBetween(15, 20); // gunakan faker untuk membuat angka antara 15 - 20

            for ($i = 0; $i < $numberOfTransactions; $i++) {
                Transaksi::create([
                    'tanggal_pembelian' => $date->format('Y-m-d'),
                    'total_harga' => $faker->numberBetween(10000, 100000),
                    'bayar' => $faker->numberBetween(10000, 100000),
                    'kembalian' => $faker->numberBetween(0, 10000),
                ]);
            }
        }
    }
}
