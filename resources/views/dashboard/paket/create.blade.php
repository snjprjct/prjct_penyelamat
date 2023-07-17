@extends('dashboard.layouts.main')



@section('judul')
Tambah Data Pembayaran
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/paket" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/paket" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-5">

                <input value="{{ $aa = auth()->user()->level }}" hidden>
                <div class="form-group">
                    <label for="inputState">Nama Paket</label>
                    <input name="nama_paket" value="{{ old('nama_paket')}}" placeholder="Nama Paket" id="nama_paket" class="form-control" >

                </div>

                <div class="form-group">
                    <label for="inputState">Harga</label>

                    <input name="harga" value="{{ old('harga')}}" id="harga" placeholder="Harga" class="form-control">

                </div>


                <div class="form-group">
                    <label for="inputState">Jumlah Jam (Dalam Jam)</label>

                <input name="jumlah_jam" value="{{ old('jumlah_jam')}}" id="jumlah_jam" placeholder="Jumlah Jumlah" class="form-control">

                </div>

                







                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea type="textarea" required value="{{ old('keterangan')}}" name="keterangan"
                        class="form-control" id="keterangan" placeholder="Total"></textarea>
                </div>

                


                @error('slug') <div class="invalid-feedback">
                    error nich
                @enderror

            </div>
            

        <div class="col-md-5">

        <div class="form-group">
                    <label for="exampleInputPassword1">Foto Paket</label>
                    <img class="img-preview img-fluid">
                    <input type="file" required value="{{ old('foto')}}" name="foto" class="form-control" id="foto"
                        placeholder="foto customer" onchange="previewImage()">

                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
        <button type="submit" class="btn btn-primary">Tambah Paket</button>

        </div>

            
    </form>

</div>
</div>
</div>


<script>
    var e = document.getElementById("nama_paket");

    function onChange() {
        var value = e.value;
        var text = e.options[e.selectedIndex].text;
        console.log(value, text);
    }
    e.onchange = onChange;
    onChange();


    
    function previewImage() {
        const foto = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }
    
</script>



<script>
    const test = "bababalalbdksfgjsfg";
    const nama_paket = document.querySelector('#nama_paket');
    const slug = document.querySelector('#slug');



    function changeSlug() {
        slug.value = `${nama_paket.value}-${periode.value}-${ketentuan.value}`;
    }

    nama_paket.addEventListener('change', function () {
        fetch('/customer/checkSlug?nama_paket=' + nama_paket.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    nama_paket.addEventListener('change', function () {
        changeSlug();
    });



</script>
@endsection
