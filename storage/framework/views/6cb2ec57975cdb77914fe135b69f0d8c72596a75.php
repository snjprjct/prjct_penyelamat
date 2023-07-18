




<?php $__env->startSection('judul'); ?>
Tambah Data siswa
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

 
<div class="container">
  <br>
    <a type="button" href=" " class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/siswa">
 <?php echo csrf_field(); ?>

 <div class ="row">
    <div class ="col-md-5">
      <div class="form-group">
        <label for="exampleInputEmail1">NIS siswa</label>
        <input type="text" value="<?php echo e(old('nis')); ?>" required name="nis" autofocus class="form-control  <?php $__errorArgs = ['nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nis" aria-describedby="nis" placeholder="Nis siswa"> 
      </div>

      <div class="form-group">
      <label for="inputState">Kelas</label>
      <select id="inputState" name="kelas_id" class="form-control">
        <option selected>Pilih Kelas</option>
        <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($kelas->id); ?>"><?php echo e($kelas->nama_kelas); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </select>
    </div>

     <div class="form-group">
    <label for="exampleInputPassword1">Tahun Masuk</label>
    <input type="text" required  value="<?php echo e(old('tahun_masuk')); ?>" name="tahun_masuk" class="form-control" id="tahun_masuk" placeholder="Tahun Masuk">
    </div>

     <div class="form-group">
      <label for="inputState">Status Pembayaran</label>
      <select id="inputState" name="status_byr" class="form-control">
        <option selected>Pilih Status Pembayaran</option>
         
        <option>Mandiri</option>
        <option>Bantuan</option>
        
      </select>
    </div>


    <div class="form-group">
      <label for="inputState">Status Siswa</label>
      <select id="inputState" name="status_siswa" class="form-control">
        <option selected>Pilih Status Siswa</option>
         
        <option>Aktif</option>
        <option>Tidak Aktif</option>
        <option>Alumni</option>
        
      </select>
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" required  value="<?php echo e(old('username')); ?>" name="username" class="form-control" id="username" placeholder="Nama Siswa">
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required  value="<?php echo e(old('password')); ?>" name="password" class="form-control" id="password" placeholder="Password">
    </div>

    </div>


 <div class ="col-md-7">
 

  <div class="form-group">
    <label for="exampleInputPassword1">Nama Siswa</label>
    <input type="text" required  value="<?php echo e(old('nama_siswa')); ?>" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Siswa">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Slug</label>
    <input type="text" name="slug"  value="<?php echo e(old('slug')); ?>" readonly required class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" placeholder="Slug">
  </div>

  <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div class="invalid-feedback">
    error nich
  </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Kelamin</label>
    <Br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki">
      <label class="form-check-label" for="jk1">Laki-Laki</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan">
      <label class="form-check-label" for="jk2">Perempuan</label>
    </div>
  
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <textarea type="text" required  value="<?php echo e(old('alamat')); ?>" name="alamat" class="form-control" id="alamat" placeholder="Alamat Siswa"></textarea>
   </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Telepon</label>
    <input type="text" required  value="<?php echo e(old('telepon')); ?>" name="telepon" class="form-control" id="telepon" placeholder="Nama Siswa">
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" required  value="<?php echo e(old('email')); ?>" name="email" class="form-control" id="email" placeholder="Email Siswa">
    </div>


    <div class="form-group">
    <label for="exampleInputPassword1">Nama Ayah</label>
    <input type="text" required  value="<?php echo e(old('nama_ayah')); ?>" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah">
    </div>


     <div class="form-group">
    <label for="exampleInputPassword1">Nama Ibu</label>
    <input type="text" required  value="<?php echo e(old('nama_ibu')); ?>" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu">
    </div>

     <div class="form-group">
    <label for="exampleInputPassword1">Telepon Orang Tua</label>
    <input type="text" required  value="<?php echo e(old('telepon_ortu')); ?>" name="telepon_ortu" class="form-control" id="telepon_ortu" placeholder="Telepon Ortu">
    </div>


     

   <button type="submit" class="btn btn-primary">Tambah siswa</button>
</form>

</div>
</div>
</div>


<script>

  const nis= document.querySelector('#nis');
  const slug= document.querySelector('#slug');

  nis.addEventListener('change', function() {
    fetch('/siswa/checkSlug?nis=' + nis.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/siswa/create.blade.php ENDPATH**/ ?>