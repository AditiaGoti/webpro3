<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits =[
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 1,
                'name' => 'Finals Project Certified',
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos',
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportinity',
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 2,
                'name' => 'Finals Project Certified',
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos',
            ],
            ];
            CampBenefit::insert($campBenefits);
    }
}