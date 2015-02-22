<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

        // password is password
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => '$2y$10$LsfFRmGF37S7auhhT0AurOnGHOyNxOJxacpvEZR7inq2czb744RSS'
        ]);
               
        // password is password
        User::create([
            'name' => 'demo',
            'email' => 'demo@example.com',
            'password' => '$2y$10$h0n/bkyBzKzuzpsNW/aWPuQISSIWmKx.maOvSai58byDY4Pbm.1BG'
        ]);
    }

}