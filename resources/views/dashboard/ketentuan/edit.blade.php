
@extends('dashboard.layouts.main') 



@section('judul')
Edit Data ketentuan
@endsection


@section('container')
 
 
<div class="container">
  <br>
    <a type="button" href="{{ URL::previous() }}" class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/ketentuan/{{$ketentuan->id}}">
      
 
 @csrf
   @method('put')

     <div class="form-group">
    <label for="exampleInputPassword1">id</label>
    <input type="text" name="id"  value="{{ old('id',$ketentuan->id)}}" readonly required class="form-control @error('id') is->invalid @enderror" id="id" placeholder="id">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nama ketentuan</label>
    <input type="text" value="{{ old('keterangan',$ketentuan->keterangan)}}" 
    required name="keterangan" class="form-control @error('keterangan') is->invalid @enderror" id="keterangan" aria-describedby="keterangan" placeholder="Nama Keterangan"> 
  </div>


  @error('id')
  <div class="invalid-feedback">
    error nich
  </div>
  @enderror

  <div class="form-group">
    <label for="exampleInputPassword1">SPP</label>
    <input type="text" required  value="{{ old('spp',$ketentuan->spp)}}" name="spp" class="form-control" id="spp" placeholder="Nama Wali ketentuan">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Uang Lainnya</label>
    <input type="text" required  value="{{ old('uang_lainnya',$ketentuan->uang_lainnya)}}" name="uang_lainnya" class="form-control" id="uang_lainnya" placeholder="Nama Wali ketentuan">
  </div>
 
    <input type="text" required hidden value="{{ old('denda',$ketentuan->denda)}}" name="denda" class="form-control" id="denda" placeholder="Nama Wali ketentuan">
 

   <button type="submit" class="btn btn-primary">Edit ketentuan</button>
</form>

</div>
 
@endsection




