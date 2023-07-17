@extends('layouts.main')

@section('container')
 
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id paket</td>
      <td>{{$post->id}}</td> 
    </tr>

    <tr>
          
      <td>Nama paket</td>
      <td>{{$post->nama_paket}}</td>
    </tr>

    <tr>
          
      <td>Wali paket</td>
      <td>{{$post->wali_paket}}</td>
    </tr>
    
  </tbody>
</table>


@endsection