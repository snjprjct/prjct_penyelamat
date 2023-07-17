@extends('dashboard.layouts.main')



@section('judul')
Data Galery
@endsection


@section('container')

<input value="{{ $aa = auth()->user()->level }}" hidden>
@if( $aa =="Administrator")
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/galery/create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="col-md-4">
            <form action="/galery">
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

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @elseif(session()->has('update'))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
    @elseif(session()->has('deleted'))
    <div class="alert alert-danger" role="alert">
        {{session('deleted')}}
    </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Galery</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            @foreach($post as $posta)


            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><a href="/galery/{{ $posta->id}}">{{ $posta->judul }}</a></td>
                <td>{{ $posta->kegiatan }}</td>
                <td>{{$posta->keterangan }}</td>
                <td>

                    <a href="/galery/{{$posta->id}}/edit" role="button" class="new button">
                        <img src="https://i.ibb.co/FW9tsHK/attachment.png"></a>
                    <form action="/galery/{{ $posta->id }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf

                        <button onclick="return confirm('Are You Sure')" role="button" class="new button">
                            <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" />
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex center-content-end">{{ $post->links() }} </div>


   
    @endif

    @endsection
