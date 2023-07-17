@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <br>
    <a href="/team" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

            <table class="table">

                <tbody>

                  
                    <tr>

                        <td>Nama Team</td>
                        <td>:</td>
                        <td>{{$team->nama}}</td>
                    </tr>

                    <tr>

                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $team->jk }}</td>
                    </tr>

                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{$team->tempat_lahir}} / {{ $team->tanggal_lahir }}</td>
                    </tr>

                    <tr>

                        <td>Telepon</td>
                        <td>:</td>
                        <td>{{ $team->telepon }}</td>
                    </tr>

                    <tr>

                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $team->alamat }}</td>
                    </tr>
 


                </tbody>
            </table>

        </div>


        <div class="col-md-6">

            <table class="table">

                <tbody>

                    
                    <tr>

                        <td>Posisi</td>
                        <td>:</td>
                        <td>{{ $team->posisi }}</td>
                    </tr>
                     <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="{{ asset('storage/' . $team->foto) }}" alt="{{ $team->nama }}" class="img-fluid mt-3"></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
