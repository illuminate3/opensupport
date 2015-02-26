<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class TicketTableSeeder extends Seeder {

    public function run() {
        DB::table('tickets')->delete();

        Ticket::create([
            'title' => 'some ticket 1',
            'description' => 'asdf a111sdf asdf asdffe  fe effe efefefef',
            'status' => '0',
            'user_id' => '1',
            'client_id' => '2'
        ]);
        Ticket::create([
            'title' => 'unoriginal ticket',
            'description' => 'asdf asdf asdf333333 asdf sdf sdfsd fsd fsdffe  fe effe efefefef',
            'status' => '0',
            'user_id' => '1',
            'client_id' => '4'
        ]);
        Ticket::create([
            'title' => 'some other ticket 90',
            'description' => 'asdf asdf asdf asdffe  fe asdf3333 asdf  effe efefefef',
            'status' => '2',
            'user_id' => '1',
            'client_id' => '3'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 8',
            'description' => 'asdf asdf asdf asdffe  fe 33333 asdf  effe efefefef',
            'status' => '0',
            'user_id' => '2',
            'client_id' => '3'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 1',
            'description' => 'asdf asdf asdf asdffe333  fe asdf asdf  effe efefefef',
            'status' => '1',
            'user_id' => '2',
            'client_id' => '1'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 12',
            'description' => 'asdf asdf 3333asdf asdffe  fe asdf asdf  effe efefefef',
            'status' => '2',
            'client_id' => '1'
        ]);
        
        Ticket::create([
            'title' => 'some other ticket 23',
            'description' => 'asdf asdf asdf 33333  fe asdf asdf  effe efefefef',
            'status' => '2',
            'user_id' => '2',
            'client_id' => '1'
        ]);
    }

}