<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TicketComment;

class TicketCommentTableSeeder extends Seeder {

    public function run() {
        DB::table('ticket_comments')->delete();

        App\TicketComment::create([
            'description' => 'admin asdf asdf asdf asdf asasdf rw3r qwer qwe wer wer wer '
            . 'df asdf asdf asdf asdf asdf asdf asdf asdf asdf ',
            'creator_name' => 'someone',
            'ticket_id' => '1'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf asdf asdf asdf 1234123123asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'someone',
            'ticket_id' => '2'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf a2222222222sdf asdf asdf asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'admin',
            'ticket_id' => '2'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf asdf as333333333df asdf asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'admin',
            'ticket_id' => '3'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf asdf asd22222222222333333333333f asdf asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'admin',
            'ticket_id' => '4'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf as777777777777df asdf asdf asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'admin',
            'ticket_id' => '5'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf asd55555555f as6666666666666df asdf asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'demo',
            'ticket_id' => '6'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf as44444444444444455555555555555df asdf asdf asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'demo',
            'ticket_id' => '7'
        ]);
        App\TicketComment::create([
            'description' => 'admin asdf asdf999999999999999 asdf asdf asasdf rw3r qwer qwe wer wer wer ',
            'creator_name' => 'demo',
            'ticket_id' => '2'
        ]);
    }

}
