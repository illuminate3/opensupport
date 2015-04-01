<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketComment extends Model {

        protected $table = 'ticket_comments';
        
        protected $fillable = [ 'description', 'creator_name', 'ticket_id' ];
        
        public function parent()
        {
            return $this->belongsTo('App\Ticket', 'ticket_id', 'id');
        }
}
