 <?php $__env->startSection('judul'); ?> Data siswa <?php $__env->stopSection(); ?> <?php $__env->startSection('container'); ?> <?php if($post->count()): ?> 
  
    <div class="container">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <form action="/siswa">
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
      <th scope="col">Nis siswa</th>
      <th scope="col">Nama siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody> <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <tr>
      <th scope="row"><?php echo e($posta->id); ?></th>
      <td>
        <a href="/siswa/<?php echo e($posta->slug); ?>"><?php echo e($posta->nis); ?></a>
      </td>
      <td><?php echo e($posta->nama_siswa); ?></td>
      <td><?php echo e($posta->kelas_id); ?></td>
      <td><button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </tbody>
</table> <?php else: ?> <p>Post Not Found</p> <?php endif; ?>

<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>

<?php $__env->stopSection(); ?>

</div>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/siswa.blade.php ENDPATH**/ ?>