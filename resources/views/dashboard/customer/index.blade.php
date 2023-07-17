@extends('dashboard.layouts.main')
@section('judul') Data customer @endsection
@section('container') @if ($post->count())

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/customer/create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="col-md-4">
            <form action="/customer">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" value="{{request('search')}}"
                        placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-striped">


        <thead>
            <tr>
                <th>No</th>
                <th>Nama customer</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody> @foreach($post as $posta)
            <tr>
                <td> <a href="/customer/{{ $posta->id}}">{{ $loop->iteration }}</a></td>

                <td>{{ $posta->nama_customer }}</td>
                <td>{{ $posta->alamat }}</td>
                <td>{{ $posta->telepon }}</td>
                <td>
                    <button onclick="location.href='/customer/{{$posta->id}}/edit'" role="button" class="new button">
                      <img src="https://i.ibb.co/FW9tsHK/attachment.png"></button>
                    <form action="/customer/{{ $posta->id }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf

                        <button onclick="return confirm('Are You Sure')" role="button" class="new button">
                            <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" /></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> @Else <p>Post Not Found</p> @endif

    <div class="d-flex center-content-end">{{ $post->links() }} </div>

    @endsection

</div>