



<?php $__env->startSection('judul'); ?>

<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('container'); ?>
 
 <style>
    @font-face {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 200;
    src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf) format('truetype');
    }
    @font-face {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf) format('truetype');
    }
    @font-face {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7g.ttf) format('truetype');
    }
    @font-face {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 600;
    src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlxdr.ttf) format('truetype');
    }
    @font-face {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdr.ttf) format('truetype');
    }
    @font-face {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 900;
    src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3iu4nwlxdr.ttf) format('truetype');
    }
    body {
    background: #dce1df;
    color: #4f585e;
    font-family: 'Source Sans Pro', sans-serif;
    text-rendering: optimizeLegibility;
    }
    a.btn {
    background: #0096a0;
    border-radius: 4px;
    box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.25);
    color: #ffffff;
    display: inline-block;
    padding: 6px 30px 8px;
    position: relative;
    text-decoration: none;
    transition: all 0.1s 0s ease-out;
    }
    .no-touch a.btn:hover {
    background: #00a2ad;
    box-shadow: 0px 8px 2px 0 rgba(0, 0, 0, 0.075);
    transform: translateY(-2px);
    transition: all 0.25s 0s ease-out;
    }
    .no-touch a.btn:active,
    a.btn:active {
    background: #008a93;
    box-shadow: 0 1px 0px 0 rgba(255, 255, 255, 0.25);
    transform: translate3d(0, 1px, 0);
    transition: all 0.025s 0s ease-out;
    }
    div.cards {
    margin: 80px auto;
    max-width: 960px;
    text-align: center;
    }
    div.card {
    background: #ffffff;
    display: inline-block;
    margin: 8px;
    max-height: 400px;
    max-width: 500px;
    perspective: 1000;
    position: relative;
    text-align: left;
    transition: all 0.3s 0s ease-in;
    height: relative;
    width: relative;
    z-index: 1;
    }
    div.card img {
    max-width: 300px;
    }
    div.card .card__image-holder {
    background: rgba(0, 0, 0, 0.1);
    height: 0;
    padding-bottom: 75%;
    }
    div.card div.card-title {
    background: #ffffff;
    padding: 6px 15px 10px;
    position: relative;
    z-index: 0;
    }
    div.card div.card-title a.toggle-info {
    border-radius: 32px;
    height: 32px;
    padding: 0;
    position: absolute;
    right: 15px;
    top: 10px;
    width: 32px;
    }
    div.card div.card-title a.toggle-info span {
    background: #ffffff;
    display: block;
    height: 2px;
    position: absolute;
    top: 16px;
    transition: all 0.15s 0s ease-out;
    width: 12px;
    }
    div.card div.card-title a.toggle-info span.left {
    right: 14px;
    transform: rotate(45deg);
    }
    div.card div.card-title a.toggle-info span.right {
    left: 14px;
    transform: rotate(-45deg);
    }
    div.card div.card-title h2 {
    font-size: 24px;
    font-weight: 700;
    letter-spacing: -0.05em;
    margin: 0;
    padding: 0;
    }
    div.card div.card-title h2 small {
    display: block;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: -0.025em;
    }
    div.card div.card-description {
    padding: 0 15px 10px;
    position: relative;
    font-size: 14px;
    }
    div.card div.card-actions {
    box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.075);
    padding: 10px 15px 20px;
    text-align: center;
    }
    div.card div.card-flap {
    background: #d9d9d9;
    position: absolute;
    width: 100%;
    transform-origin: top;
    transform: rotateX(-90deg);
    }
    div.card div.flap1 {
    transition: all 0.3s 0.3s ease-out;
    z-index: -1;
    }
    div.card div.flap2 {
    transition: all 0.3s 0s ease-out;
    z-index: -2;
    }
    div.cards.showing div.card {
    cursor: pointer;
    opacity: 0.6;
    transform: scale(0.88);
    }
    .no-touch div.cards.showing div.card:hover {
    opacity: 0.94;
    transform: scale(0.92);
    }
    div.card.show {
    opacity: 1 !important;
    transform: scale(1) !important;
    }
    div.card.show div.card-title a.toggle-info {
    background: #ff6666 !important;
    }
    div.card.show div.card-title a.toggle-info span {
    top: 15px;
    }
    div.card.show div.card-title a.toggle-info span.left {
    right: 10px;
    }
    div.card.show div.card-title a.toggle-info span.right {
    left: 10px;
    }
    div.card.show div.card-flap {
    background: #ffffff;
    transform: rotateX(0deg);
    }
    div.card.show div.flap1 {
    transition: all 0.3s 0s ease-out;
    }
    div.card.show div.flap2 {
    transition: all 0.3s 0.2s ease-out;
    }

</style>

<div class="container" style="margin-top:2%; margin-bottom:22%">
     
   <CENTER> <h1 style="font-size:5.5rem">Gallery</h1></CENTER>
   <bR>
 
   <div class="cards">

              <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="card">
                <div class="card__image-holder">

                    <img class="card__image" src="<?php echo e(asset('storage/' . $posta->foto)); ?>" style="height:400px;width:100%" alt="" ></div>
                    <div class="box snake">    
                    <div class="overlay">
                    
                            <div class="overlay-content mb-30">
                            <div class="fix section-padding">
                                <a href="<?php echo e(asset('storage/' . $posta->foto)); ?>" class="img-pop-up"><i class="ti-zoom-in"></i></a>
                            </div>
                        </div>
                      
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
    </div>
  </div>

   
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahlan Nugraha\Downloads\photography\photography\resources\views/galery.blade.php ENDPATH**/ ?>