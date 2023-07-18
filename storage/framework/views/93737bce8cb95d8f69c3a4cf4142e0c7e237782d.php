



<?php $__env->startSection('container'); ?>
 
<div class="container">
  <br>
  <?php if(auth()->user()->level == 'admin'): ?> {
<a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
} <?php endif; ?>
<br>
<br>
<div class="row">


<div class="col-md-4">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>kelas</td>
      <td>:</td>
      <td><?php echo e($siswa->kelas->nama_kelas); ?></td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->kelas->wali_kelas); ?></td>
    </tr>

    <tr>
          
      <td>Tahun Masuk</td>
      <td>:</td>
      <td><?php echo e($siswa->tahun_masuk); ?></td>
    </tr>

    <tr>
          
      <td>Status siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->status_siswa); ?></td>
    </tr>

    <tr>
          
      <td>Status Pembayaran</td>
      <td>:</td>
      <td><?php echo e($siswa->status_byr); ?></td>
    </tr>

    <TR>
    <td></td>
      <td></td>
    <td rowspan="4">
      <input hidden value="<?php echo e($aa = auth()->user()->level); ?>"  >
    <?php if($aa=="Siswa"): ?>
     <a href="/siswa/<?php echo e($siswa->slug); ?>/edit"  role="button" class="btn btn-warning">Edit Data Siswa</a>
    <?php endif; ?>
    </td>
    </TR>
</tbody>
</table>
</div>



<div class="col-md-8">
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->id); ?></td> 
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->nis); ?></td>
    </tr>


    <tr>
          
      <td>Nama siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->nama_siswa); ?></td>
    </tr>

    <tr>
          
      <td>Genre</td>
      <td>:</td>
      <td><?php echo e($siswa->jk); ?></td>
    </tr>


    <tr>
          
      <td>Alamat siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->alamat); ?></td>
    </tr>

    <tr>
          
      <td>Telepon siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->telepon); ?></td>
    </tr>


    <tr>
          
      <td>Nama Ayah</td>
      <td>:</td>
      <td><?php echo e($siswa->nama_ayah); ?></td>
    </tr>
    
    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->nis); ?></td>
    </tr>


    <tr>
          
      <td>Nama Ibu</td>
      <td>:</td>
      <td><?php echo e($siswa->nama_ibu); ?></td>
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->nis); ?></td>
    </tr>


    <tr>
          
      <td>Telepon Orang Tua</td>
      <td>:</td>
      <td><?php echo e($siswa->telepon_ortu); ?></td>
    </tr>

    <tr>
          
      <td>Email Siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->email); ?></td>
    </tr>
<!--
    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td><?php echo e($siswa->username); ?></td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td><?php echo e($siswa->password); ?></td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/siswa/detsiswa.blade.php ENDPATH**/ ?>