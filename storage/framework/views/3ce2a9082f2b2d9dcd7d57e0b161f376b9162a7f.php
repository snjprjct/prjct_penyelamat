




<?php $__env->startSection('judul'); ?>
Edit Data ketentuan
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>
 
 
<div class="container">
  <br>
    <a type="button" href="<?php echo e(URL::previous()); ?>" class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/ketentuan/<?php echo e($ketentuan->id); ?>">
      
 
 <?php echo csrf_field(); ?>
   <?php echo method_field('put'); ?>

     <div class="form-group">
    <label for="exampleInputPassword1">id</label>
    <input type="text" name="id"  value="<?php echo e(old('id',$ketentuan->id)); ?>" readonly required class="form-control <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id" placeholder="id">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nama ketentuan</label>
    <input type="text" value="<?php echo e(old('keterangan',$ketentuan->keterangan)); ?>" 
    required name="keterangan" class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="keterangan" aria-describedby="keterangan" placeholder="Nama Keterangan"> 
  </div>


  <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div class="invalid-feedback">
    error nich
  </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  <div class="form-group">
    <label for="exampleInputPassword1">SPP</label>
    <input type="text" required  value="<?php echo e(old('spp',$ketentuan->spp)); ?>" name="spp" class="form-control" id="spp" placeholder="Nama Wali ketentuan">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Uang Lainnya</label>
    <input type="text" required  value="<?php echo e(old('uang_lainnya',$ketentuan->uang_lainnya)); ?>" name="uang_lainnya" class="form-control" id="uang_lainnya" placeholder="Nama Wali ketentuan">
  </div>
 
    <input type="text" required hidden value="<?php echo e(old('denda',$ketentuan->denda)); ?>" name="denda" class="form-control" id="denda" placeholder="Nama Wali ketentuan">
 

   <button type="submit" class="btn btn-primary">Edit ketentuan</button>
</form>

</div>
 
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/ketentuan/edit.blade.php ENDPATH**/ ?>