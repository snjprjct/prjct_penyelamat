




<?php $__env->startSection('judul'); ?>
Data Pembayaran
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <form action="/pembayaran">
            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" 
              value="<?php echo e(request('search')); ?>"
              placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary" >Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Periode</th>
      <th scope="col">Nama siswa</th>
      <th scope="col">Total</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  
    
      <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      
    <tr>
      <th scope="row">1</th>
      <td><a href="/detpembayaran/<?php echo e($posta->slug); ?>"><?php echo e($posta->periode->bulan); ?> <?php echo e($posta->periode->tahun); ?></a></td>
      <td><?php echo e($posta->siswa->nama_siswa); ?></td>
      <td><?php echo e($posta->total); ?></td>
      <td><button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </tbody>
</table>

<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/pembayaran.blade.php ENDPATH**/ ?>