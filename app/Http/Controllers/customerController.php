<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\paket;
use App\Models\user;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class customerController extends Controller
{
 
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('dashboard.customer.index',[
            "id_customer"=>"customernya",
            
            "post"=> customer::latest()->filter(request(['search']))->paginate(5)->withQueryString() 
    ]);
    }


    public function registrasi()
    {
        //
       return view('registrasi', [
            'paket' => paket::all(),
            'user' => user::all()
        ]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function create()
    {
        //
       return view('dashboard.customer.create', [
            'paket' => paket::all(),
            'user' => user::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // dd($request);
         
        $validatedData = $request->validate([
            
            'nama_customer' => 'required', 
            'jk' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|unique:customers', 
            'username' => 'required|unique:customers',
            'password' => 'required'
        ]);
        
        $validatedDataUser = $request->validate([  
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $validatedDataUser['password']=bcrypt($validatedDataUser['password']);
        $validatedDataUser['level']="Customer";
        $validatedDataUser['name']=$request->nama_customer; 

        // die();

        $validatedData['password']=bcrypt($validatedData['password']); 

       //dd(Auth::check()&& auth()->user()->level);
        
       
       DB::transaction(function () use($validatedDataUser, $validatedData) {
           $userCreate = user::create($validatedDataUser);
           
           $validatedData['user_id'] = $userCreate->id;
           customer::create($validatedData);
        });
        
        
        
        if(Auth::guest()==true):

            return redirect('/login-home')->with('success','Amazing! Your Account has been Created Successfully');
        else:
                return redirect('/customer')->with('success','booking Has Been Success! Wait For Confirmation');
        endif;
         
         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
       
    return view('dashboard.customer.detcustomer',[
        'customer' => $customer
        
    ], [
        'paket' => paket::all()
        
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
           
          
      return view('dashboard.customer.edit',[
        'customer' => $customer,
        'paket' => paket::all(),
        'user' => $customer->user
        // 'user' => user::find($customer->user_id)
        
    ]);

  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //dd($request);
         $rules = [ 
            'nama_customer' => 'required', 
            'jk' => 'required',
            'alamat' => 'required', 
            'telepon' => 'required',
            
        ];


       

        $validatedDataUser['password']=bcrypt($request['password']);
        $validatedDataUser['level']="customer";
        $validatedDataUser['name']=$request->nama_customer;

         
        if($request->email !=$customer->email)
        {
            $rules['email'] = 'required|unique:customers';
        }
        if($request->username != $customer->username)
        {
            $rules1['username'] = 'required|unique:customers';
            extract($request->validate($rules1));

        $validatedDataUser['username']= $username;

        }
        if($request->password != $customer->password)
        {

       $validatedDataUser['password']= Hash::make($request->password);
        };


           
       // $validatedData['password']=bcrypt($validatedData['password']);
       // $validatedDataUser['username']=$request->validate($rules1);

       $user = $customer->user;
       $validatedData= $request->validate($rules);
       //dd($validatedDataUser);
       DB::transaction(function () use($validatedDataUser, $validatedData, $user, $customer) {
        user::where('id',$user->id)
        ->update($validatedDataUser);
 
 
 
         customer::where('id',$customer->id)
         ->update($validatedData);
    });


      ($levelnya = auth()->user()->level);
      
       // if($levelnya=="Administrator")
        return redirect('/customer')->with('success','customer Has Been Update!');
       /* else
        return redirect("customer/" . auth()->user()->customer->id)->with('success','customer Has Been Update!');
        end;*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
         customer::destroy($customer->id);
         user::destroy($customer->user_id);
        return redirect('/customer')->with('deleted','Your customer Has Been Deleted!');
  
    }
 

    
    public function laporan()
    {
        
        $id = auth()->user()->id ;
        return view('dashboard.customer.laporan');

    //dd($postper);
    }

    public function cetakpertanggal($tglawal, $tglakhir)
    {
        
        //dd(["tanggal awal".$tglawal, "tanggal akhir".$tglakhir]);
        $cetakpertanggalnya = customer::all()
        ->where('status', '=',"Lunas")
        ->whereBetween('updated_at', [$tglawal, $tglakhir]);
        return view('dashboard.customer.customer_pdf', compact('cetakpertanggalnya'));
        
    }

    
    public function cetakall()
    {
        //dd(["berdasarkan: ".$berdasarkan, "isinya ".$isinya]);
        $cetakpertanggalnya = customer::all();
                return view('dashboard.customer.customer_pdf', compact('cetakpertanggalnya'));
    }

    public function cetakberdasarkan($berdasarkan, $isinya)
    {
        //dd(["berdasarkan: ".$berdasarkan, "isinya ".$isinya]);
        $cetakpertanggalnya = customer::WHERE("$berdasarkan",'LIKE', "%$isinya%")->get();
                return view('dashboard.customer.customer_pdf', compact('cetakpertanggalnya'));
    }
    
 
}

