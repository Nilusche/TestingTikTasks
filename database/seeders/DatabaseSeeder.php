<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@gmail.com')->first();
        if(!$user){
            User::create([
                'name' => 'Softwaretester', 
                'email' => 'admin@gmail.com',
                'password' =>Hash::make('password123')
            ]);
        }
    }
}
