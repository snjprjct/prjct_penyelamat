




<?php $__env->startSection('judul'); ?>
Edit Data Kelas
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>
 
 
<div class="container">
  <br>
    <a type="button" href="<?php echo e(URL::previous()); ?>" class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/kelas/<?php echo e($kelas->slug); ?>">
      
  <?php echo e($kelas->slug); ?>

 <?php echo csrf_field(); ?>
   <?php echo method_field('put'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kelas</label>
    <input type="text" value="<?php echo e(old('nama_kelas',$kelas->nama_kelas)); ?>" 
    required name="nama_kelas" class="form-control <?php $__errorArgs = ['nama_kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_kelas" aria-describedby="nama_kelas" placeholder="Nama Kelas"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Slug</label>
    <input type="text" name="slug"  value="<?php echo e(old('slug',$kelas->slug)); ?>" readonly required class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" placeholder="Slug">
  </div>

  <?php $__errorArgs = ['slug'];
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
    <label for="exampleInputPassword1">Wali Kelas</label>
    <input type="text" required  value="<?php echo e(old('wali_kelas',$kelas->wali_kelas)); ?>" name="wali_kelas" class="form-control" id="wali_kelas" placeholder="Nama Wali Kelas">
  </div>

   <button type="submit" class="btn btn-primary">Edit Kelas</button>
</form>

</div>
 
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/kelas/edit.blade.php ENDPATH**/ ?>