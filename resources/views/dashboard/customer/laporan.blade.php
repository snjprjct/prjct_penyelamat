@extends('dashboard.layouts.main') 



@section('judul')
Laporan customer
@endsection


@section('container')

<input value="{{ $aa = auth()->user()->level }}" hidden>


<form>
<div class="container">
<h4>Cetak Berdasarkan</h4>
<br>
<div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Berdasarkan</label>
    <div class="col-sm-10">
       <select class="custom-select mr-sm-2" name="berdasarkan" id="berdasarkan">
        <option selected>Pilih Berdasarkan...</option>
        <option value="nis">NIS customer</option>
        <option value="nama_customer">Nama customer</option>
        <option value="jk">Jenis Kelamin</option>
        <option value="alamat">Alamat customer</option>
        <option value="paket_id">paket</option>
        <option value="tahun_masuk">Tahun Masuk</option>
        <option value="status_byr">Status Bayar</option>
        <option value="status_customer">Status customer</option>
      </select>
    </div>
   </div>
   <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Berdasarkan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="isinya" id="isinya" placeholder="Tulis">
    </div>

  </div>
  </div>
    <a href="" onclick="this.href='/customer/laporan-berdasarkan/'+ document.getElementById('berdasarkan').value + '/' + 
    document.getElementById('isinya').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
</form>

 <a href="" onclick="this.href='/customer/laporan-all/'" target="_blank" class="btn tbn-primary col-md-12">cetak laporan Lengkap</a>
<div class="container">

{{-- <br>
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
    <a href="" onclick="this.href='/pembayaran/laporan-pertanggal/'+ document.getElementById('tglawal').value + '/' + 
    document.getElementById('tglakhir').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
  </div>

  </form> --}}
</div>
    @endsection
