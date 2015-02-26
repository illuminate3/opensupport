<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class Client extends Model {

	protected $table = 'clients';
        
        protected $fillable = ['name', 'email', 'phone', 'street', 'city', 'zip_code', 'country'  ];
      
        public function tickets()
        {
            $this->hasMany('App\Ticket');
        }
}
