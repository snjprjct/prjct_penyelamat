@extends('dashboard.layouts.main')



@section('nama')
Edit Data Team
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/team" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/team/{{$team->id}}">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-5">
 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Nama Team</label>
                    <input type="text" required value="{{ old('nama',$team->nama)}}" name="nama" class="form-control"
                        id="spp" placeholder="Nama team">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <Br>
                    <div class="form-check form-check-inline"> 
                      <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki" {{ $team->jk == 'Laki-Laki' ? 'checked' : ''}}>
                      <label class="form-check-label" for="jk1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan" {{ $team->jk == 'Perempuan' ? 'checked' : ''}} >
                      <label class="form-check-label" for="jk2">Perempuan</label>
                    </div>
                  
                  </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="text" required value="{{ old('nama',$team->telepon)}}" name="telepon" class="form-control"
                    id="spp" placeholder="No Telepon">
                    
                </div>

                 

                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea type="text" required  value="{{ old('alamat',$team->alamat)}}" name="alamat" class="form-control" id="alamat" placeholder="Alamat team">{{ old('alamat',$team->alamat)}}</textarea>
                   </div>
               

            </div>


            <div class="col-md-7">


                
                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="text" required value="{{ old('tempat_lahir',$team->tempat_lahir)}}"
                        name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                </div>



                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="text" required value="{{ old('tanggal_lahir',$team->tanggal_lahir)}}" name="tanggal_lahir"
                        class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Posisi</label>
                    <input type="text" required value="{{ old('posisi',$team->posisi)}}" name="posisi"
                        class="form-control" id="posisi" placeholder="Posisi Team">
                </div>

              
                <div class="form-group">
                    <label for="exampleInputPassword1">Upload foto team</label>
                   <input type="hidden" name="oldImage" value="{{ $team->foto }}">
                   
                    @if($team->foto)
                    <img src="{{ asset('storage/' . $team->foto) }}" class="img-preview img-fluid">
                   {{ $team->foto }}
                    @else
                    <img class="img-preview img-fluid">
                    @endif
                    <img class="img-preview img-fluid">
                    <input type="file"  value="{{ old('foto')}}" name="foto" class="form-control" id="foto"
                        placeholder="foto team" onchange="previewImage()">

                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit"  class="btn btn-primary">Update Team</button>


                
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
        fetch('/team/checkSlug?nis=' + nis.value)
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
