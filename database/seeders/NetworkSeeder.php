<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;
use App\Models\Province;

class NetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $provinces = ['Koshi Province', 'Madesh Province', 'Bagmati Province', 'Gandaki Province', 'Lumbini & Sudurpashchim'];

        foreach ($provinces as $index => $name) {
            $p = Province::create(['name' => $name, 'order' => $index]);

            if ($name == 'Koshi Province') {
                Branch::create([
                    'province_id' => $p->id,
                    'name' => 'Arjundhara Branch',
                    'district' => 'Jhapa',
                    'incharge_name' => 'Om Prakash Karki',
                    'designation' => 'Branch In-charge',
                    'phone' => '9824006888'
                ]);
            }
        }
    }
}
