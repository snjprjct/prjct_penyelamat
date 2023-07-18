 
<?php $__env->startSection('judul'); ?> Data customer <?php $__env->stopSection(); ?>
 <?php $__env->startSection('container'); ?> <?php if($post->count()): ?> 
  
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <a type="button" href="/customer/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
          <form action="/customer">
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
      <th>No</th> 
      <th>Nama customer</th>
      <th>Alamat</th>
      <th>Telepon<th>
      <th>Email<th>
      <th>Aksi<th>
    </tr>
  </thead>
  <tbody> <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
      <td>  <a href="/customer/<?php echo e($posta->slug); ?>"><?php echo e($loop->iteration); ?></a></td>
      
      <td><?php echo e($posta->nama_customer); ?></td>
      <td><?php echo e($posta->alamat); ?></td>
      <td><?php echo e($posta->telepon); ?></td>
      <td><?php echo e($posta->email); ?></td>
      <td>
        <a href="/customer/<?php echo e($posta->slug); ?>/edit"  role="button" class="btn btn-warning">Edit</a>
<form action="/customer/<?php echo e($posta->slug); ?>" class="d-inline" method="post">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>

                      <button onclick="return confirm('Are You Sure')"  role="button" class="btn btn-danger">Hapus</button>
</form>
      </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </tbody>
</table> <?php else: ?> <p>Post Not Found</p> <?php endif; ?>

<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>

<?php $__env->stopSection(); ?>

</div>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/customer/index.blade.php ENDPATH**/ ?>