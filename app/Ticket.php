<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class TicketStatus {

    const open = 0;
    const close = 1;
    const pending = 2;
    const solved = 3;

}

abstract class TicketPriority {

    const low = 1;
    const middle = 2;
    const high = 3;
    const critical = 4;

}

class Ticket extends Model {

    protected $table = 'tickets';
    protected $fillable = ['title', 'client_id', 'status', 'priority', 'user_id'];
    protected $ticket_status = ['open', 'pending', 'close', 'solved'];

    /**
     * A Ticket can be assigned to a User.
     * 
     * @return type
     */
    public function assignedTo() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /**
     * A Ticket is from a client.
     * 
     * @return type
     */
    public function isFrom() {
        return $this->belongsTo('App\Client', 'client_id', 'id');
    }

    /**
     * Ticket has Ticket comments
     * 
     * @return type
     */
    public function comments() {
        return $this->hasMany('App\TicketComment');
    }

    public function getPriority() {
        switch ($this->priority) {
            case TicketPriority::low:
                return 'Low';
                break;
            case TicketPriority::middle:
                return 'Middle';
                break;
            case TicketPriority::high:
                return 'High';
                break;
            case TicketPriority::critical:
                return 'Critical';
                break;
            default:
                return 'Invalid priority';
                break;
        }
    }

    /**
     *  Return Ticket status as string
     */
    public function getTicketStatus() {
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
