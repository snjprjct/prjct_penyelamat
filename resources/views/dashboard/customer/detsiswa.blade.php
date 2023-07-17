

@extends('dashboard.layouts.main') 

@section('container')
 
<div class="container">
  <br>
  @if(auth()->user()->level == 'admin') {
<a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
} @endif
<br>
<br>
<div class="row">


<div class="col-md-4">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>paket</td>
      <td>:</td>
      <td>{{$customer->paket->nama_paket}}</td>
    </tr>

    <tr>
          
      <td>Wali customer</td>
      <td>:</td>
      <td>{{$customer->paket->wali_paket}}</td>
    </tr>

    <tr>
          
      <td>Tahun Masuk</td>
      <td>:</td>
      <td>{{$customer->tahun_masuk}}</td>
    </tr>

    <tr>
          
      <td>Status customer</td>
      <td>:</td>
      <td>{{$customer->status_customer}}</td>
    </tr>

    <tr>
          
      <td>Status Pembayaran</td>
      <td>:</td>
      <td>{{$customer->status_byr}}</td>
    </tr>

    <TR>
    <td></td>
      <td></td>
    <td rowspan="4">
      <input hidden value="{{ $aa = auth()->user()->level }}"  >
    @if($aa=="customer")
     <a href="/customer/{{$customer->slug}}/edit"  role="button" class="new button">
     <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" /> Data customer</a>
    @endif
    </td>
    </TR>
</tbody>
</table>
</div>



<div class="col-md-8">
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id customer</td>
      <td>:</td>
      <td>{{$customer->id}}</td> 
    </tr>

    <tr>
          
      <td>NIS customer</td>
      <td>:</td>
      <td>{{$customer->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama customer</td>
      <td>:</td>
      <td>{{$customer->nama_customer}}</td>
    </tr>

    <tr>
          
      <td>Genre</td>
      <td>:</td>
      <td>{{$customer->jk}}</td>
    </tr>


    <tr>
          
      <td>Alamat customer</td>
      <td>:</td>
      <td>{{$customer->alamat}}</td>
    </tr>

    <tr>
          
      <td>Telepon customer</td>
      <td>:</td>
      <td>{{$customer->telepon}}</td>
    </tr>


    <tr>
          
      <td>Nama Ayah</td>
      <td>:</td>
      <td>{{$customer->nama_ayah}}</td>
    </tr>
    
    <tr>
          
      <td>NIS customer</td>
      <td>:</td>
      <td>{{$customer->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama Ibu</td>
      <td>:</td>
      <td>{{$customer->nama_ibu}}</td>
    </tr>

    <tr>
          
      <td>NIS customer</td>
      <td>:</td>
      <td>{{$customer->nis}}</td>
    </tr>


    <tr>
          
      <td>Telepon Orang Tua</td>
      <td>:</td>
      <td>{{$customer->telepon_ortu}}</td>
    </tr>

    <tr>
          
      <td>Email customer</td>
      <td>:</td>
      <td>{{$customer->email}}</td>
    </tr>
<!--
    <tr>
          
      <td>Username customer</td>
      <td>:</td>
      <td>{{$customer->username}}</td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td>{{$customer->password}}</td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

@endsection