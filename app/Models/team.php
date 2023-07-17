<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    protected $guarded= ['id'];  

     
  public function scopeFilter($query)
  {
        if(request('search')) {
          $query->where('nama','like', '%'. request('search').'%')
                ->orwhere('jk','like', '%'. request('search').'%') 
                ->orwhere('telepon','like', '%'. request('search').'%') 
                ->orwhere('alamat','like', '%'. request('search').'%') 
                ->orwhere('tempat_lahir','like', '%'. request('search').'%') 
                ->orwhere('tanggal_lahir','like', '%'. request('search').'%')
                ->orwhere('posisi','like', '%'. request('search').'%')
               
          ;
      }
  }

    public function getRouteKeyName()
  {
      return 'id';
  }
}
