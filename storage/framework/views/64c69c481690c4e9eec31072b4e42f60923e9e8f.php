



<?php $__env->startSection('container'); ?>
 
<div class="container">
   <br>
<a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
<br>
<br>
<div class="row">
<div class="col-md-3">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>Bulan</td>
      <td>:</td>
      <td><?php echo e($periode->bulan); ?></td>
    </tr>

    <tr>
          
      <td>Tahun</td>
      <td>:</td>
      <td><?php echo e($periode->tahun); ?></td>
    </tr>

    
    
</tbody>
</table>
</div>



<div class="col-md-9">
<table class="table">
   
 
  
  <tbody>
  </tbody>
</table>

</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/periode/detperiode.blade.php ENDPATH**/ ?>