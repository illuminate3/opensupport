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
    public function assigned()
    {
        return $this->belongsTo('App\User');
    }
}
