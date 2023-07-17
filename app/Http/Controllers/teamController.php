<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team; 
use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Facades\Auth;

class teamController extends Controller
{
    public function index()
    {
        //$id = auth()->user()->level ;

        if(Auth::guest()==true):

            return view('team',[
                "id_team"=>"teamnya",
                "post"=> team::latest()->paginate(10)->withQueryString(),
                "postper"=> team::all()
                ]);

        elseif(auth()->user()->level=="Administrator"):
        
            return view('dashboard.team.index',[
                "id_team"=>"teamnya",
                "post"=> team::latest()->filter(request(['search']))->paginate(5)->withQueryString(),
                "postper"=> team::all()
                     ]);


        else :


            return view('team',[
                "id_team"=>"teamnya",
                "post"=> team::latest()->paginate(10)->withQueryString(),
                "postper"=> team::all()
                ]);

                    
        
       
        endif;
 
    }

    

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('dashboard.team.create', [
            'periodecek' => team::all(),  
            
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
            'nama' => 'required',
            'jk' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'posisi' => 'required',  
            'foto' => 'required|file|max:2024', 
        ]);

         if($request->file('foto')){
            $validatedData['foto']=$request->file('foto')->store('upload-foto');
        }  

        //ddd($validatedData);
        team::create($validatedData);
        return redirect('/team')->with('success','team Has Been Success!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
  //dd($team);
        return view('dashboard.team.detteam',[
            'team' => $team
        ]);
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        //
         return view('dashboard.team.edit',[
            'team' => team::all(), 
              'team'=> $team
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        //dd($request);
        $rules = [ 
            'nama' => 'required',
            'jk' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'posisi' => 'required',  
            'foto' => 'file|max:2024'
        ];
          
         
        
         
        $validatedData = $request->validate($rules);
         
        if($request->file('foto')) {
            
            $validatedData['foto'] = $request->file('foto')->store('upload-foto');
        }
        
       
        team::where('id',$team->id)
        ->update($validatedData);
        return redirect('/team')->with('success','team Has Been Update!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        //
        if($team->foto){
            Storage::delete($team->foto);
            }
         team::destroy($team->id);
        return redirect('/team')->with('deleted','team Has Been Deleted!');
    }

    function getteam(team $team){

        return response()->json($team);
     }
 
}
