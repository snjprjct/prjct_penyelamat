@extends('dashboard.layouts.main')



@section('nama')
Tambah Menu
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/team" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/team" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-5">

                <input value="{{ $aa = auth()->user()->level }}" hidden>
                <div class="form-group">
                    <label for="inputState">Nama Team</label>
                    <input name="nama" value="{{ old('nama')}}" placeholder="Nama team" id="nama" class="form-control" >

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <Br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki">
                        <label class="form-check-label" for="jk1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan">
                        <label class="form-check-label" for="jk2">Perempuan</label>
                    </div>

                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea type="text" required value="{{ old('alamat')}}" name="alamat" class="form-control"
                        id="alamat" placeholder="Alamat team"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="text" required value="{{ old('telepon')}}" name="telepon" class="form-control"
                        id="telepon" placeholder="nomor telepon">
                </div>


                




 
                


                @error('slug') <div class="invalid-feedback">
                    error nich
                @enderror

            </div>
            

        <div class="col-md-5">

            <div class="form-group">
                <label for="exampleInputPassword1">Tempat Lahir</label>
                <Br>
                <div class="form-check form-check-inline">
                    <input type="text" required value="{{ old('tempat_lahir')}}" name="tempat_lahir" class="form-control"
                    id="tempat_lahir" placeholder="Tempat Lahir">
                </div>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <Br>
                <div class="form-check form-check-inline">
                    <input type="date" required value="{{ old('tanggal_lahir')}}" name="tanggal_lahir" class="form-control"
                    id="tanggal_lahir" placeholder="tanggal Lahir">
                </div>

            </div> 


            <div class="form-group">
                <label for="exampleInputPassword1">Posisi</label>
                <input type="text" required value="{{ old('posisi')}}" name="posisi" class="form-control"
                    id="posisi" placeholder="Nama Posisi">
            </div>


        <div class="form-group">
                    <label for="exampleInputPassword1">Foto team</label>
                    <img class="img-preview img-fluid">
                    <input type="file" required value="{{ old('foto')}}" name="foto" class="form-control" id="foto"
                        placeholder="foto customer" onchange="previewImage()">

                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
        <button type="submit" class="btn btn-primary">Tambah team</button>

        </div>

            
    </form>

</div>
</div>
</div>


<script>
    var e = document.getElementById("nama");

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
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');



    function changeSlug() {
        slug.value = `${nama.value}-${periode.value}-${ketentuan.value}`;
    }

    nama.addEventListener('change', function () {
        fetch('/customer/checkSlug?nama=' + nama.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    nama.addEventListener('change', function () {
        changeSlug();
    });



</script>
@endsection
