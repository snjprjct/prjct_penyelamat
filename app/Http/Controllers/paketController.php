<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;  
use App\Models\paket; 
use App\Models\customer; 

use Illuminate\Support\Facades\Auth;


use PDF;


class paketController extends Controller
{

     
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id ;
         return view('dashboard.paket.index',[
        "id_paket"=>"paketnya",
        "post"=> paket::latest()->filter(request(['search']))->paginate(5)->withQueryString(),
        "postper"=> paket::all()
                    ->where('customer_id', $id),
        

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
         return view('dashboard.paket.create', [
            'periodecek' => paket::all(),  
            
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
        // return $request->file('foto')->store('upload-foto');
         //dd($request);
        $validatedData = $request->validate([ 
            'nama_paket' => 'required',
            'harga' => 'required',
            'jumlah_jam' => 'required',
            'keterangan' => 'required', 
            'foto' => 'required|file|max:2024', 
        ]);

         if($request->file('foto')){
            $validatedData['foto']=$request->file('foto')->store('upload-foto');
        }  

        //ddd($validatedData);
        paket::create($validatedData);
        return redirect('/paket')->with('success','Paket Has Been Success!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(paket $paket)
    {
        //
  //dd($paket);
        return view('dashboard.paket.detpaket',[
            'paket' => $paket
        ]);
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(paket $paket)
    {
        //
         return view('dashboard.paket.edit',[
            'paket' => paket::all(),
            'customer' => customer::all(), 
              'paket'=> $paket
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paket $paket)
    {
        //dd($request);
        $rules = [ 
            'nama_paket' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'jumlah_jam' => 'required',
            'foto' => 'file|max:2024'
        ];
          
         
        
         
        $validatedData = $request->validate($rules);
         
        if($request->file('foto')) {
            
            $validatedData['foto'] = $request->file('foto')->store('upload-foto');
        }
        
       
        paket::where('id',$paket->id)
        ->update($validatedData);
        return redirect('/paket')->with('success','paket Has Been Update!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(paket $paket)
    {
        //
        if($paket->foto){
            Storage::delete($paket->foto);
            }
         paket::destroy($paket->id);
        return redirect('/paket')->with('deleted','paket Has Been Deleted!');
    }

    public function paket()
    {
       

            return view('paket',[
                "id_booking"=>"bookingnya",
                "post"=> paket::all(),
                ]);
    }

    
    function getPaket(Paket $paket){

        return response()->json($paket);
     }
 
}

?>
