<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\paket;
use App\Models\customer; 
use App\Models\ketentuan;
use App\Models\periode; 


use PDF;


class pembayaranController extends Controller
{

     
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id ;
         return view('pembayaran.index',[
        "id_pembayaran"=>"pembayarannya",
        "post"=> pembayaran::latest('status','Menunggu Konfirmasi')->filter(request(['search']))->paginate(10)->withQueryString(),
        "postper"=> pembayaran::all()
                    ->where('customer_id', $id),
       
        /*"periodecek"=>DB::table('pembayarans')
                    ->select('*')
                    ->rightJoin('periodes','pembayarans.periode_id','=','periodes.id')
                    ->where('customer_id', '!=', $id)
                    ->get()
*/
                    

                "periodecek" =>    DB:: table('pembayarans')
->join('periodes' ,'pembayarans.periode_id', '=', 'periodes.id')
->whereNotIn('periode_id', DB::table('pembayarans')->select('periode_id')->where('customer_id', '=', $id)) 
 
->get()

/*
        $periode_ids=pembayaran::all()
        ->where('customer_id', $id)->pluck('periode_id'),
        "periodecek" => pembayaran::all()
        ->whereNotIn('periode_id', $periode_ids)->pluck('periode_id')->unique('periode_id')
*/
          /*"periodecek"=>DB::table('pembayarans')
                    ->select('*')
                    ->rightJoin('periodes','pembayarans.periode_id','=','periodes.id')
                    ->whereNull('pembayarans.periode_id')
                    ->get()        
                   */

    ]);

    //dd($postper);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('pembayaran.create', [
            'paket' => paket::all(),
            'customer' => customer::all(),
            'pembayaran' => pembayaran::all(),
            'periode' => periode::all(),
            'ketentuan' => ketentuan::all(),
            "periodecek"=>DB::table('pembayarans')
                    ->select('*')
                    ->rightJoin('periodes','pembayarans.periode_id','=','periodes.id')
                    ->whereNull('pembayarans.periode_id')
                    ->get()
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
        // return $request->file('bukti')->store('upload-bukti');
         //dd($request);
        $validatedData = $request->validate([
            'slug' => 'required',
            'customer_id' => 'required',
            'periode_id' => 'required',
            'spp' => 'required',
            'denda' => 'required',
            'lainnya' => 'required',
            'total' => 'required',
            'bukti' => 'required|file|max:2024',
            'status' => 'required'
        ]);

        if($request->file('bukti')){
            $validatedData['bukti']=$request->file('bukti')->store('upload-bukti');
        } 
       $validatedData['uang_lainnya'] = $request->lainnya;

        // die();
        pembayaran::create($validatedData);
        return redirect('/pembayaran')->with('success','Pembayaran Has Been Success!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
  //dd($pembayaran);
        return view('pembayaran.detpembayaran',[
            'pembayaran' => $pembayaran
        ]);
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
         return view('pembayaran.edit',[
            'paket' => paket::all(),
            'customer' => customer::all(),
            'periode' => periode::all(),
            'ketentuan' => ketentuan::all(),
              'pembayaran'=> $pembayaran
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        //dd($request);
        $rules = [ 
            'customer_id' => 'required',
            'periode_id' => 'required',
            'spp' => 'required',
            'denda' => 'required',
            'lainnya' => 'required',
            'total' => 'required',
            'bukti' => 'file|max:2024',
            'status' => 'required'
        ];
          
        if($request->slug != $pembayaran->slug) {
            $rules['slug'] = 'required|unique:pembayarans';
        }
         
        $validatedData = $request->validate($rules);
         
        if($request->file('bukti')) {
            
            $validatedData['bukti'] = $request->file('bukti')->store('upload-bukti');
        }
        
       
        pembayaran::where('id',$pembayaran->id)
        ->update($validatedData);
        return redirect('/pembayaran')->with('success','pembayaran Has Been Update!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
        if($pembayaran->bukti){
            Storage::delete($pembayaran->bukti);
            }
         pembayaran::destroy($pembayaran->id);
        return redirect('/pembayaran')->with('deleted','Pembayaran Has Been Deleted!');
    }

    public function laporan()
    {
        $id = auth()->user()->id ;
        return view('pembayaran.laporan',[
       "id_pembayaran"=>"pembayarannya",
       "customer"=> customer::where('status_customer', 'like','aktif')->get()]);
       // dd($customernya);
       
    }

     public function kwitansi()
    {
        
        $id = auth()->user()->id ;
        return view('pembayaran.kwitansi');

    //dd($postper);
    }



    public function cetakpertanggal($tglawal, $tglakhir)
    {
        
        //dd(["tanggal awal".$tglawal, "tanggal akhir".$tglakhir]);
        $cetakpertanggalnya = pembayaran::all()
        ->where('status', '=',"Lunas")
        ->whereBetween('updated_at', [$tglawal, $tglakhir]);
        return view('pembayaran.pembayaran_pdf', compact('cetakpertanggalnya'));
        
    }


    
    public function cetakall()
    {
        
        //dd(["tanggal awal".$tglawal, "tanggal akhir".$tglakhir]);
        $cetakpertanggalnya = pembayaran::all();
        return view('pembayaran.pembayaran_pdf', compact('cetakpertanggalnya'));
        
    }


    public function cetakberdasarkan($berdasarkan)
    {
        $cetakpertanggalnya = pembayaran::where('status', 'like', $berdasarkan)->get();
        return view('pembayaran.pembayaran_pdf', compact('cetakpertanggalnya'));
    }

    public function cetakkartu($customernya)
    {
        //dd($customernya);
      //  $kartu = pembayaran::where('customer_id', 'like', $customernya)->get();
        


         
        return view('pembayaran.kartu_spp',[
       
       "post"=> pembayaran::latest('status','Menunggu Konfirmasi')->filter(request(['search']))->paginate(10)->withQueryString(),
       "periode"=> periode::all(),
       "kartu"=> pembayaran::where('customer_id', $customernya)->orderBy('periode_id', 'asc')->get(),
       "customer"=> customer::all()
       ->where('id', '=',$customernya),

  
              
                    ]);


        // $customer_id = 7;
        // $getPeriode = pembayaran::where('customer_id', $customer_id)->orderBy('periode_id', 'asc')->get();
        // dd($getPeriode);



       return view('pembayaran.kartu_spp', compact('kartu'));
        /* $pdf = PDF::loadView('pembayaran.kartu_spp', ['kartu'=>$kartu]);
        return $pdf->download('kartu_spp.pdf'); */
    }
    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(pembayaran::class, 'slug', $request->id);
        return response()->json(['slug' => $slug]);
    }


    public function export(Request $request){
        //ddd($request);
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        // $data = PDF::loadview('pembayaran.kwitansi', ['data' => $request]);
        // //mendownload laporan.pdf
        // return $data->download('kwitansi.pdf');
/*
        $data = pembayaran::all()
                    ->where('id', $request),
                return view('pembayaran.kwitansi', compact('data'));*/
        $data = pembayaran::WHERE("id",'=', $request->id)->get();
        $pdf = PDF::loadView('pembayaran.kwitansi', ['data'=>$data]);
        return $pdf->download('kwitansi.pdf');
    }

    
}

?>
