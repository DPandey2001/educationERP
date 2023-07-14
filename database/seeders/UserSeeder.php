<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a new user and save it to the database
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'johndoe@example.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
