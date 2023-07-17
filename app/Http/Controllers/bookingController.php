<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 

use Illuminate\Http\Request;
use App\Models\booking; 
use App\Models\paket;
use App\Models\customer;  

use Illuminate\Support\Facades\Auth;


use PDF;


class bookingController extends Controller
{

     
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id ;
        $level = auth()->user()->level ;

         if($level=="Customer"):

                 return view('create',[
                "id_booking"=>"bookingnya",
                "post"=> booking::latest('status','Menunggu Konfirmasi')->filter(request(['search']))->paginate(10)->withQueryString(),
                "paket"=> paket::all(), ]);

        else:
                return view('dashboard.booking.index',[
                "id_booking"=>"bookingnya",
                "post"=> booking::latest('status','Menunggu Konfirmasi')->filter(request(['search']))->paginate(10)->withQueryString(),
                "postper"=> booking::all()
                            ->where('customer_id', $id),
                        
                        ]);
       
         endif;
       

       

    
    }


    public function cek(Request $request)
    {
      // dd($request);
       $paket = paket::find($request->paket);

        $jam = $paket->jumlah_jam; 
        $nama_paket = $paket->nama_paket; 
        $harga = $paket->harga; 

        $sekarang=$request->jam_booking;
        $tgl_booking=$request->tgl_booking;
       $selisih=$jam;
       $nanti=date('H:i',strtotime($sekarang.' +'.$selisih.'hour'));
      // dd(date('H:i', strtotime($sekarang.'+'.$selisih.'hour')));

       
       $response = [
        'jam_booking'   =>  $sekarang,
        'jam_selsai'   =>  $nanti,
        'tgl_booking'   =>  $tgl_booking,
        'paket_id'   =>  $request->paket,
        ];

 
        //dd($request->tgl_booking);
        $tanggalan = booking::where('tgl_booking', $request->tgl_booking);
            
        if(booking::where('tgl_booking', '=', $request->tgl_booking)->count()  == null )
        {
            //dd("ooo");

            return redirect('/create')->with('success','Jam Tersedia! Silahkan Lakukan Pemesanan')->with([
                'jam_booking'   =>  $sekarang,
                'jam_selesai'   =>  $nanti,
                'nama_paket'   =>  $nama_paket,
                'tgl_booking'   =>  $tgl_booking,
                'harga'   =>  $harga,
                'paket_id'   =>  $request->paket,
             ]);

        }else
        {
           //dd("aja");

            $kapan = booking::all()->where('tgl_booking','=', $tgl_booking);
            
        foreach($kapan as $haha):
        

           // dd("foreach");

       if(booking::where('tgl_booking', '=', $request->tgl_booking) 
       ->whereTime('jam_booking', '>=', $haha->jam_booking)
       ->whereTime('jam_selesai', '>=', $haha->jam_selesai) 
                    ->first() == True) {

                       // dd("sudah ada");

        if ($sekarang >= $haha->jam_booking && $sekarang <= $haha->jam_selesai):
        
        return redirect('/create')->with('update', 'Jam Sudah ada yang Booking! Silahkan Pilih Jam Lainnya')->with([
            'jam_booking'   =>  $sekarang,
            'jam_selesai'   =>  $nanti,
            'nama_paket'   =>  $nama_paket,
            'tgl_booking'   =>  $tgl_booking,
            'harga'   =>  $harga,
            'paket_id'   =>  $request->paket,
         ]);
        

        else:

            return redirect('/create')->with('success','Jam Tersedia! Silahkan Lakukan Pemesanan')->with([
                'jam_booking'   =>  $sekarang,
                'jam_selesai'   =>  $nanti,
                'nama_paket'   =>  $nama_paket,
                'tgl_booking'   =>  $tgl_booking,
                'harga'   =>  $harga,
                'paket_id'   =>  $request->paket,
             ]);

            endif;
        }

        else {

           dd("ga ada");
 
          //  $periodeCreated=periode::create($validatedData);
          //dd("Ga ada");
         /*  return redirect()->action(
            [bookingController::class, 'index'], ['posta' => $request]
        )->with('success', 'Jam Tersedia! Silahkan Lakukan Pemesanan'); */
        return redirect('/create')->with('success','Jam Tersedia! Silahkan Lakukan Pemesanan')->with([
            'jam_booking'   =>  $sekarang,
            'jam_selesai'   =>  $nanti,
            'nama_paket'   =>  $nama_paket,
            'tgl_booking'   =>  $tgl_booking,
            'harga'   =>  $harga,
            'paket_id'   =>  $request->paket,
         ]);

        }

    endforeach;

        } 
    }

    

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         return view('dashboard.booking.create', [
            'paket' => paket::all(),
            'customer' => customer::all(),
            'booking' => booking::all(), 
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
            'customer_id' => 'required',
            'paket_id' => 'required',
            'tgl_booking' => 'required',
            'jam_booking' => 'required',
            'jam_selesai' => 'required', 
            'catatan' => 'required',
            'total' => 'required',
            'bukti' => 'required|file|max:2024',
            'status' => 'required'
        ]);

        if($request->file('bukti')){
            $validatedData['bukti']=$request->file('bukti')->store('upload-bukti');
        } 
       // $validatedData['uang_lainnya'] = $request->lainnya;

       $level = auth()->user()->level;
       booking::create($validatedData);

       if($level=="Customer"):
       return redirect('/riwayat')->with('success','booking Has Been Success! Wait For Confirmation');
       else: 
       return redirect('/booking')->with('success','booking Has Been Success! Wait For Confirmation');
       endif;
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
  //dd($booking);
        return view('dashboard.booking.detbooking',[
            'booking' => $booking
        ]);
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
         return view('dashboard.booking.edit',[
            'paket' => paket::all(),
            'customer' => customer::all(), 
              'booking'=> $booking
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //dd($request);
        $rules = [ 
            'customer_id' => 'required',
            'tgl_booking' => 'required',
            'paket_id' => 'required',
            'jam_booking' => 'required',
            'jam_selesai' => 'required',  
            'status' => 'required'
        ];
          
        
         
        if($request->file('bukti')) {
            $validatedData['bukti'] = $request->file('bukti')->store('upload-bukti');
        }

        $validatedData = $request->validate($rules);
       
        booking::where('id',$booking->id)
        ->update($validatedData);
        return redirect('/booking')->with('success','booking Has Been Update!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
        if($booking->bukti){
            Storage::delete($booking->bukti);
            }
         booking::destroy($booking->id);
        return redirect('/booking')->with('deleted','booking Has Been Deleted!');
    }

    public function laporan()
    {
        $id = auth()->user()->id ;
        return view('dashboard.booking.laporan',[
       "id_booking"=>"bookingnya",
       "customer"=> customer::all()]);
       // dd($customernya);
       
    }

     public function kwitansi()
    {
        
        $id = auth()->user()->id ;
        return view('dashboard.booking.kwitansi');

    //dd($postper);
    }



    public function cetakpertanggal($tglawal, $tglakhir)
    {
        
        //dd(["tanggal awal".$tglawal, "tanggal akhir".$tglakhir]);
        $cetakpertanggalnya = booking::all()
        ->where('status', '=',"Konfirmasi")
        ->whereBetween('tgl_booking', [$tglawal." 00:00:00", $tglakhir." 23:59:59"]);
        return view('dashboard.booking.booking_pdf', compact('cetakpertanggalnya'));
        
    }


    
    public function cetakall()
    {
        
        //dd(["tanggal awal".$tglawal, "tanggal akhir".$tglakhir]);
        $cetakpertanggalnya = booking::all();
        return view('dashboard.booking.booking_pdf', compact('cetakpertanggalnya'));
        
    }


    public function cetakberdasarkan($berdasarkan)
    {
        $cetakpertanggalnya = booking::where('status', 'like', $berdasarkan)->get();
        return view('dashboard.booking.booking_pdf', compact('cetakpertanggalnya'));
    }

    public function riwayat()
    {
        $id = auth()->user()->customer->id ;

            return view('riwayat',[
                "id_booking"=>"bookingnya",
                "post"=> booking::all()
                    ->where('customer_id', $id),
                ]);
    }

    public function cetakkartu($customernya)
    { 
        return view('dashboard.booking.kartu_spp',[
       
       "post"=> booking::latest('status','Menunggu Konfirmasi')->filter(request(['search']))->paginate(10)->withQueryString(),
        
       "kartu"=> booking::where('customer_id', $customernya)->orderBy('created_at', 'desc')->get(),
       "customer"=> customer::find($customernya),
       "siapa"=>$customernya,
         ]);
 
       return view('dashboard.booking.kartu_spp', compact('kartu')); 
    } 

    public function export(Request $request){
      
        $data = booking::WHERE("id",'=', $request->id)->get();
        $pdf = PDF::loadview('dashboard.booking.kwitansi', ['data'=>$data]);
        return $pdf->download('kwitansi.pdf');
    }

    
}

?>
