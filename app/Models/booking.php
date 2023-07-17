<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Carbon; 

class booking extends Model
{
     use HasFactory; 


    protected $guarded= ['id'];  
    protected $with= ['customer'];   


   
    public function customer()
    {
        return $this->belongsTo(customer::class);
    }

     public function periode()
    {
        return $this->belongsTo(periode::class);
    }

      public function paket()
    {
        return $this->belongsTo(paket::class);
    }

     public function ketentuan()
    {
        return $this->belongsTo(ketentuan::class);
    }


      public function scopeFilter($query, array $filters)
    {
 


        $query->when($filters['search'] ?? false, function($query, $search){

            return $query->where('id','like', '%'. $search.'%')
                         ->orwhere('customer_id','like', '%'. $search.'%')
                         ->orwhere('paket_id','like', '%'. $search.'%')
                         ->orwhere('tgl_booking','like', '%'. $search.'%')
                         ->orwhere('jam_booking','like', '%'. $search.'%')
                         ->orwhere('jam_selesai','like', '%'. $search.'%')
                         ->orwhere('catatan','like', '%'. $search.'%')  
                         ->orwhere('total','like', '%'. $search.'%')
                         ->orwhere('status','like', '%'. $search.'%')
                         ;
        });

        $query->when($filters['booking'] ?? false, function($query, $booking){
            return $query->whereHas('booking', function($query) use ($booking) {
                         $query->where('slug', $booking);
                         
            });
        });

    }
 
 

    public function search()
    {
        $name = Input::get('character');
        $searchResult = Player::where('name', '=', $name)->paginate(1);
        return View::make('search.search')
                ->with('name', $name)
                ->with('searchResult', $searchResult);
    }

}