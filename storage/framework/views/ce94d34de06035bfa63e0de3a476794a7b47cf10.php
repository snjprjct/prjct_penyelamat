




<?php $__env->startSection('judul'); ?>
Tambah Data siswa
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

 
<div class="container">
  <br>
    <a type="button" href="<?php echo e(url()->previous()); ?>" class="btn btn-primary">Back</a> 
  <br>
  <br>
   <form method="post" action="/siswa/<?php echo e($siswa->slug); ?>">
 <?php echo csrf_field(); ?>
<?php echo method_field('put'); ?>
 <div class ="row">
    <div class ="col-md-5">
      <div class="form-group">
        <label for="exampleInputEmail1">NIS siswa</label>
        <input type="text" readonly   value="<?php echo e(old('nis',$siswa->nis)); ?>" required name="nis" autofocus class="form-control <?php $__errorArgs = ['nis'];
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
      <select id="inputState" readonly name="kelas_id" class="form-control">
        <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <option value="<?php echo e($kelas->id); ?>" <?php echo e($siswa->kelas_id == $kelas->id ? 'selected' : ''); ?>><?php echo e($kelas->nama_kelas); ?></option>
       
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </select>
    </div>

     <div class="form-group">
    <label for="exampleInputPassword1">Tahun Masuk</label>
    <input type="text" required readonly value="<?php echo e(old('tahun_masuk',$siswa->tahun_masuk)); ?>" name="tahun_masuk" class="form-control" id="tahun_masuk" placeholder="Tahun Masuk">
    </div>

     <div class="form-group">
      <label for="inputState">Status Pembayaran</label>
      <select id="inputState" readonly name="status_byr" class="form-control">
      <option value="<?php echo e($siswa->status_byr); ?>" selected><?php echo e(old('status_byr',$siswa->status_byr)); ?></option>
        <option>Mandiri</option>
        <option>Bantuan</option>
      </select>
    </div>


    <div class="form-group">
      <label for="inputState">Status Siswa</label>
      <select id="inputState" readonly name="status_siswa" class="form-control">
      <option value="<?php echo e($siswa->status_siswa); ?>" selected><?php echo e(old('status_siswa',$siswa->status_siswa)); ?></option>
         


         

        <option>Aktif</option>
        <option>Tidak Aktif</option>
        <option>Alumni</option>
        
      </select>
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
     <input type="text"  value="<?php echo e($user->username); ?>" required name="username" autofocus class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username" aria-describedby="username" placeholder="username siswa"> 
   </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  value="<?php echo e($user->password); ?>" required name="password" autofocus class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" aria-describedby="password" placeholder="password siswa"> 
     </div>

    </div>


 <div class ="col-md-7">
 

  <div class="form-group">
    <label for="exampleInputPassword1">Nama Siswa</label>
    <input type="text" required  value="<?php echo e(old('nama_siswa',$siswa->nama_siswa)); ?>" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Siswa">
  </div>

  <div class="form-group"> 
    <input type="text" name="slug" hidden value="<?php echo e(old('slug',$siswa->slug)); ?>" readonly required class="form-control <?php $__errorArgs = ['slug'];
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
      <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki" <?php echo e($siswa->jk == 'Laki-Laki' ? 'checked' : ''); ?>>
      <label class="form-check-label" for="jk1">Laki-Laki</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan" <?php echo e($siswa->jk == 'Perempuan' ? 'checked' : ''); ?> >
      <label class="form-check-label" for="jk2">Perempuan</label>
    </div>
  
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <textarea type="text" required  value="<?php echo e(old('alamat',$siswa->alamat)); ?>" name="alamat" class="form-control" id="alamat" placeholder="Alamat Siswa"><?php echo e(old('alamat',$siswa->alamat)); ?></textarea>
   </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Telepon</label>
    <input type="text" required  value="<?php echo e(old('telepon',$siswa->telepon)); ?>" name="telepon" class="form-control" id="telepon" placeholder="Nama Siswa">
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" required  value="<?php echo e(old('email',$siswa->email)); ?>" name="email" class="form-control" id="email" placeholder="Email Siswa">
    </div>


    <div class="form-group">
    <label for="exampleInputPassword1">Nama Ayah</label>
    <input type="text" required  value="<?php echo e(old('nama_ayah',$siswa->nama_ayah)); ?>" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah">
    </div>


     <div class="form-group">
    <label for="exampleInputPassword1">Nama Ibu</label>
    <input type="text" required  value="<?php echo e(old('nama_ibu',$siswa->nama_ibu)); ?>" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu">
    </div>

     <div class="form-group">
    <label for="exampleInputPassword1">Telepon Orang Tua</label>
    <input type="text" required  value="<?php echo e(old('telepon_ortu',$siswa->telepon_ortu)); ?>" name="telepon_ortu" class="form-control" id="telepon_ortu" placeholder="Telepon Ortu">
    </div>


     

   <button type="submit" class="btn btn-primary">Edit siswa</button>
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





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/siswa/edit.blade.php ENDPATH**/ ?>