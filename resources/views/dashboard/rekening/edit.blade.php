@extends('dashboard.layouts.main') 



@section('judul')
Konfirmasi Data rekening
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/rekening/{{$rekening->id}}">
        @csrf
        @method('put')

        <div class="row">
         
            <div class="col-md-12">


                <div class="form-group">
                    <label for="exampleInputPassword1">Bank</label>
                    <input type="text" required value="{{ old('bank',$rekening->bank)}}" name="bank" class="form-control"
                        id="bank" placeholder="Nama Bank">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Atas Nama</label>
                    <input type="text" required value="{{ old('atas_nama',$rekening->atas_nama)}}" name="atas_nama"
                        class="form-control" id="atas_nama" placeholder="Atas Nama">
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Rekening</label>

                    <input  type="text" required value="{{ old('rekening',$rekening->rekening)}}" name="rekening"
                        class="form-control @error('image') is-incalid @enderror" id="rekening" placeholder="Nomor Rekening">
                
                </div> 
 

                <div class="form-group">
                    <label for="exampleInputPassword1">Foto Bank</label>
                   <input type="hidden" name="oldImage" value="{{ $rekening->foto_bank }}">
                    @if($rekening->foto_bank)
                    <img src="{{ asset('storage/' . $rekening->foto_bank) }}" class="img-preview img-fluid">
                    
                    @else
                    <img class="img-preview img-fluid">
                    @endif
                    <img class="img-preview img-fluid">
                    <input type="file"  value="{{ old('foto_bank')}}" name="foto_bank" class="form-control" id="foto_bank"
                        placeholder="Foto Bank" onchange="previewImage()">

                    @error('foto_bank')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                
                    <input type="text" hidden name="id" value="{{ old('id',$rekening->id)}}" readonly required
                        class="form-control @error('id') is->invalid @enderror" id="id" placeholder="id">
                 
               

                @error('id')
                <div class="invalid-feedback">
                    error nich
                </div>
                @enderror


                 <button type="submit" class="btn btn-primary">Edit Bank</button>
                
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

    const id = document.querySelector('#id');
    const spp = document.querySelector('#spp');
    const atas_nama = document.querySelector('#atas_nama');
    const rekening = document.querySelector('#rekening');

    function changeid() {
        id.value = `${nis.value}-${periode.value}-${ketentuan.value}`;
    }

    nis.addEventListener('change', function () {
        fetch('/customer/checkid?nis=' + nis.value)
            .then(response => response.json())
            .then(data => id.value = data.id)
    });

    nis.addEventListener('change', function () {
        changeid();
    });


    periode.addEventListener('change', function () {
        changeid();
    });


    ketentuan.addEventListener('change', function () {
        changeid();

        fetch('/ketentuan/get-ketentuan/' + ketentuan.value)
            .then(response => response.json())
            .then(data => {
                spp.value = data.spp.replace(/\./, '');
                atas_nama.value = data.uang_atas_nama.replace(/\./, '');
                rekening.value = data.rekening.replace(/\./, '');
                total.value = parseInt(spp.value) + parseInt(atas_nama.value) + parseInt(rekening.value);
            });



    });


    function previewImage() {
        const foto_bank = document.querySelector('#foto_bank');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto_bank.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }

</script>
@endsection
