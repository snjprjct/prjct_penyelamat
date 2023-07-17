@extends('layouts.main')



@section('judul')

@endsection
 
@section('container')

<input value="{{ $aa = auth()->user()->level }}" hidden>
 
<div class="container" style="margin-top:10%; margin-bottom:5%">
     
   <CENTER> <h3>RIWAYAT PEMESANAN</h3></CENTER>
   <bR>
   <bR>

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @elseif(session()->has('update'))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
    @elseif(session()->has('deleted'))
    <div class="alert alert-danger" role="alert">
        {{session('deleted')}}
    </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th> 
                <th scope="col">Nama Paket</th>
                <th scope="col">Tanggal Foto</th>
                <th scope="col">Jam Foto</th>
                <th scope="col">Total</th>
                <th scope="col">Catatan</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>


            @foreach($post as $posta)


            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $posta->paket->nama_paket}}</td>
                <td>{{ $posta->tgl_booking }} </td>
                <td>{{ $posta->jam_booking }} - {{$posta->jam_selesai}}</td>
                <td>@currency($posta->total)</td>
                <td>{{ $posta->catatan}}</td>
                <td>

                    <a type="button" class="btn" 

                    style="background:
                    @if($posta->status=='Menunggu Konfirmasi') Orange @elseif($posta->status=='Konfirmasi')green @else red @endif
                    " >{{ $posta->status }}</a>
                  {{--   @if($posta->status == "Menunggu Konfirmasi")
                    <form action="/booking/{{ $posta->id }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf

                        <button name="status" onclick="return confirm('Are You Sure')" role="button"
                            class="btn btn-danger">Batal</button>
                    </form>
                    @endif --}}
                </td>
            </tr>
            @endforeach

        </tbody>

        
    </table>
</div>
    
   {{--  <div class="d-flex center-content-end">{{ $post->links() }} </div>
 --}}
    @endsection
