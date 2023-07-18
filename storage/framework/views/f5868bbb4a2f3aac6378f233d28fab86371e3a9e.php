





<?php $__env->startSection('judul'); ?>
 
<?php $__env->stopSection(); ?>



<?php $__env->startSection('container'); ?>

   <div class="slider-area">
        <div class="slider-item-active">
            <!-- Single -->
            <div class="slider-item">
                <div class="slider-bg1 slider-height hero-overly slider-bg1 d-flex align-items-center " style="background-image:url(<?php echo e(asset('storage/post-image/foto1.jpg')); ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10">
                                <div class="slide-content">
                                    <h1 style="font-size:120px">Delapan Photography</h1>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
                
            </div>
            <!-- Single -->
            <div class="slider-item">
                <div class="slider-bg2 slider-height hero-overly slider-bg1 d-flex align-items-center "  style="background-image:url(<?php echo e(asset('storage/post-image/foto2.jpg')); ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10">
                                <div class="slide-content">
                                    <h1 style="font-size:120px">Delapan Photography</h1>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
               
            </div>
            <!-- Single -->
            <div class="slider-item">
                <div class="slider-bg3 slider-height hero-overly slider-bg1 d-flex align-items-center"  style="background-image:url(<?php echo e(asset('storage/post-image/foto3.jpg')); ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-10">
                                <div class="slide-content">
                                    <h1 style="font-size:120px">Delapan Photography</h1>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
                
            </div>
        </div>
        <!-- Dot - image -->
        <div class="slider-nav text-center">
            <div class="slider-thumb">
                <img src="<?php echo e(asset('storage/post-image/foto1.jpg')); ?>" style="width:100px" alt="">
            </div>
            <div class="slider-thumb">
                <img src="<?php echo e(asset('storage/post-image/foto2.jpg')); ?>" style="width:100px" alt="">
            </div>
            <div class="slider-thumb">
                <img src="<?php echo e(asset('storage/post-image/foto3.jpg')); ?>" style="width:100px" alt="">
            </div>
            <div class="slider-thumb">
                <img src="<?php echo e(asset('storage/post-image/foto4.jpg')); ?>" style="width:100px" alt="">
            </div>
        </div>
    </div>
    <!-- End Start slider -->
    
 <!--? Gallery Area Start -->
    <div class="gallery-area section-padding40">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="section-tittle mb-50">
                        <h2>With my camera, I capture daily life</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-tittle mb-60">
                        <p>Delapan Photography adalah perusahaan yang bergerak di bidang jasa fotografi, 
                            Delapan Photography didirikan oleh Ahmad Nizar pada awal tahun 2013 dengan 
                            tujuan memaksimalkan dan memberdayagunakan seluruh potensi dan kemampuan yang 
                            dimilikinya, yang lahir dari latar belakang dunia fotografi, dan telah memiliki 
                            pengalaman didalam fotografi, khususnya fotografi pernikahan serta fotografi studio.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
              <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
             
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img small-img " style="background-image: url(<?php echo e(asset('storage/' . $galery->foto)); ?>);"></div>
                        <figcaption><?php echo e($galery->judul); ?></figcaption>
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="<?php echo e(asset('storage/' . $galery->foto)); ?>" class="img-pop-up"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn text-center mt-50">
                        <a href="/galery" class="border-btn">More Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? All startups Start -->
    <div class="all-starups-area fix">
        <!-- left Contents -->
        <div class="starups">
            <div class="starups-details">
                <h3>I'm Ready to Exceed Expectations</h3>
                <p>Bentuk angka DELAPAN yang seakan tidak akan ada putusnya. 
                    Bentuk yang tidak berujung ini diharapkan dapat membawa kesuksesan yang terus mengalir tanpa henti dan tidak berkesudahan.</p>
                <a href="/profil" class="border-btn border-btn2">About Me</a>
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
                        <h2>Life is about Creating Experiences</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('rettro-main/assets/img/icon/services1.svg')); ?>" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Menjangkau Pasar yang Lebih Luas</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('rettro-main/assets/img/icon/services2.svg')); ?>" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Mengabadikan Moment Spesial</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('rettro-main/assets/img/icon/services3.svg')); ?>" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Memberikan Kesan Pada Setiap Moment</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('rettro-main/assets/img/icon/services4.svg')); ?>" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Membangun Chemistery Antara Client dan Photographer</h5>
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
    <div class="instagram-area fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="instagram-active owl-carousel">
                        <div class="single-instagram">
                            <img src="<?php echo e(asset('rettro-main/assets/img/gallery/instra1.png')); ?>" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="<?php echo e(asset('rettro-main/assets/img/gallery/instra2.png')); ?>" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="<?php echo e(asset('rettro-main/assets/img/gallery/instra3.png')); ?>" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="<?php echo e(asset('rettro-main/assets/img/gallery/instra4.png')); ?>" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="<?php echo e(asset('rettro-main/assets/img/gallery/instra5.png')); ?>" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single-instagram">
                            <img src="<?php echo e(asset('rettro-main/assets/img/gallery/instra2.png')); ?>" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-social End -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/home.blade.php ENDPATH**/ ?>