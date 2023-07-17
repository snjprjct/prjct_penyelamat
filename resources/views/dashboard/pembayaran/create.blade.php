@extends('dashboard.layouts.main') 



@section('judul')
Tambah Data Pembayaran
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href=" " class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/pembayaran" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-5">

                <input value="{{ $aa = auth()->user()->level }}" hidden>
                @if( $aa =="Administrator")
                <div class="form-group">
                    <label for="inputState">customer</label>
                    <select name="customer_id" id="nis" class="form-control" data-live-search="true">
                        <option selected>Pilih customer</option>
                        @foreach( $customer as $customer)
                        <option value="{{$customer->id}}">{{$customer->nama_customer}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="form-group">
                    <label for="inputState">customer</label>
                    <input value="{{ $aa = auth()->user()->id }}" type="text" hidden name="customer_id" id="nis"
                        class="form-control">
                    <input value="{{ $aa = auth()->user()->name }}" type="text" required readonly class="form-control">
                </div>
                @endif

                <div class="form-group">
                    <label for="inputState">Periode</label>
                    @if( $aa =="Administrator")
                    <select name="periode_id" id="periode" class="form-control" data-live-search="true">
                        <option selected>Pilih Periode</option>
                        @foreach( $periode as $periode)
                        <option value="{{$periode->id}}">{{$periode->bulan}} {{$periode->tahun}}</option>
                        @endforeach
                    </select>
                    @else
                    <select name="periode_id" id="periode" class="form-control" data-live-search="true">
                        <option selected>Pilih Periode</option>
                        @foreach( $periodecek as $periode)
                        <option data-periode="" value="{{$periode->id}}" {{ $periode->bulan == request()->bulan ? "selected": "" }}>{{$periode->bulan}} {{$periode->tahun}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>

                <div class="form-group">
                    <label for="inputState">Ketentuan</label>
                    <select name="ketentuan" id="ketentuan" class="form-control" data-live-search="true">
                        <option selected>Pilih Ketentuan</option>
                        @foreach( $ketentuan as $ketentuan)
                        <option value="{{$ketentuan->id}}">{{$ketentuan->keterangan}}</option>
                        @endforeach
                    </select>
                </div>




            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Uang SPP</label>
                    <input type="text" required value="{{ old('spp')}}" name="spp" class="form-control" id="spp"
                        placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Lainnya</label>
                    <input type="text" required value="{{ old('lainnya')}}" name="lainnya" class="form-control"
                        id="lainnya" placeholder="Uang Lainnya">
                </div>
                {{--   {{ $SKRNG = now()->isoFormat('D MMMM Y') }}
                --}}

                <input type="text" hidden value="{{ old('denda')}}" name="denda"
                    class="form-control @error('image') is-incalid @enderror" id="denda" placeholder="denda customer">


                <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input type="text" required value="{{ old('total')}}" name="total" class="form-control" id="total"
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
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug')}}" readonly required
                        class="form-control @error('slug') is->invalid @enderror" id="slug" placeholder="Slug">
                </div>
                 @if( $aa =="Administrator")
                <input type="text" hidden name="status" value="Lunas" readonly>
                @else
                <input type="text" hidden name="status" value="Menunggu Konfirmasi" readonly>
                @endif
                @error('slug')
                <div class="invalid-feedback">
                    error nich
                </div>
                @enderror



                <button type="submit" class="btn btn-primary">Tambah Pembayaran</button>
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
    const test = "bababalalbdksfgjsfg";
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

                if(new Date() > new Date(periode.selectedOptions[0].label)) {

                    denda.value = data.denda.replace(/\./, '');
                } else {
                    denda.value = 0;
                }

                total.value = parseInt(spp.value) + parseInt(lainnya.value) + parseInt(denda.value);
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
