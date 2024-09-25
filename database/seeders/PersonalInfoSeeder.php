<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Database\Factories\PersonalInfoFactory;
use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalInfo::factory()->count(100000)->create();
    }
}
