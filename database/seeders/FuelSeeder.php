<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fuel;


class FuelSeeder extends Seeder
{
    const ITEMS = [
        'Benzin',
        'Dízel',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $item) {
            $fuel = new Fuel();
	    $fuel->name = $item;
            $fuel->save();
        }
    }
}
