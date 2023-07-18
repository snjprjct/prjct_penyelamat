 




<?php $__env->startSection('judul'); ?>
Data Periode
<?php $__env->stopSection(); ?>



<?php $__env->startSection('container'); ?>

<div class="container">
      <div class="row">
        <div class="col-md-8">
          <a type="button" href="/periode/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
          <form action="/periode">
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

<?php if($post->count()): ?>
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-8">
    <form action="/periode">
    </form>
  </div>
  </div>

  
<?php if(session()->has('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

      </div>
<?php elseif(session()->has('deleted')): ?>
 <div class="alert alert-danger" role="alert">
        <?php echo e(session('deleted')); ?>

      </div>
  <?php endif; ?>
  
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Periode</th>
      <th scope="col">Bulan</th>
      <th scope="col">Tahun</th> 
      <th scope="col">Aksi</th> 
    </tr>
  </thead>
  <tbody>
      <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
    <tr>
      <th scope="row"><?php echo e($loop->iteration); ?></th>
      <td><a href="/periode/<?php echo e($posta['id']); ?>"> <?php echo e($posta['id']); ?> </a></td>
      <td><?php echo e($posta['bulan']); ?></td>
      <td><?php echo e($posta['tahun']); ?></td>
      <td>
       
<a href="/periode/<?php echo e($posta->id); ?>/edit"  role="button" class="btn btn-warning">Edit</a>
<form action="/periode/<?php echo e($posta->id); ?>" class="d-inline" method="post">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>

                      <button onclick="return confirm('Are You Sure')"  role="button" class="btn btn-danger">Hapus</button>
</form>
</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>


<?php else: ?>
<p>posta Not Found</p>

<?php endif; ?>
<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/periode/index.blade.php ENDPATH**/ ?>