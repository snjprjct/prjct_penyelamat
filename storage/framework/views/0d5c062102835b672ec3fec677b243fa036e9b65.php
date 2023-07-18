



<?php $__env->startSection('judul'); ?>

<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
 
<div class="container" style="margin-top:10%; margin-bottom:5%">
     
    
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

    </div>
    <?php elseif(session()->has('update')): ?>
    <div class="alert alert-warning" role="alert">
        <?php echo e(session('warning')); ?>

    </div>
    <?php elseif(session()->has('deleted')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(session('deleted')); ?>

    </div>
    <?php endif; ?>
    
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
 
<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
    <a href="" class="card">
      <img src="<?php echo e(asset('storage/' . $posta->foto_bank)); ?>" class="card__image" alt="" style="margin-bottom:15%" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
            <path />
          </svg>
          
          <div class="card__header-text">
            <h3 class="card__title" style="font-size:15px"><?php echo e($posta->atas_nama); ?></h3>
            <span class="card__status" style="font-size:15px"><?php echo e($posta->bank); ?></span>
          </div>
        </div>
        <p class="card__description" STYLE="font-size:15px; color:black"><?php echo e($posta->rekening); ?></p>
      </div>
    </a>
  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


          
  

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/rekeningbayar.blade.php ENDPATH**/ ?>