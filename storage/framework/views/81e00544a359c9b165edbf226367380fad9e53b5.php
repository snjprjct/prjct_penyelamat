




<?php $__env->startSection('judul'); ?>
LAPORAN
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>
 

<?php if(session()->has('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

      </div>
<?php elseif(session()->has('deleted')): ?>
 <div class="alert alert-danger" role="alert">
        <?php echo e(session('deleted')); ?>

      </div>
  <?php endif; ?>

<div class="container">
<form action="/laporan/" class="form-inline" method="post">
   <div class="form-group">
    <label for="inputPassword6">Laporan</label>
    <input type="text" id="tabel"  value="<?php echo e(old('tabel')); ?>" required name="tabel" autofocus class="form-control mx-sm-3 <?php $__errorArgs = ['spp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  aria-describedby="spp" placeholder="ketentuan Spp"> 
  </div>
</FORM>



<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/laporan/index.blade.php ENDPATH**/ ?>