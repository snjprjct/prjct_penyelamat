



<?php $__env->startSection('container'); ?>
 
<div class="container">
<div class="row">
<div class="col-md-3">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>kelas</td>
      <td>:</td>
      <td><?php echo e($detsiswa->kelas->nama_kelas); ?></td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->kelas->wali_kelas); ?></td>
    </tr>

    <tr>
          
      <td>Tahun Masuk</td>
      <td>:</td>
      <td><?php echo e($detsiswa->tahun_masuk); ?></td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->status); ?></td>
    </tr>

    
    
</tbody>
</table>
</div>



<div class="col-md-9">
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->id); ?></td> 
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->nis); ?></td>
    </tr>


    <tr>
          
      <td>Nama siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->nama_siswa); ?></td>
    </tr>

    <tr>
          
      <td>Genre</td>
      <td>:</td>
      <td><?php echo e($detsiswa->jk); ?></td>
    </tr>


    <tr>
          
      <td>Alamat siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->alamat); ?></td>
    </tr>

    <tr>
          
      <td>Telepon siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->telepon); ?></td>
    </tr>


    <tr>
          
      <td>Nama Ayah</td>
      <td>:</td>
      <td><?php echo e($detsiswa->nama_ayah); ?></td>
    </tr>
    
    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->nis); ?></td>
    </tr>


    <tr>
          
      <td>Nama Ibu</td>
      <td>:</td>
      <td><?php echo e($detsiswa->nama_ibu); ?></td>
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->nis); ?></td>
    </tr>


    <tr>
          
      <td>Telepon Orang Tua</td>
      <td>:</td>
      <td><?php echo e($detsiswa->telepon_ortu); ?></td>
    </tr>
<!--
    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td><?php echo e($detsiswa->username); ?></td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td><?php echo e($detsiswa->password); ?></td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/detsiswa.blade.php ENDPATH**/ ?>