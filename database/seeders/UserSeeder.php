<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Forrest Gump',
                'email' => 'forrest@gmail.com',
                'password' => 'runForrestRun',
            ],
            [
                'name' => 'John Wick',
                'email' => 'john@gmail.com',
                'password' => 'pencil123',
            ]
        ];

        foreach ($users as $data) {
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}
