<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'admin@novinaldi.com',
            ],
            [
                'name' => 'Kasir',
                'username' => 'kasir',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'kasir@novinaldi.com',
            ],
            [
                'name' => 'Pimpinan',
                'username' => 'pimpinan',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'pimpinan@novinaldi.com',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}