

<?php $__env->startSection('container'); ?>
 
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id Kelas</td>
      <td><?php echo e($post->id); ?></td> 
    </tr>

    <tr>
          
      <td>Nama Kelas</td>
      <td><?php echo e($post->nama_kelas); ?></td>
    </tr>

    <tr>
          
      <td>Wali Kelas</td>
      <td><?php echo e($post->wali_kelas); ?></td>
    </tr>
    
  </tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/post.blade.php ENDPATH**/ ?>