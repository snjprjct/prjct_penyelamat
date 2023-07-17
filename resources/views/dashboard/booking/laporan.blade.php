@extends('dashboard.layouts.main') 



@section('judul')
Laporan booking
@endsection


@section('container')

<input value="{{ $aa = auth()->user()->level }}" hidden>



<form>
<div class="container">
<h4>Cetak Pembayaran</h4>
<br>
<div class="form-group "> 
   <label for="colFormLabel" class="col-sm-2 col-form-label">customer</label>
    @if($aa=="Administrator")
    <div class="col-sm-10">
       <select class="custom-select mr-sm-2 selectpicker" data-live-search="true" name="customernya" id="berdasarkan" >
        <option selected>Pilih customer...</option>
       @foreach( $customer as $customer)
                        
                         <option  value="{{$customer->id}}"  >{{$customer->nama_customer}}</option>
                         @endforeach
  
      </select>
    </div>

    @else 
    <input class="col-sm-2 form-control" hidden style="display: -webkit-inline-box" id="berdasarkan" name="customernya" value="{{ auth()->user()->customer->id }}">
    <input class="form-control"  style="display: -webkit-inline-box; width:70%"   value="{{ auth()->user()->customer->nama_customer }}">
    @endif
   </div>
   {{-- <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Berdasarkan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="isinya" id="isinya" placeholder="Tulis">
    </div>
  </div> --}}
  </div>
    <a href="" onclick="this.href='/booking/kartu-customer/'+ document.getElementById('berdasarkan').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
</form>

 @if($aa=="Administrator")
<form>
<div class="container">
<h4>Cetak Berdasarkan Status</h4>
<br>
<div class="form-group row"> 
   <label for="colFormLabel" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
       <select class="custom-select mr-sm-2" name="status" id="status">
        <option selected>Pilih Status...</option>
        <option value="Konfirmasi">Konfirmasi</option>
  <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
  <option value="Ditolak">Ditolak</option>
  <option value="Batal">Batal</option>
      </select>
    </div>
   </div>
   {{-- <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Berdasarkan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="isinya" id="isinya" placeholder="Tulis">
    </div>
  </div> --}}
  </div>
    <a href="" onclick="this.href='/booking/laporan-berdasarkan/'+ document.getElementById('status').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
</form>


<div class="container">
<br>
<h4>Cetak Berdasarkan Tanggal</h4>
<Br>
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Awal</label>
    <div class="col-sm-10">
      <input type="date" name="tglawal" id="tglawal" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Akhir</label>
    <div class="col-sm-10">
      <input type="date" name="tglakhir" id="tglakhir" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="input-group mb-3">
    <a href="" onclick="this.href='/booking/laporan-pertanggal/'+ document.getElementById('tglawal').value + '/' + 
    document.getElementById('tglakhir').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
  </div>

  </form>
<br>
<br>
  <a href="" onclick="this.href='/booking/laporan-all/'" target="_blank" class="btn tbn-primary col-md-12">cetak Semua Laporan</a>
 

</div>
@endif

    @endsection
