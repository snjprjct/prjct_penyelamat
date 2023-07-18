




<?php $__env->startSection('judul'); ?>
Tambah Data Kelas
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

 
<div class="container">
  <br>
    <a type="button" href=" " class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/periode/<?php echo e($periode->id); ?>">
 <?php echo csrf_field(); ?>
  <?php echo method_field('put'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Bulan Periode</label>
    <input type="text" value="<?php echo e(old('bulan',$periode->bulan)); ?>" required name="bulan" autofocus class="form-control <?php $__errorArgs = ['bulan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="bulan" aria-describedby="bulan" placeholder="Bulan Periode"> 
  </div>
   
 

  <div class="form-group">
    <label for="exampleInputPassword1">Tahun</label>
    <input type="text" required  value="<?php echo e(old('tahun',$periode->tahun)); ?>" name="tahun" class="form-control" id="tahun" placeholder="Nama Tahun">
  </div>

   <button type="submit" class="btn btn-primary">Edit Periode</button>
</form>

</div>

<script>

  const bulan= document.querySelector('#bulan');
  const slug= document.querySelector('#slug');

  bulan.addEventListener('change', function() {
    fetch('/kelas/checkSlug?bulan=' + bulan.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/periode/edit.blade.php ENDPATH**/ ?>