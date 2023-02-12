<?php

namespace Database\Seeders;

use App\Models\FormModel;
use Illuminate\Database\Seeder;
use App\Models\UsersInfnfoModel;

class formSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormModel::factory()->count(50)->create();
        UsersInfnfoModel::factory()->count(50)->create();
    }
}
