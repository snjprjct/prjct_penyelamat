<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\customer;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title'=>'Register',
            'active'=>'register',
        ]);
    }

    public function store(Request $request)
    {
        //return request()->all();
        //ddd($request);
        $validatedData = $request->validate([ 
            'nama_customer' => 'required', 
            'jk' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|unique:customers,email', 
            'username' => 'required|unique:customers',
            'password' => 'required'
        ]);
        
                 
        $validatedDataUser = $request->validate([ 
            'nama_customer' => 'required', 
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);
         
        $validatedDataUser['password']=bcrypt($validatedDataUser['password']);
        $validatedDataUser['password']=bcrypt($validatedData['password']);
        $validatedDataUser['level']="Customer";
        $validatedDataUser['name']=$request->nama_customer;

    
        
        DB::transaction(function () use($validatedDataUser, $validatedData) {
            $userCreate = user::create($validatedDataUser);
    
            $validatedData['user_id'] = $userCreate->id;
            customer::create($validatedData);
        });
         

        return redirect('/login')->with('success','New customer Has Been Add!');
    }
}
