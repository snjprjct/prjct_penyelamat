



<?php $__env->startSection('container'); ?>
 
<div class="container">
  <br>
<a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
<br>
<br>
<div class="row">
 

<table class="table">
   
  <tbody>

    <tr>
          
      <td>kelas</td>
      <td>:</td>
      <td><?php echo e($kelas->id); ?></td>
    </tr>

    <tr>
          
      <td>Wali kelas</td>
      <td>:</td>
      <td><?php echo e($kelas->wali_kelas); ?></td>
    </tr>

    
  
  </tbody>
</table>

</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/kelas/detkelas.blade.php ENDPATH**/ ?>