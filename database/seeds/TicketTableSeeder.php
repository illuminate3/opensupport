<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class TicketTableSeeder extends Seeder {

    public function run() {
        DB::table('tickets')->delete();

        Ticket::create([
            'title' => 'some ticket 1',
            'status' => '0',
            'priority' => '1',
            'user_id' => '1',
            'client_id' => '2'
        ]);
        Ticket::create([
            'title' => 'unoriginal ticket',
            'status' => '0',
            'priority' => '3',
            'user_id' => '1',
            'client_id' => '4'
        ]);
        Ticket::create([
            'title' => 'some other ticket 90',
            'status' => '2',
            'priority' => '1',
            'user_id' => '1',
            'client_id' => '3'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 8',
            'status' => '0',
            'priority' => '1',
            'user_id' => '2',
            'client_id' => '3'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 1',
            'status' => '1',
            'priority' => '2',
            'user_id' => '2',
            'client_id' => '1'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 12',
            'status' => '2',
            'priority' => '1',
            'client_id' => '1'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 23',
            'status' => '2',
            'priority' => '4',
            'user_id' => '2',
            'client_id' => '1'
        ]);
    }

}