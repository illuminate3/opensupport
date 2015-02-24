<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Client;

class ClientTableSeeder extends Seeder {

    public function run() {
        DB::table('clients')->delete();

        Client::create([
            'name' => 'some Client 1',
            'email' => 'client1@example.com',
            'phone' => '555-12345',
            'street' => 'Overtherainbow st. 42',
            'city' => 'up and away city',
            'zip_code' => '1234',
            'country' => 'right here',
        ]);
        Client::create([
            'name' => 'some Client 2',
            'email' => 'client2@example.com',
            'phone' => '555-12346',
            'street' => 'Overtherainbow st. 43',
            'city' => 'up and away city',
            'zip_code' => '1234',
            'country' => 'right here',
        ]);
        Client::create([
            'name' => 'some Client 3',
            'email' => 'client3@example.com',
            'phone' => '555-12347',
            'street' => 'Overtherainbow st. 44',
            'city' => 'up and away city',
            'zip_code' => '1234',
            'country' => 'right here',
        ]);
        Client::create([
            'name' => 'some Client 4',
            'email' => 'client4@example.com',
            'phone' => '555-12348',
            'street' => 'Overtherainbow st. 46',
            'city' => 'up and away city',
            'zip_code' => '1234',
            'country' => 'right here',
        ]);
    }

}
