@extends('dashboard.layouts.main')



@section('judul')
Konfirmasi Data paket
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/paket" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/paket/{{$paket->id}}">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-5">
 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Nama Paket</label>
                    <input type="text" required value="{{ old('nama_paket',$paket->nama_paket)}}" name="nama_paket" class="form-control"
                        id="spp" placeholder="Nama Paket">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Jam (Dalam Jam)</label>
                    <input type="text" required value="{{ old('jumlah_jam',$paket->jumlah_jam)}}" name="jumlah_jam" class="form-control"
                        id="jumlah_jam" placeholder="Jumlah Jam Paket">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" required value="{{ old('harga',$paket->harga)}}" name="harga" class="form-control"
                        id="spp" placeholder="Harga Paket">
                </div>
                

                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea type="text" required name="keterangan" class="form-control"  placeholder="Keterangan Paket">{{ old('keterangan',$paket->keterangan)}}</textarea>
                </div>
               

            </div>


            <div class="col-md-7">


              
                <div class="form-group">
                    <label for="exampleInputPassword1">Upload foto paket</label>
                   <input type="hidden" name="oldImage" value="{{ $paket->foto }}">
                    @if($paket->foto)
                    <img src="{{ asset('storage/' . $paket->foto) }}" class="img-preview img-fluid">
                   {{ $paket->foto }}
                    @else
                    <img class="img-preview img-fluid">
                    @endif
                    <img class="img-preview img-fluid">
                    <input type="file"  value="{{ old('foto')}}" name="foto" class="form-control" id="foto"
                        placeholder="foto customer" onchange="previewImage()">

                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit"  class="btn btn-primary">Update Paket</button>


                
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
    const ketentuan = document.querySelector('#ketentuan');

    const slug = document.querySelector('#slug');
    const spp = document.querySelector('#spp');
    const lainnya = document.querySelector('#lainnya');
    const denda = document.querySelector('#denda');

    function changeSlug() {
        slug.value = `${nis.value}-${periode.value}-${ketentuan.value}`;
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


    ketentuan.addEventListener('change', function () {
        changeSlug();

        fetch('/ketentuan/get-ketentuan/' + ketentuan.value)
            .then(response => response.json())
            .then(data => {
                spp.value = data.spp.replace(/\./, '');
                lainnya.value = data.uang_lainnya.replace(/\./, '');
                denda.value = data.denda.replace(/\./, '');
                total.value = parseInt(spp.value) + parseInt(lainnya.value) + parseInt(denda.value);
            });



    });


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
@endsection
