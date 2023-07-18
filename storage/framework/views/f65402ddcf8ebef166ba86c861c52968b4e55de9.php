 



<?php $__env->startSection('judul'); ?>
Edit Data User
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

 
<div class="container">
  <br>
    <a type="button" href="" class="btn btn-primary">Back</a> 
  <br>
  <br>
   <form method="post" action="/user/<?php echo e($user->id); ?>">
 <?php echo csrf_field(); ?>
<?php echo method_field('put'); ?>
 


  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pejabat</label>
    <input type="text" value="<?php echo e(old('name',$user->name)); ?>" required name="name" autofocus class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" aria-describedby="name" placeholder="Nama paket"> 
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" required  value="<?php echo e(old('email',$user->email)); ?>" name="email" class="form-control" id="email" placeholder="Email">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Jabatan</label>
  <select id="inputState" name="level" class="form-control">
     
        <option value="<?php echo e($user->level); ?>" selected>-<?php echo e($user->level); ?>-</option>
        

        <option value="Administrator">Administrator</option>
        <option value="Kepala">Kepala</option>      
      </select>
</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" required  value="<?php echo e(old('username',$user->username)); ?>" name="username" class="form-control" id="username" placeholder="Username">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required  value="<?php echo e(old('password',$user->password)); ?>)}}" name="password" class="form-control" id="password" placeholder="Password">
  </div>




   <button type="submit" class="btn btn-primary">Tambah User</button>
</form>

</div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/dashboard/user/edit.blade.php ENDPATH**/ ?>