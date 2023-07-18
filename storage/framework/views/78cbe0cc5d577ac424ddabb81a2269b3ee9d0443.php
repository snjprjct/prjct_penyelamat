 



<?php $__env->startSection('judul'); ?>
Data User
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>
   
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/font-awsome/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 


<div class="container" style="padding: 20px">

<div class="container">
  <br>
    <a type="button" href="/user" class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/user">
 <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama User</label>
    <input type="text" value="<?php echo e(old('name')); ?>" required name="name" autofocus class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" aria-describedby="name" placeholder="Nama Kelas"> 
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" required  value="<?php echo e(old('email')); ?>" name="email" class="form-control" id="email" placeholder="Email">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Level</label>
  <select id="inputState" name="level" class="form-control">
       <option>Pilih Level</option>
        <option value="Administrator">Administrator</option>
        <option value="Kepala">Kepala Sekolah</option>    
      </select>
</div>
<!-- 
'Super Admin','Admin','Kabid PPM','Kabid PPEPD','Kabid Litbang','Kabid PSI','Sekre','Kaban'
$2y$10$Orj6o73innO4WmdV47DGcehKypgeL2oOuxCzZtX/3BG0N1rnje/TG -->

  <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" required  value="<?php echo e(old('username')); ?>" name="username" class="form-control" id="username" placeholder="Username">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required  value="<?php echo e(old('password')); ?>" name="password" class="form-control" id="password" placeholder="Password">
  </div>


   <button type="submit" class="btn btn-primary">Tambah Kelas</button>
</form>

</div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/user/create.blade.php ENDPATH**/ ?>