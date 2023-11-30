<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\County::create([
            'name' => 'Pest',
        ]);
        \App\Models\County::create([
            'name' => 'Csongrád',
        ]);
        \App\Models\County::create([
            'name' => 'Bács-Kiskun',
        ]);
        \App\Models\County::create([
            'name' => 'Békés',
        ]);
        \App\Models\County::create([
            'name' => 'Hajdú-Bihar',
        ]);
        \App\Models\County::create([
            'name' => 'Szabolcs-Szatmár-Bereg',
        ]);
        \App\Models\County::create([
            'name' => 'Borsod-Abaúj-Zemplén',
        ]);
        \App\Models\County::create([
            'name' => 'Komárom-Esztergom',
        ]);
        \App\Models\County::create([
            'name' => 'Győr-Moson-Sopron',
        ]);
        \App\Models\County::create([
            'name' => 'Vas',
        ]);
        \App\Models\County::create([
            'name' => 'Zala',
        ]);
        \App\Models\County::create([
            'name' => 'Somogy',
        ]);
        \App\Models\County::create([
            'name' => 'Baranya',
        ]);
        \App\Models\County::create([
            'name' => 'Tolna',
        ]);
        \App\Models\County::create([
            'name' => 'Fejér',
        ]);
        \App\Models\County::create([
            'name' => 'Heves',
        ]);
        \App\Models\County::create([
            'name' => 'Jász-Nagykun-Szolnok',
        ]);
        \App\Models\County::create([
            'name' => 'Veszprém',
        ]);
        \App\Models\County::create([
            'name' => 'Nográd',
        ]);
    }
}
