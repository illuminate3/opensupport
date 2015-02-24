<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        $this->call('TicketTableSeeder');
        $this->command->info("Ticket table seeded.");
        
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded.');
        
        $this->call('ClientTableSeeder');
        $this->command->info('Client table seeded.');
    }

}

