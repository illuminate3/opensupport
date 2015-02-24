<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {

    protected $table = 'tickets';
    
    protected $fillable = [ 'title', 'description', 'status', 'user_id' ];
    
    /**
     * A Ticket can be assigned to a User.
     * 
     * @return type
     */
    public function assignedTo()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
     * A Ticket is from a client.
     * 
     * @return type
     */
    public function isFrom()
    {
        return $this->belongsTo('App\Client');
    }
}
