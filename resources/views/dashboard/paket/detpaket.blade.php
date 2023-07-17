@extends('dashboard.layouts.main') 

@section('container')

<div class="container">
    <br>
    <a href="/paket" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>Nama Paket</td>
                        <td>:</td>
                        <td>{{$paket->nama_paket}}</td> 
                    </tr>
                    
                    <tr>

                        <td>Harga</td>
                        <td>:</td>
                        <td>@currency($paket->harga)</td>
                    </tr>

                    <tr>

                        <td>Jumlah Jam</td>
                        <td>:</td>
                        <td>{{$paket->jumlah_jam}} Jam</td>
                    </tr>

                 


                </tbody>
            </table>

        </div>


        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>Keterangan</td>
                        <td>:</td>
                        <td>{{$paket->keterangan}}</td>
                    </tr>

                  

                     <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="{{ asset('storage/' . $paket->foto) }}"class="img-fluid mt-3"></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
