@extends('dashboard.layouts.main')



@section('judul')
Tambah Menu
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/galery" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/galery" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-5">

                <input value="{{ $aa = auth()->user()->level }}" hidden>
                <div class="form-group">
                    <label for="inputState">Nama Foto</label>
                    <input name="judul" value="{{ old('judul')}}" placeholder="Nama galery" id="judul" class="form-control" >

                </div>

           
                







                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea type="textarea" required value="{{ old('kegiatan')}}" name="kegiatan"
                        class="form-control" id="keterangan" placeholder="Keterangan"></textarea>
                </div>

                


                @error('slug') <div class="invalid-feedback">
                    error nich
                @enderror

            </div>
            

        <div class="col-md-5">

        <div class="form-group">
                    <label for="exampleInputPassword1">Foto galery</label>
                    <img class="img-preview img-fluid">
                    <input type="file" required value="{{ old('foto')}}" name="foto" class="form-control" id="foto"
                        placeholder="foto customer" onchange="previewImage()">

                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
        <button type="submit" class="btn btn-primary">Tambah Galery</button>

        </div>

            
    </form>

</div>
</div>
</div>


<script>
    var e = document.getElementById("judul");

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
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');



    function changeSlug() {
        slug.value = `${judul.value}-${periode.value}-${ketentuan.value}`;
    }

    judul.addEventListener('change', function () {
        fetch('/customer/checkSlug?judul=' + judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    judul.addEventListener('change', function () {
        changeSlug();
    });



</script>
@endsection
