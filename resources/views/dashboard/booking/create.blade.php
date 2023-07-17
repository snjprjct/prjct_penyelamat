@extends('dashboard.layouts.main')



@section('judul')
Tambah Data Pembayaran
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/booking" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/booking" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-5">

                <input value="{{ $aa = auth()->user()->level }}" hidden>
                @if( $aa =="Administrator")
                <div class="form-group">
                    <label for="inputState">customer</label>
                    <select name="customer_id" id="customer_id" class="form-control" data-live-search="true">
                        <option selected>Pilih customer</option>
                        @foreach( $customer as $customer)
                        <option value="{{$customer->id}}">{{$customer->nama_customer}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="form-group">
                    <label for="inputState">customer</label>
                    <input value="{{ $aa = auth()->user()->id }}" type="text" hidden name="customer_id" id="customer_id"
                        class="form-control">
                    <input value="{{ $aa = $cutomer->nama_customer }}" type="text" required readonly class="form-control">
                </div>
                @endif

 

                <div class="form-group">
                    <label for="inputState">Paket</label>
                    <select name="paket_id" id="paket" class="form-control" data-live-search="true">
                        <option selected>Pilih paket</option>
                        @foreach( $paket as $paket)
                        <option value="{{$paket->id}}">{{$paket->nama_paket}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Foto</label>
                    <input type="date" name="tgl_booking" min="" value="{{ old('tgl_booking')}}" required
                        class="form-control" id="datePickerId" placeholder="Tanggal Pengantaran">
                </div>

                <script>
                datePickerId.min = new Date().toISOString().split("T")[0];

                </script>


                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Jam</label>
                    <input type="number" required
                        class="form-control" id="jam" placeholder="Lama Foto">
                </div>


                 <div class="form-group">
                    <label for="exampleInputPassword1">Mulai Foto</label>
                    <input type="text" name="jam_booking" required
                        class="form-control" id="jam_booking" placeholder="jam Mulai">
                </div>




                <div class="form-group">
                    <label for="exampleInputPassword1">Selesai Foto</label>
                    <input type="time" name="jam_selesai" value="{{ old('jam_selesai')}}" required
                        class="form-control" id="jam_selesai" placeholder="jam Selesai">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Catatan</label>
                    <textarea type="text" required value="{{ old('catatan')}}" name="catatan" class="form-control" id="catatan"
                        placeholder="catatan"></textarea>
                </div>



            </div>


            <div class="col-md-7">

                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Paket</label>
                    <input type="text" required value="{{ old('total_paket')}}" name="total_paket" class="form-control"
                        id="jumlah" placeholder="Jumlah">
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Harga/paket</label>
                    <input type="text" hidden  value="{{ old('harga')}}" name="harga" class="form-control" id="harga"
                        placeholder="Nama customer">
                    <input type="text"  value="{{ old('harga')}}" class="form-control" id="harga1"
                        placeholder="Nama customer">
                </div>

                
               

               
                <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input type="text" hidden value="{{ old('total')}}" name="total" class="form-control" id="total"
                        placeholder="Total">

                        <input type="text" required value="{{ old('total')}}"class="form-control" id="total1"
                        placeholder="Total">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Upload Bukti Pembayaran</label>
                    <img class="img-preview img-fluid">
                    <input type="file" required value="{{ old('bukti')}}" name="bukti" class="form-control" id="bukti"
                        placeholder="Bukti customer" onchange="previewImage()">

                    @error('bukti')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
 
                 <div class="form-group">
                    <label for="inputState">Status</label>
                    <select name="status" id="status" class="form-control" data-live-search="true">
                        <option selected>Pilih Status</option>
                        <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                        <option value="Terkonfirmasi">Terkonfirmasi</option>
                        <option value="Ditolak">Ditolak</option>
                        
                         
                    </select>
                </div>



                <button type="submit" class="btn btn-primary">Tambah Booking</button>
    </form>

</div>
</div>
</div>

<script src="https://unpkg.com/@develoka/angka-rupiah-js@1.0.1/index.min.js"></script>

<script>
    var e = document.getElementById("paket");

    function onChange() {
        var value = e.value;
        var text = e.options[e.selectedIndex].text;
        console.log(value, text);
    }
    e.onchange = onChange;
    onChange();


//console.log(paket.value);
</script>

<script>
    const test = "bababalalbdksfgjsfg";
    const nis = document.querySelector('#nis');
    const periode = document.querySelector('#periode');
    const paket = document.querySelector('#paket');
    const jam = document.querySelector('#jam');
 
    const harga = document.querySelector('#harga');
    const jumlah = document.querySelector('#jumlah');
    const denda = document.querySelector('#denda');

    const jam_booking = $("input#jam_booking").val();
    const jam_selesai = document.getElementById('jam_selesai'); 

 
    var originalvalue = document.getElementById("jam_booking").value;
   console.log("The value in the text box is ="+originalvalue);



    paket.addEventListener('change', function () {
         

        fetch('/paket/get-paket/' + paket.value)
            .then(response => response.json())
            .then(data => {
                
                
                const rupiah = (number)=>{
                return new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR"
                }).format(number);
                 }


                jam.value = data.jumlah_jam; 
                harga.value = data.harga; 
                harga1.value = rupiah(harga.value);

                
 
                total.value = parseInt(harga.value) * parseInt(jumlah.value);
                total1.value = rupiah(parseInt(harga.value) * parseInt(jumlah.value));


                
                
            });

           
            
    });




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
@endsection
