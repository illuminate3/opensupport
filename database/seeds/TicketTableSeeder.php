<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class TicketTableSeeder extends Seeder {

    public function run() {
        DB::table('tickets')->delete();

        Ticket::create([
            'title' => 'some ticket',
            'description' => 'asdf asdf asdf asdffe  fe effe efefefef',
            'status' => '1'
        ]);
        Ticket::create([
            'title' => 'unoriginal ticket',
            'description' => 'asdf asdf asdf asdf sdf sdfsd fsd fsdffe  fe effe efefefef',
            'status' => '1'
        ]);
        Ticket::create([
            'title' => 'some other ticket',
            'description' => 'asdf asdf asdf asdffe  fe asdf asdf  effe efefefef',
            'status' => '2'
        ]);
    }

}