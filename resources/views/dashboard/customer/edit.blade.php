@extends('dashboard.layouts.main')



@section('judul')
Tambah Data customer
@endsection


@section('container')


<div class="container">
    <br>
    <a type="button" href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/customer/{{$customer->id}}">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-5">







                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" value="{{$user->username}}" required name="username" autofocus
                        class="form-control @error('username') is->invalid @enderror" id="username"
                        aria-describedby="username" placeholder="username customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" value="{{$user->password}}" required name="password" autofocus
                        class="form-control @error('password') is->invalid @enderror" id="password"
                        aria-describedby="password" placeholder="password customer">
                </div>

            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Nama customer</label>
                    <input type="text" required value="{{ old('nama_customer',$customer->nama_customer)}}"
                        name="nama_customer" class="form-control" id="nama_customer" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <input type="text" name="id" hidden value="{{ old('id',$customer->id)}}" readonly required
                        class="form-control @error('id') is->invalid @enderror" id="id" placeholder="id">
                </div>

                @error('id')
                <div class="invalid-feedback">
                    error nich
                </div>
                @enderror





                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <Br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki"
                            {{ $customer->jk == 'Laki-Laki' ? 'checked' : ''}}>
                        <label class="form-check-label" for="jk1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan"
                            {{ $customer->jk == 'Perempuan' ? 'checked' : ''}}>
                        <label class="form-check-label" for="jk2">Perempuan</label>
                    </div>

                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea type="text" required value="{{ old('alamat',$customer->alamat)}}" name="alamat"
                        class="form-control" id="alamat"
                        placeholder="Alamat customer">{{ old('alamat',$customer->alamat)}}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="text" required value="{{ old('telepon',$customer->telepon)}}" name="telepon"
                        class="form-control" id="telepon" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" required value="{{ old('email',$customer->email)}}" name="email"
                        class="form-control" id="email" placeholder="Email customer">
                </div>

 




                <button type="submit" class="btn btn-primary">Edit customer</button>
    </form>

</div>
</div>
</div>


<script>
    const nis = document.querySelector('#nis');
    const id = document.querySelector('#id');

    nis.addEventListener('change', function () {
        fetch('/customer/checkid?nis=' + nis.value)
            .then(response => response.json())
            .then(data => id.value = data.id)
    });
</script>
@endsection
