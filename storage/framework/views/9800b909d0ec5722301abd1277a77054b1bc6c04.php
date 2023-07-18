



<?php $__env->startSection('container'); ?>
 
<div class="container">
<div class="row">
<div class="col-md-3">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>Bulan</td>
      <td>:</td>
      <td><?php echo e($detperiode->bulan); ?></td>
    </tr>

    <tr>
          
      <td>Tahun</td>
      <td>:</td>
      <td><?php echo e($detperiode->tahun); ?></td>
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
      <td><?php echo e($detperiode->id); ?></td> 
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($detperiode->nis); ?></td>
    </tr>


    <tr>
          
      <td>Nama siswa</td>
      <td>:</td>
      <td><?php echo e($detperiode->nama_siswa); ?></td>
    </tr>

    <tr>
          
      <td>Genre</td>
      <td>:</td>
      <td><?php echo e($detperiode->jk); ?></td>
    </tr>


    <tr>
          
      <td>Alamat siswa</td>
      <td>:</td>
      <td><?php echo e($detperiode->alamat); ?></td>
    </tr>

    <tr>
          
      <td>Telepon siswa</td>
      <td>:</td>
      <td><?php echo e($detperiode->telepon); ?></td>
    </tr>


    <tr>
          
      <td>Nama Ayah</td>
      <td>:</td>
      <td><?php echo e($detperiode->nama_ayah); ?></td>
    </tr>
    
    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($detperiode->nis); ?></td>
    </tr>


    <tr>
          
      <td>Nama Ibu</td>
      <td>:</td>
      <td><?php echo e($detperiode->nama_ibu); ?></td>
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($detperiode->nis); ?></td>
    </tr>


    <tr>
          
      <td>Telepon Orang Tua</td>
      <td>:</td>
      <td><?php echo e($detperiode->telepon_ortu); ?></td>
    </tr>
<!--
    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td><?php echo e($detperiode->username); ?></td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td><?php echo e($detperiode->password); ?></td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/detperiode.blade.php ENDPATH**/ ?>