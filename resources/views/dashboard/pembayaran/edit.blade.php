@extends('dashboard.layouts.main') 



@section('judul')
Konfirmasi Data Pembayaran
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href=" " class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/pembayaran/{{$pembayaran->slug}}">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-5">

                <div class="form-group">
                    <label for="inputState">customer</label>
                    {{ old('customer_id',$pembayaran->customer_id)}}
                    <select readonly name="customer_id" id="nis" class="form-control" data-live-search="true">

                        @foreach( $customer as $customer)
                        
                         <option  value="{{$customer->id}}" {{$pembayaran->customer_id == $customer->id ? 'selected' : '' }}>{{$customer->nama_customer}}</option>
                         @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="inputState">Periode</label>
                    <select name="periode_id" readonly id="periode" class="form-control" data-live-search="true">
                        @foreach( $periode as $periode)
                         <option value="{{$periode->id}}" {{$pembayaran->periode_id == $periode->id ? 'selected' : '' }}>{{$periode->bulan}} {{$periode->tahun}}</option>
                       
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputState">Ketentuan</label>
                    <select readonly name="ketentuan" id="ketentuan" class="form-control" data-live-search="true">
                         @foreach( $ketentuan as $ketentuan)
                        <option value="{{$ketentuan->id}}">{{$ketentuan->keterangan}}</option>
                        @endforeach
                    </select>
                </div>

                 <input type="text" value="{{ $stat=$pembayaran->status }}" readonly>
                <br>
                @if($stat=="Menunggu Konfirmasi")
                <button type="submit" name="status" value="Lunas" class="btn btn-primary">Konfirmasi Pembayaran</button>
                <br>
                <br>
                <button type="submit" name="status" value="Ditolak" class="btn btn-primary">Tolak Pembayaran</button>
                @else
                <button type="submit" name="status" class="btn btn-primary">Update Pembayaran</button>
                @endif


            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Uang SPP</label>
                    <input type="text" required value="{{ old('spp',$pembayaran->spp)}}" name="spp" class="form-control"
                        id="spp" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Lainnya</label>
                    <input type="text" required value="{{ old('lainnya',$pembayaran->lainnya)}}" name="lainnya"
                        class="form-control" id="lainnya" placeholder="Uang Lainnya">
                </div>

                    <input hidden type="text" required value="{{ old('denda',$pembayaran->denda)}}" name="denda"
                        class="form-control @error('image') is-incalid @enderror" id="denda" placeholder="denda customer">
                 

                <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input type="text" required value="{{ old('total',$pembayaran->total)}}" name="total"
                        class="form-control" id="total" placeholder="Total">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Upload Bukti Pembayaran</label>
                   <input type="hidden" name="oldImage" value="{{ $pembayaran->bukti }}">
                    @if($pembayaran->bukti)
                    <img src="{{ asset('storage/' . $pembayaran->bukti) }}" class="img-preview img-fluid">
                   {{ $pembayaran->bukti }}
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


                <div class="form-group">
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug',$pembayaran->slug)}}" readonly required
                        class="form-control @error('slug') is->invalid @enderror" id="slug" placeholder="Slug">
                </div>

               

                @error('slug')
                <div class="invalid-feedback">
                    error nich
                </div>
                @enderror



                
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
