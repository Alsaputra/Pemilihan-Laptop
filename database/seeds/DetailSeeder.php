<?php

use App\detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        detail::create([
            'location' => 'Surabaya',
            'price_transportation' => 20000
        ]);
        
        detail::create([
            'location' => 'Sidoarjo',
            'price_transportation' => 20000
        ]);

        detail::create([
            'location' => 'Malang',
            'price_transportation' => 200000
        ]);
        detail::create([
            'location' => 'Batu',
            'price_transportation' => 200000
        ]);
        detail::create([
            'location' => 'Jombang',
            'price_transportation' => 200000
        ]);
        
        detail::create([
            'location' => 'Kediri',
            'price_transportation' => 200000
        ]);
        
        detail::create([
            'location' => 'Pasuruan',
            'price_transportation' => 20000
        ]);
        
        detail::create([
            'location' => 'Jogja',
            'price_transportation' => 1470000
        ]);
        
        detail::create([
            'location' => 'Nganjuk',
            'price_transportation' => 200000
        ]);
      
    }
}
