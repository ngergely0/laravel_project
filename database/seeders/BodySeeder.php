<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Body;


class BodySeeder extends Seeder
{
    const ITEMS = [
        'Crossover',
        'Fastback',
        'Hardtop',
        'Hatchback',
        'Kabrió',
        'Kombi',
        'Kupé',
        'Liftback',
        'Limuzin',
        'Minivan',
        'Pickup',
        'Roadster',
        'Szedán',
        'Targa',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $item) {
            $body = new Body();
	    $body->name = $item;
            $body->save();
        }
    }
}
