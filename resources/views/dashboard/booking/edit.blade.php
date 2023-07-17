@extends('dashboard.layouts.main')



@section('judul')
Konfirmasi Data booking
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/booking" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/booking/{{$booking->id}}">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-5">

                <div class="form-group">
                    <label for="inputState">Customer</label> 
                    <input class="form-control" type="text" value="{{$booking->customer->nama_customer }}" readonly> 
                    <input class="form-control" hidden name="customer_id" type="text" value="{{$booking->customer_id }}" readonly> 
                  
                </div>


                <div class="form-group">
                    <label for="inputState">Paket</label> 
                    <input class="form-control" type="text" value="{{$booking->paket->nama_paket }}" readonly> 
                    <input class="form-control" hidden name="paket_id" type="text" value="{{$booking->paket_id }}" readonly> 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Tanggal Booking</label>  
                    <input class="form-control" name="tgl_booking" type="date" value="{{$booking->tgl_booking }}" > 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Jam Mulai</label>  
                    <input class="form-control" name="jam_booking" type="time" value="{{$booking->jam_booking }}" > 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Jam Selesai</label>  
                    <input class="form-control" type="time" name="jam_selesai" value="{{ $booking->jam_selesai }}" > 
                  
                </div>


          
                 <input type="text" value="{{ $stat=$booking->status }}" hidden>
                <br>
                @if($stat=="Menunggu Konfirmasi")
                <button type="submit" name="status"  style="width:100%" class="btn btn-warning">Konfirmasi booking</button>
                <br>
               
                @else
                <button type="submit" class="btn btn-primary">Update booking</button>
                @endif


            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="inputState">Total Pembayaran</label>  
                    <input class="form-control" type="text" value="@currency($harga = $booking->total)" readonly> 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="{{ $booking->status }}" selected>--{{ $booking->status }}--</option>
                        
                        <option value="Batal">Batal</option>
                        <option value="Konfirmasi">Konfirmasi</option>
                        <option value="Ditolak">Tolak</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Upload Bukti booking</label>
                   <input type="hidden" name="oldImage" value="{{ $booking->bukti }}">
                    @if($booking->bukti)
                    <a href="{{ asset('storage/' . $booking->bukti) }}" target="_blank">    <img src="{{ asset('storage/' . $booking->bukti) }}" class="img-preview img-fluid"> </a>
                   {{ $booking->bukti }}
                    @else
                    <img class="img-preview img-fluid">
                    @endif
                    <img class="img-preview img-fluid">
                    <input type="file"  value="{{ old('bukti')}}" name="bukti" class="form-control" id="bukti"
                        placeholder="Bukti customer" onchange="previewImage()">
                    

                    @error('bukti')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

               
               <?php $pesannya = "Halo, Dengan Studio Delapan... Ada yang ingin kami tanyakan seputar Pemesanan Studio Foto Anda :)" ; 

                $telepon 	= $booking->customer->telepon; 
                    // $nomor= "89649341999";
                    //$nomor= substr($telepon,1);
                    // die($nomor);
                

                    ?>
	            <a class="btn btn-success" href="https://wa.me/62{{  $telepon }}?text={{ $pesannya }}" target="_blank">Hubungi Via WhatsApp</a></td>

               
                


                
    </form>

</div>
</div>
</div>


<script>
    var e = document.getElementById("nis");

    function onChange() {
        var value = e.value;
        var text = e.options[e.selectedIndex].text;
        console.log(value, text);
    }
    e.onchange = onChange;
    onChange();

</script>



<script>
    const nis = document.querySelector('#nis');
    const periode = document.querySelector('#periode');
    const paket_id = document.querySelector('#paket_id');

    const slug = document.querySelector('#slug');
    const harga = document.querySelector('#harga');
    const lainnya = document.querySelector('#lainnya');
    const denda = document.querySelector('#denda');

    function changeSlug() {
        slug.value = `${nis.value}-${periode.value}-${paket_id.value}`;
    }

    nis.addEventListener('change', function () {
        fetch('/customer/checkSlug?nis=' + nis.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    nis.addEventListener('change', function () {
        changeSlug();
    });


    periode.addEventListener('change', function () {
        changeSlug();
    });


    paket_id.addEventListener('change', function () {
        changeSlug();

        fetch('/paket_id/get-paket_id/' + paket_id.value)
            .then(response => response.json())
            .then(data => {
                harga.value = data.harga.replace(/\./, '');
                lainnya.value = data.uang_lainnya.replace(/\./, '');
                denda.value = data.denda.replace(/\./, '');
                total.value = parseInt(harga.value) + parseInt(lainnya.value) + parseInt(denda.value);
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
