



<?php $__env->startSection('judul'); ?>
Laporan Pembayaran
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>



<form>
<div class="container">
<h4>Cetak Kartu SPP</h4>
<br>
<div class="form-group "> 
   <label for="colFormLabel" class="col-sm-2 col-form-label">Siswa</label>
    <?php if($aa=="Administrator"): ?>
    <div class="col-sm-10">
       <select class="custom-select mr-sm-2" name="siswanya" id="berdasarkan">
        <option selected>Pilih Siswa...</option>
       <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                         <option  value="<?php echo e($siswa->id); ?>"  ><?php echo e($siswa->id); ?> <?php echo e($siswa->nama_siswa); ?></option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
      </select>
    </div>

    <?php else: ?> 
    <input class="col-sm-2 form-control" hidden style="display: -webkit-inline-box" id="berdasarkan" name="siswanya" value="<?php echo e(auth()->user()->siswa->id); ?>">
    <input class="form-control"  style="display: -webkit-inline-box; width:70%"   value="<?php echo e(auth()->user()->siswa->nama_siswa); ?>">
    <?php endif; ?>
   </div>
   
  </div>
    <a href="" onclick="this.href='/pembayaran/kartu-spp/'+ document.getElementById('berdasarkan').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
</form>

 <?php if($aa=="Administrator"): ?>
<form>
<div class="container">
<h4>Cetak Berdasarkan Status</h4>
<br>
<div class="form-group row"> 
   <label for="colFormLabel" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
       <select class="custom-select mr-sm-2" name="status" id="status">
        <option selected>Pilih Status...</option>
        <option value="Lunas">Lunas</option>
  <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
  <option value="Ditolak">Ditolak</option>
      </select>
    </div>
   </div>
   
  </div>
    <a href="" onclick="this.href='/pembayaran/laporan-berdasarkan/'+ document.getElementById('status').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
</form>


<div class="container">
<br>
<h4>Cetak Berdasarkan Tanggal</h4>
<Br>
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Awal</label>
    <div class="col-sm-10">
      <input type="date" name="tglawal" id="tglawal" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Akhir</label>
    <div class="col-sm-10">
      <input type="date" name="tglakhir" id="tglakhir" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="input-group mb-3">
    <a href="" onclick="this.href='/pembayaran/laporan-pertanggal/'+ document.getElementById('tglawal').value + '/' + 
    document.getElementById('tglakhir').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
  </div>

  </form>
<br>
<br>
  <a href="" onclick="this.href='/pembayaran/laporan-all/'" target="_blank" class="btn tbn-primary col-md-12">cetak Semua Laporan</a>
 

</div>
<?php endif; ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/pembayaran/laporan.blade.php ENDPATH**/ ?>