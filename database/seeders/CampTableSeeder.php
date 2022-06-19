<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp = [
            [
            'tittle' => 'Gila Belajar',
            'slug' => 'gila-belajar',
            'price' => 280,
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time()),

        ],
        [
            'tittphle' => 'Baru Mulai',
            'slug' => 'baru-mulaii',
            'price' => 140,
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time()),
        ],
    ];
        Camps::insert($camp);
    }
}
