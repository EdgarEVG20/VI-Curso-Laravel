<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Students;
use App\Models\Books;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->name = 'Edgar Villafaña';
        $user->email = 'edgar196477@gmail.com';
        $user->password = Hash::make('edgar196477');
        $user->save();

        Students::factory(100)->create();
        Books::factory(100)->create();
    }
}
