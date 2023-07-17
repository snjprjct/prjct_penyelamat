<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\paket; 
use App\Models\user;  
use App\Models\booking; 
use App\Models\customer; 


use PDF;


class homeController extends Controller
{

     
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $id = auth()->user()->id ;
         return view('home',[
        "id_pembayaran"=>"pembayarannya",
        "post"=> pembayaran::latest('status','Menunggu Konfirmasi')->filter(request(['search']))->paginate(10)->withQueryString(),
         "usercontact"=>user::find(4),
         "galery"=>galery::all(),
        


         
         

    ]);

}

    public function dashboard()
    {
        $date = Carbon::now()->subDays(7);
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(7);

        $id = auth()->user()->id ;
         return view('dashboard.home',[
          //  "created" => booking::groupby(date('created_at'))->where('created_at', '>=',  $date)->get(),
            "created" => booking::where('created_at', '>=',  $date)->get(),
            "graf" => DB::table('bookings')
            ->selectRaw("count(id) sum, DATE_FORMAT(tgl_booking, '%d %M %Y') tgl_booking")
            ->where('status','Konfirmasi')
            ->where('tgl_booking', '>=', $startDate.' 00:00:00')
            ->where('tgl_booking', '<=', $endDate.' 23.59.59') 
            ->groupBy('tgl_booking')
            ->get(),
            "kategori" => booking::groupBy('paket_id'),
            "start" => Carbon::today(),
            "end"   => Carbon::today()->addDays(7),
       
         

    ]);



    //dd($postper);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
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
       "siswa"=> siswa::where('status_siswa', 'like','aktif')->get()]);
       // dd($siswanya);
       
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

    public function cetakkartu($siswanya)
    {
        //dd($siswanya);
      //  $kartu = pembayaran::where('siswa_id', 'like', $siswanya)->get();
        


         
        return view('pembayaran.kartu_spp',[
       
       "post"=> pembayaran::latest('status','Menunggu Konfirmasi')->filter(request(['search']))->paginate(10)->withQueryString(),
       "periode"=> periode::all(),
       "kartu"=> pembayaran::where('siswa_id', $siswanya)->orderBy('periode_id', 'asc')->get(),
       "siswa"=> siswa::all()
       ->where('id', '=',$siswanya),

  
              
                    ]);


        // $siswa_id = 7;
        // $getPeriode = pembayaran::where('siswa_id', $siswa_id)->orderBy('periode_id', 'asc')->get();
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
