




<?php $__env->startSection('judul'); ?>
Ketentuan Pembayaran
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Ketentuan</th>
      <th scope="col">SPP</th>
      <th scope="col">Denda</th>
      <th scope="col">Uang lainnya</th>
      <th scope="col">Catatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
 
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/ketentuan.blade.php ENDPATH**/ ?>