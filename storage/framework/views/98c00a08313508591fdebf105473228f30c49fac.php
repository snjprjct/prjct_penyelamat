




<?php $__env->startSection('judul'); ?>
Data Kelas
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<div class="container">
      <div class="row">
        <div class="col-md-8">
          <button type="button" class="btn btn-primary">Tambah</button> 
</div>
        <div class="col-md-4">
          <form action="/kelas">
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
      <th scope="col">Id Kelas</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Wali Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
    <tr>
      <th scope="row">1</th>
      <td><a href="/kelas/<?php echo e($posta->slug); ?>"><?php echo e($posta->id); ?></a></td>
      <td><?php echo e($posta->nama_kelas); ?></td>
      <td><?php echo e($posta->wali_kelas); ?></td>
      <td>
<button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>

<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/kelas.blade.php ENDPATH**/ ?>