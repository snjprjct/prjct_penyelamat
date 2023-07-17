@extends('dashboard.layouts.main') 

@section('container')

<div class="container">
    <br>
    <a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>NIS customer</td>
                        <td>:</td>
                        <td>{{$pembayaran->slug}}</td>
                        <td>{{$pembayaran->customer->nis}}</td>
                    </tr>
                    
                    <tr>

                        <td>Nama customer</td>
                        <td>:</td>
                        <td>{{$pembayaran->customer->nama_customer}}</td>
                    </tr>

                    <tr>

                        <td>paket</td>
                        <td>:</td>
                        <td>{{$pembayaran->customer->paket->nama_paket}}</td>
                    </tr>

                    <tr>
                        <td>Tahun Masuk</td>
                        <td>:</td>
                        <td>{{$pembayaran->customer->tahun_masuk}}</td>
                    </tr>

                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td>{{$pembayaran->customer->status_byr}}</td>
                    </tr>

                    <tr>
                        <td>Status Aktif</td>
                        <td>:</td>
                        <td>{{$pembayaran->customer->status_customer}}</td>
                    </tr>

                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td><b>{{$pembayaran->status}}</b></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>


        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>Periode</td>
                        <td>:</td>
                        <td>{{$pembayaran->periode->bulan}} {{$pembayaran->periode->tahun}}</td>
                    </tr>

                    <tr>

                        <td>SPP</td>
                        <td>:</td>
                        <td>{{$pembayaran->spp}}</td>
                    </tr>

                    <tr>
                        <td>Denda</td>
                        <td>:</td>
                        <td>{{$pembayaran->denda}}</td>
                    </tr>

                    <tr>
                        <td>Uang Lainnya/td>
                        <td>:</td>
                        <td>{{$pembayaran->lainnya}}</td>
                    </tr>

                    <tr>
                        <td>Total Pembayaran</td>
                        <td>:</td>
                        <td>{{$pembayaran->total}}</td>
                    </tr>

                     <tr>
                        <td>Bukti</td>
                        <td>:</td>
                        <td><img src="{{ asset('storage/' . $pembayaran->bukti) }}" alt="{{ $pembayaran->slug }}" class="img-fluid mt-3"></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
