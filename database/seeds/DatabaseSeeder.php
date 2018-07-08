<?php

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // $this->call(UsersTableSeeder::class);

        User::Create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345')
        ]);
    }
}
