@extends('layouts.main')



@section('judul')

@endsection


@section('container')

<style>
    .card {
        border: solid 1px #dbdad7;
        width: 100%;
        padding-left: 10px !important;
        padding-bottom: 10px !important;
        padding-right: 10px !important;
        padding-top: 0px !important;

    }

    .card-title {
        margin: auto;
        padding: 15px;
        background-color: #2f7fad;
        color: white;
        width: 80%;
    }

    div.card-body {
        padding: 0px;
    }

    .custom-select {
        width: 100%;
    }

    .btn2 {
        margin-left: 10%;
    }

    input {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important;
    }

    input:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    select {

        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important;
    }

    select:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .radiobtn {
        margin-left: 3.5%;
    }

    .icons {
        margin: auto !important;

    }

    .fa {
        border-radius: 25px;
        width: 10%;
        margin-left: 5%;
        border: solid 2px #dbdad7;
        margin-top: 5%;
        text-align: center;
    }

    .fa-plane {
        color: #1cad9f;
    }

    .fa-taxi {
        color: #c2f700;
    }

    .fa-train {
        color: red;
    }

    @media only screen and (max-width: 600px) {
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: 90%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important;

        }

        .fa {
            border-radius: 25px;
            width: 15%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center;
        }
    }
</style>



<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="">
                <div class="card shadow mb-5 bg-white rounded">
                    <Br>
                    <Br>
                    <div class="col-md-12 col-md-pull-7">
                        <div class="booking-form">
                            <form method="post" action="/booking/cek">
                                @csrf

                                @if(session()->has('update'))
                                <div class="alert alert-warning" role="alert">
                                    <center> {{session('update')}} </center>
                                </div>

                                @endif
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Tanggal Pemesanan</span>
                                            <input class="form-control" name="tgl_booking" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Jam Pemesanan</span>
                                            <input class="form-control" name="jam_booking" type="time" required>
                                        </div>
                                    </div>
                                </div>
                              
                                @if (request()->idp==null)
                                    
                               
                                <input type="text" hidden name="paket"
                                value="{{ session()->get('paket_id')}}"
                                class="browser-default custom-select mb-4" id="select">
                                @else
                                <input class="form-control" name="paket" hidden value="{{request()->idp}}" type="text"
                                >
                                @endif

                                <div class="form-btn">
                                    <button class="card-title text-center shadow mb-5 rounded"
                                        style="width:100%; border:none">Check availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-mb-12">
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <!--Card-->
                    <div class="card shadow mb-5 bg-white rounded">

                        <!--Card-Body-->
                        <form method="post" action="/booking" enctype="multipart/form-data">


                            @csrf




                            <div class="container card-body" style="padding:30px">

                                <!--Card-Title-->
                                <p class="card-title text-center shadow mb-5 rounded">Booking Form</p>

                                <div class="container">
                                    <center> @if(session()->has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('success')}}
                                        </div>

                                        @elseif(session()->has('deleted'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('deleted')}}
                                        </div>
                                        @endif </center>
                                </div>

                                <hr>




                                <!--Second Row-->
                                <div class="row">


                                    <div class="col-sm-6">
                                        <label>Tanggal Booking</label>
                                        <Br>
                                        <input type="date" name="tgl_booking"
                                            value="{{ session()->get('tgl_booking') }}"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                        <br>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Nama Paket yang diPilih</label>
                                        <Br>
                                        <input type="text" value="{{ session()->get('nama_paket')}}"
                                            class="browser-default custom-select mb-4" id="select">
                                        <input type="text" hidden name="paket_id"
                                            value="{{ session()->get('paket_id')}}"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                        <br>
                                    </div>



                                </div>


                                <!--Third Row-->
                                <div class="row">

                                    <div class="col-sm-6">
                                        <label>Jam Booking</label>
                                        <Br>
                                        <input type="text" readonly name="jam_booking"
                                            value="{{ session()->get('jam_booking') }}"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Jam Selesai</label>
                                        <Br>
                                        <input type="text" name="jam_selesai"
                                            value="{{ session()->get('jam_selesai') }}"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                    </div>



                                </div>


                                <!--Fourth Row-->
                                <div class="row mt-4">

                                    <div class="col-sm-6">
                                        <label>Catatan</label>
                                        <Br>
                                        <textarea class="browser-default custom-select mb-4" row="3"
                                            style="height:100px" name="catatan"></textarea>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Harga</label>
                                        <Br>
                                        <input type="text" name="total" value="{{ session()->get('harga')}}"
                                            class="browser-default custom-select mb-4" id="select"> <br>

                                    </div>

                                </div>

                                <div class="row mt-4">
                                    <label>Upload Bukti Pembayaran</label>
                                    <Br>
                                    <img class="img-preview img-fluid">
                                    <input type="file" required value="{{ old('bukti')}}" style="height:50px"
                                        name="bukti" class="browser-default custom-select mb-4" id="bukti"
                                        placeholder="Bukti customer" onchange="previewImage()">

                                    @error('bukti')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <input type="hidden" name="customer_id" value="{{ auth()->user()->customer->id  }}"
                                    class="browser-default custom-select mb-4" id="select"> <br>
                                <input type="hidden" name="status" hidden value="Menunggu Konfirmasi"
                                    class="browser-default custom-select mb-4" id="select"> <br>



                                <!--Fifth Row-->

                                <button type="submit" class="btn btn-primary float-right mt-5">Booking Sekarang</button>
                            </div>


                        </form>
                    </div>
                </div>

                <script>
                    function myFunction() {
                        document.getElementById("booking").submit();
                    }
                </script>
                <Script>
                    function previewImage() {
                        const bukti = document.querySelector('#bukti');
                        const imgPreview = document.querySelector('.img-preview')

                        imgPreview.style.display = 'block';

                        const oFReader = new FileReader();
                        oFReader.readAsDataURL(bukti.files[0]);

                        oFReader.onload = function (oFREvent) {
                            imgPreview.src = oFREvent.target.result;
                        }

                    }
                </script>
            </div>
        </div>
    </div>
</div>


@endsection