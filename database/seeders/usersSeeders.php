<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\operator;
use App\Models\User;

class usersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mohammad Alawneh',
            'email' => 'mohammadmalawneh@gmail.com',
            'password' => Hash::make('!@#7eet456'),
        ]);
        operator::create([
            'country_id' => 1,
            'operator_name' => 'Zain',
            'operator_perfix' => '96279',
            'operator_rate' => 0.025,
        ]);
    }
}
