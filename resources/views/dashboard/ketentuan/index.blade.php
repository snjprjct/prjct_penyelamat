
@extends('dashboard.layouts.main') 



@section('judul')
Ketentuan Pembayaran
@endsection


@section('container')

<div class="container">
      <div class="row">
        <div class="col-md-8">
          <!-- <a type="button" href="/ketentuan/create" class="btn btn-primary">Tambah</a>  -->
        </div>  
        <div class="col-md-4">
          <form action="/ketentuan">
            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" 
              value="{{request('search')}}"
              placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary" >Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>

<input value="{{ $aa = auth()->user()->level }}" hidden>
@if( $aa =="Administrator")
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-8">
    <form action="/ketentuan">
    </form>
  </div>
  </div>

   @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
  @endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th> 
      <th scope="col">SPP</th> 
      <th scope="col">Uang lainnya</th>
      <th scope="col">Catatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
 
      @foreach($post as $posta)
      
    <tr>
      <th scope="row">{{$loop->iteration}}</th> 
      <td>Rp. {{ $posta['spp'] }}</td> 
      <td>Rp. {{ $posta['uang_lainnya'] }}</td>
      <td>{{ $posta['keterangan'] }}</td>
      <td>
          <a href="/ketentuan/{{ $posta['id']}}/edit" role="button" class="new button">
     <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" /></a>
         
      </td>
    </tr>
    @endforeach
  </tbody>
</table>




@Else


<style>
    @import url("https://fonts.googleapis.com/css?family=Raleway");
      * {
        box-sizing: border-box;
        font-family: "Raleway", "Arial";
      }

      .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
      }

      @-webkit-keyframes slideInLeft {
        from {
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
          visibility: visible;
        }
        to {
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      }
      @keyframes slideInLeft {
        from {
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
          visibility: visible;
        }
        to {
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      }
      .slideInLeft {
        -webkit-animation-name: slideInLeft;
        animation-name: slideInLeft;
      }

      @-webkit-keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
      }

      .card {
        margin: 0 auto;
        width: 650px;
        height: 350px;
        border: 1px solid #888888;
        margin: auto auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .card .top {
        padding: 1px;
        color: white;
        background-color: #3498db;
        width: 100%;
        height: 50%;
        font-size: 2em;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
      }
      .card .top .img {
        z-index: 100;
      }
      .card .bottom {
        width: 100%;
        height: 50%;
        padding: 10px;
        /*background-color: $blue;*/
      }
      .card .bottom button {
        width: 120px;
        height: 50px;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        outline: none;
        text-overflow: ellipsis;
      }
      .card .bottom .blue {
        background-color: #3498db;
        color: white;
      }
      .card .bottom .blue:hover {
        background-color: #196090;
      }
      .card .bottom .happy {
        background-color: #2ecc71;
        color: white;
      }
      .card .bottom .happy:hover {
        background-color: #1b7943;
      }
      .card .bottom .worry {
        background-color: #9b59b6;
        color: white;
      }
      .card .bottom .worry:hover {
        background-color: #623475;
      }
      .card .bottom .none {
        background-color: #ecf0f1;
      }
      .card .bottom .none:hover {
        background-color: #b1c2c6;
      }
</style>

@foreach($post as $posta)
<div class="card">
  <div class="top">
    <div class="text animated slideInLeft">
      <span>Total SPP</span><br>
      <span>Rp. {{ $posta['spp'] + $posta['uang_lainnya'] }}.000</span>
    </div>
    <div class="img animated fadeIn">
      <img src="http://2.1m.yt/E86DSfk.png" alt="mylogo" width="140px" />
    </div>
  </div>

  <div class="bottom" style="padding-left: 20px;">
    <p>Ketentuan</p>
    <div class="row" >
      <div class="col-md-6">
        Uang SPP Tunggal
      </div>
       <div class="col-md-6">
        : Rp. {{$posta['spp'] }}
      </div>
       <div class="col-md-6">
        Uang Komite
      </div>
       <div class="col-md-6">
        : Rp. {{$posta['spp'] }}
      </div>
    </div>
   <br>
    <p>{{$posta['keterangan'] }}</p>
  </div>
</div>
@endforeach
@endif
<div class="d-flex center-content-end">{{ $post->links() }} </div>
</div>
@endsection