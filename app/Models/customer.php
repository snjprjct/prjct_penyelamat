<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class customer extends Model
{
    use HasFactory;
   // use Sluggable;

    protected $guarded= ['id']; 
    
    public function booking()
    {
        return $this->belongsTo(booking::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function scopeFilter($query)
    {
          if(request('search')) {
            $query->where('nama_customer','like', '%'. request('search').'%') 
                  ->orwhere('jk','like', '%'. request('search').'%')
                  ->orwhere('alamat','like', '%'. request('search').'%')
                  ->orwhere('telepon','like', '%'. request('search').'%')
                  ->orwhere('email','like', '%'. request('search').'%')   
            ;
        }
    }
 

    public function getRouteKeyName()
    {
        return 'id';
    }
}

?>