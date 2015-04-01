<?php namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class TicketStatus {
    const open = 0;
    const close = 1;
    const pending = 2;
    const solved = 3;            
}

class Ticket extends Model {

    protected $table = 'tickets';
    
    protected $fillable = [ 'title', 'client_id', 'status', 'user_id' ];
    
    protected $ticket_status = [ 'open','pending', 'close', 'solved' ];
    /**
     * A Ticket can be assigned to a User.
     * 
     * @return type
     */
    public function assignedTo()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    /**
     * A Ticket is from a client.
     * 
     * @return type
     */
    public function isFrom()
    {
        return $this->belongsTo('App\Client', 'client_id', 'id');
    }
    
    /**
     * Ticket has Ticket comments
     * 
     * @return type
     */
    public function comments()
    {
        return $this->hasMany('App\TicketComment');
    }

    /**
     *  Return Ticket status as string
     */
    public function getTicketStatus()
    {
        switch ($this->status) {
            case TicketStatus::open:
                return 'open';
                break;
            case TicketStatus::close:
                return 'close';
                break;
            case TicketStatus::pending:
                return 'pending';
                break;
            case TicketStatus::solved:
                return 'solved';
                break;
            default:
                return 'invalid status';
                break;
        }
    }
}
