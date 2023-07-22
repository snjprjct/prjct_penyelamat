

@extends('layouts.main')



@section('judul')
 
@endsection

{{-- {{auth()->user()->unreadNotifications }} --}}

@section('container')

   <div class="slider-area">
        <div class="slider-item-active">
            <!-- Single -->
            <div class="slider-item">
                <div class="slider-bg1 slider-height hero-overly slider-bg1 d-flex align-items-center " style="background-image:url({{ asset('storage/post-image/foto1.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10">
                                <div class="slide-content">
                                    <h1 style="font-size:100px">Senjani Photography.</h1>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
                
            </div>
            <!-- Single -->
            <div class="slider-item">
                <div class="slider-bg2 slider-height hero-overly slider-bg1 d-flex align-items-center "  style="background-image:url({{ asset('storage/post-image/foto2.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10">
                                <div class="slide-content">
                                    <h1 style="font-size:120px">Senjani Photography</h1>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
               
            </div>
            <!-- Single -->
            <div class="slider-item">
                <div class="slider-bg3 slider-height hero-overly slider-bg1 d-flex align-items-center"  style="background-image:url({{ asset('storage/post-image/foto3.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10">
                                <div class="slide-content">
                                    <h1 style="font-size:120px">Senjani Photography</h1>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
                
            </div>
        </div>
        <!-- Dot - image -->
        <!-- <div class="slider-nav text-center">
            <div class="slider-thumb">
                <img src="{{ asset('storage/post-image/foto1.jpg') }}" style="width:100px" alt="">
            </div>
            <div class="slider-thumb">
                <img src="{{ asset('storage/post-image/foto2.jpg') }}" style="width:100px" alt="">
            </div>
            <div class="slider-thumb">
                <img src="{{ asset('storage/post-image/foto3.jpg') }}" style="width:100px" alt="">
            </div>
            <div class="slider-thumb">
                <img src="{{ asset('storage/post-image/foto4.jpg') }}" style="width:100px" alt="">
            </div>
        </div>
    </div> -->
    <!-- End Start slider -->
    
 <!--? Gallery Area Start -->
    <div class="gallery-area section-padding40">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="section-tittle mb-50">
                        <h1>Senjani is a unique, elegant and simple vendor in the field of wedding photography, focused on you and your loved ones on that day, pure beauty will be created eternally in your moment.</h1>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="section-tittle mb-60">
                        <p>Senjani is a unique, elegant and simple vendor in the field of wedding photography, focused on you and your loved ones on that day, pure beauty will be created eternally in your moment.</p>
                    </div> -->
                </div>
            </div>
            
            <div class="photos-area section-padding40">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12">
                <img src="{{ asset('rettro-main/assets/img/gallery/instra7.jpg')}}" alt="image" height="400" width="inherit">
                </div>
            </div>
        </div>
    </div>

            <!-- <div class="row justify-content-between">
              @foreach ($menu as $galery )
                  
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 section-padding40">
                    <div class="box snake mb-30">
                        <div class="gallery-img small-img " style="background-image: url({{ asset('storage/' . $galery->foto) }});"></div>
                        <figcaption>{{ $galery->judul }}</figcaption>
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="{{ asset('storage/' . $galery->foto) }}" class="img-pop-up"><i class="ti-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>    
            </div>
        </div>
    </div> -->
    <!-- Gallery Area End -->
    <!--? All startups Start -->
    <!-- <div class="all-starups-area fix"> -->
        <!-- left Contents -->
        <!-- <div class="starups">
            <div class="starups-details">
                <h3>I'm Ready to Exceed Expectations</h3>
                <p>You Can't Stop Time Like The Twilight Sky. We Will Create Your Moment And That Of Your Loved Ones, Make A Beautiful Record That Is Timeless, Because The Eternal Moment Is Pure Beauty..</p>
                <a href="/profil" class="border-btn border-btn2">About Me</a>
            </div>
        </div> -->
        <!-- <div class="gallery-area section-padding40"> -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <!-- <div class="section-tittle mb-50">
                        <h2>With my camera, I capture daily life</h2>
                    </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="section-tittle mb-50">
                        <h1>You can't stop time like the twilight sky. We will create your moment and that of your loved ones, make a beautiful record that is timeless, because the eternal moment is pure beauty.</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="photos-area section-padding40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                <img src="{{ asset('rettro-main/assets/img/gallery/instra6.jpg')}}" alt="image" height="inherit" width="1170">
                </div>
            </div>
        </div>
    </div>

        <!--Right Contents  -->
        <div class="starups-img"></div>
    </div>
    <!--All startups End -->
    <!--? Services Area Start -->
    <div class="categories-area section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-tittle mb-60 text-center">
                        <h1>YOUR HAPPINESS IS OUR MISSION</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ asset('rettro-main/assets/img/icon/services1.svg')}}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Menjangkau Pasar yang Lebih Luas</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ asset('rettro-main/assets/img/icon/services2.svg')}}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Mengabadikan Moment Spesial</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ asset('rettro-main/assets/img/icon/services3.svg')}}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Memberikan Kesan Pada Setiap Moment</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ asset('rettro-main/assets/img/icon/services4.svg')}}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Membangun Chemistery Antara Client dan Photographer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="section-padding40">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <!-- <div class="section-tittle mb-50"> -->
                    <div class="section-btn text-center mb-50">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="4s" data-wow-delay=".20s">
                        <a href="/galery" class="border-btn border-btn2">Portfolio</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-btn text-center mb-50">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="4s" data-wow-delay=".20s">
                        <a href="/cek" class="border-btn border-btn2">Package</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--? Services Area End -->
    <!--? Testimonial Area Start -->

    <!-- Pricing Card End -->
    <!--? instagram-social start -->
    <div class="instagram-area fix section-padding40">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="instagram-active owl-carousel">
                        <div class="single-instagram">
                            <img src="{{ asset('rettro-main/assets/img/gallery/instra1.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('rettro-main/assets/img/gallery/instra2.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('rettro-main/assets/img/gallery/instra3.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('rettro-main/assets/img/gallery/instra4.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('rettro-main/assets/img/gallery/instra5.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="{{ asset('rettro-main/assets/img/gallery/instra2.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-social End -->


@endsection