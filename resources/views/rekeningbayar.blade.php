@extends('layouts.main')



@section('judul')

@endsection
 
@section('container')

<input value="{{ $aa = auth()->user()->level }}" hidden>
 
<div class="container" style="margin-top:10%; margin-bottom:5%">
     
    
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
    
<style>
    :root {
        --surface-color: #fff;
        --curve: 40;
        }

        * {
        box-sizing: border-box;
        }

        body {
        font-family: "Noto Sans JP", sans-serif;
        background-color: #fef8f8;
        }

        .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 4rem 5vw;
        padding: 0;
        list-style-type: none;
        }

        .card {
        position: relative;
        display: block;
        height: 100%;
        border-radius: calc(var(--curve) * 1px);
        overflow: hidden;
        text-decoration: none;
        }

        .card__image {
        width: 100%;
        height: auto;
        }

        .card__overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        border-radius: calc(var(--curve) * 1px);
        background-color: var(--surface-color);
        transform: translateY(100%);
        transition: 0.2s ease-in-out;
        }

        .card:hover .card__overlay {
        transform: translateY(0);
        }

        .card__header {
        position: relative;
        display: flex;
        align-items: center;
        gap: 2em;
        padding: 2em;
        border-radius: calc(var(--curve) * 1px) 0 0 0;
        background-color: var(--surface-color);
        transform: translateY(-100%);
        transition: 0.2s ease-in-out;
        }

        .card__arc {
        width: 80px;
        height: 80px;
        position: absolute;
        bottom: 100%;
        right: 0;
        z-index: 1;
        }

        .card__arc path {
        fill: var(--surface-color);
        d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
        }

        .card:hover .card__header {
        transform: translateY(0);
        }

        .card__thumb {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        }

        .card__title {
        font-size: 1em;
        margin: 0 0 0.3em;
        color: #6a515e;
        }

        .card__tagline {
        display: block;
        margin: 1em 0;
        font-family: "MockFlowFont";
        font-size: 0.8em;
        color: #d7bdca;
        }

        .card__status {
        font-size: 0.8em;
        color: #d7bdca;
        }

        .card__description {
        padding: 0 2em 2em;
        margin: 0;
        color: #d7bdca;
        font-family: "MockFlowFont";
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        }

</style>



<ul class="cards">
 
@foreach($post as $posta)
<li>
    <a href="" class="card">
      <img src="{{ asset('storage/' . $posta->foto_bank) }}" class="card__image" alt="" style="margin-bottom:15%" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
            <path />
          </svg>
          
          <div class="card__header-text">
            <h3 class="card__title" style="font-size:15px">{{ $posta->atas_nama}}</h3>
            <span class="card__status" style="font-size:15px">{{ $posta->bank}}</span>
          </div>
        </div>
        <p class="card__description" STYLE="font-size:15px; color:black">{{ $posta->rekening}}</p>
      </div>
    </a>
  </li>
  @endforeach
</ul>


          
  

    @endsection
