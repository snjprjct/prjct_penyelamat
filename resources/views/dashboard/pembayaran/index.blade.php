@extends('dashboard.layouts.main') 



@section('judul')
Data Pembayaran
@endsection


@section('container')

<input value="{{ $aa = auth()->user()->level }}" hidden>
@if( $aa =="Administrator")
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/pembayaran/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
            <form action="/pembayaran">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" value="{{request('search')}}"
                        placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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
                <th scope="col">Periode</th>
                <th scope="col">Nama customer</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            @foreach($post as $posta)


            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><a href="/pembayaran/{{ $posta['slug']}}">{{ $posta->periode->bulan }}
                        {{ $posta->periode->tahun }}</a></td>
                <td>{{ $posta->customer->nama_customer}}</td>
                <td>@currency($posta->total)</td>
                <td>{{ $stat = $posta->status }}</td>
                <td>
                    @if($stat=="Menunggu Konfirmasi")
                    <a href="/pembayaran/{{$posta->slug}}/edit" role="button" class="btn btn-warning">Konfirmasi</a>
                    @endif
                    <form action="/pembayaran/{{ $posta->slug }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf

                        <button onclick="return confirm('Are You Sure')" role="button"
                            class="new button">
    <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" /></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex center-content-end">{{ $post->links() }} </div>


    @else
    <div class="row">
   
     
    <br>
    <div class="col-md-8">
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Total</th> 
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>


                @foreach($postper as $posta)


                <tr>
                    <th scope="row"><a href="/pembayaran/cetak_pdf">{{ $loop->iteration }}</a></th>
                    <td><a href="/pembayaran/{{ $posta['slug']}}">
                            {{ $posta->periode->bulan }}
                            {{ $posta->periode->tahun }}</a></td>

                    <td> @currency($posta->total)</td>
                    <input value="{{ $status = $posta->status}}" hidden>
                  @if(  $status == "Lunas")
                   <td>
                        <a href="" role="button" class="btn btn-success">Lunas</a>
                        <a href="{{ url('exportlaporan') }}?id={{$posta->id}}" role="button" class="btn btn-secondary">Cetak Kwitansi</a>

                    </td>

                  @else
                    <td>
                        <a href="" role="button" class="btn btn-warning">Menunggu Konfirmasi</a>

                    </td>
                    @endif
                </tr>
                @endforeach

            </tbody>
        </table>

        <div class="d-flex center-content-end">{{ $post->links() }} </div>


    </div>
     <div class="col-md-4 ">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Periode Nunggak</th> 
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>


                @foreach($periodecek as $postar)


                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><a href="">
                            {{ $postar->bulan }}
                            {{ $postar->tahun }}</a></td>

                    
                    <td>
                        <a href="/pembayaran/create?bulan={{ $postar->bulan }}" role="button" class="btn btn-warning">Bayar</a>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
    <br>
    </div>
    @endif

    @endsection
