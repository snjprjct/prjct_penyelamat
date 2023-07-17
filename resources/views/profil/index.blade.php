@extends('layouts.main')



@section('judul')

@endsection


@section('container')

<section class="slider-area slider-area2 slider-height2 d-flex align-items-center  hero-overly" style="background-image:url({{ asset('storage/post-image/prof1.jpg') }})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-11 col-md-12">
                <div class="hero__caption hero__caption2 text-center">
                    <h2>Profil</h2>
                </div>
            </div>
        </div>
    </div>
</section>



@foreach($post as $posta)

<div class="about-details section-padding40">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="section-tittle mb-50">
                    <h2>With my camera, I capture daily life</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-tittle mb-20">
                    <p style="text-align: justify;">Delapan Photography adalah perusahaan yang bergerak di bidang jasa fotografi, 
                        Delapan Photography didirikan oleh Ahmad Nizar pada awal tahun 2013 dengan 
                        tujuan memaksimalkan dan memberdayagunakan seluruh potensi dan kemampuan yang 
                        dimilikinya, yang lahir dari latar belakang dunia fotografi, dan telah memiliki 
                        pengalaman didalam fotografi, khususnya fotografi pernikahan serta fotografi studio.
                        
                        <br>
                        <br>Bentuk angka DELAPAN yang seakan tidak akan ada putusnya. 
                        Bentuk yang tidak berujung ini diharapkan dapat membawa kesuksesan yang terus mengalir tanpa henti dan tidak berkesudahan</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? All startups Start -->
<div class="all-starups-area fix" style="background-image:url({{ asset('storage/post-image/prof2.jpg') }})">
    <!-- left Contents -->
    <div class="starups">
        <div class="starups-details">
            <h3>I'm Ready to Exceed Expectations</h3>
            <p style="text-align: justify;">We believe that visual storytelling is the universal language of 
                creative inspiration. Our culture is customer-centric to the core. 
                We bring passion, responsiveness and first-hand experience to your creative 
                challenges and deliver products that help you achieve your creative vision.</p>
            <a target="_blank" href="https://wa.me/6282249568851?text=Hai, Saya Ingin Bertanya Seputar Delapan Photography" class="border-btn border-btn2">Hubungi Kami</a>
        </div>
    </div>
    <!--Right Contents  -->
    <div class="starups-img"></div>
</div>
<!--All startups End -->
@endforeach
<!--? Services Area Start -->
<div class="categories-area section-padding40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-tittle mb-60 text-center">
                    <h2>Our Team</h2>
                    <p>Ayo Bertemu dengan Team Kami.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($team as $team)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="{{ asset('storage/' . $team->foto) }}" width="250px" height="200px" alt="">
                       
                    </div>
                    <div class="cat-cap">
                        <h5>{{ $team->nama }}</h5>
                        <p><b>{{ $team->posisi }}</b></p>
                    </div>
                </div>
            </div>

            @endforeach
            
        </div>
    </div>
</div>
<!--? Services Area End -->
<!--? instagram-social start -->
<div class="instagram-area fix">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-12">
                <div class="instagram-active owl-carousel">
                    <div class="single-instagram">
                        <img src="assets/img/gallery/instra1.png" alt="">
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="single-instagram">
                        <img src="assets/img/gallery/instra2.png" alt="">
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="single-instagram">
                        <img src="assets/img/gallery/instra3.png" alt="">
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="single-instagram">
                        <img src="assets/img/gallery/instra4.png" alt="">
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="single-instagram">
                        <img src="assets/img/gallery/instra5.png" alt="">
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="single-instagram">
                        <img src="assets/img/gallery/instra2.png" alt="">
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection