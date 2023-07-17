@extends('dashboard.layouts.main')



@section('judul')
Tambah Data customer
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="/customer" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/customer">
        @csrf

        <div class="row">

            <div class="col-md-5">

                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" required value="{{ old('username')}}" name="username" class="form-control"
                        id="username" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required value="{{ old('password')}}" name="password" class="form-control"
                        id="password" placeholder="Password">
                </div>

            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Nama customer</label>
                    <input type="text" required value="{{ old('nama_customer')}}" name="nama_customer"
                        class="form-control" id="nama_customer" placeholder="Nama customer">
                </div>

                @error('slug')
                <div class="invalid-feedback">
                    error nich
                </div>
                @enderror
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
                        id="alamat" placeholder="Alamat customer"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="text" required value="{{ old('telepon')}}" name="telepon" class="form-control"
                        id="telepon" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" required value="{{ old('email')}}" name="email" class="form-control" id="email"
                        placeholder="Email customer">
                </div>



                <button type="submit" class="btn btn-primary">Tambah customer</button>
    </form>

</div>
</div>
</div>


<script>
    const nis = document.querySelector('#nama_customer');
    const slug = document.querySelector('#slug');

    nis.addEventListener('change', function () {
        fetch('/customer/checkSlug?nama_customer=' + nis.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection
