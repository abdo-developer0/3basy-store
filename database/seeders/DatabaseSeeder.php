<?php

namespace Database\Seeders;

use App\Models\Gard;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name'  => '100uc',
                'price' => 0.99
            ],
            [
                'name'  => '200uc',
                'price' => 1.99
            ],
            [
                'name'  => '500uc',
                'price' => 2.99
            ],
            [
                'name'  => '1000uc',
                'price' => 4.99
            ],
            [
                'name'  => '1500uc',
                'price' => 7.99
            ],
            [
                'name'  => '3500uc',
                'price' => 9.99
            ],

        ];


        // add items
        foreach($items as $item) Item::create($item);

        $users = [
            [
                'name'     => 'Abdulrhman',
                'phone'    => '01283410848',
                'password' => Hash::make('123456'),
                'access'     => 1
            ]
        ];

        foreach($users as $user) User::create($user);

    }
}
