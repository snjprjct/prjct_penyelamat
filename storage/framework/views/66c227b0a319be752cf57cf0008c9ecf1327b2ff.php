



<?php $__env->startSection('judul'); ?>
Laporan Siswa
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>


<form>
<div class="container">
<h4>Cetak Berdasarkan</h4>
<br>
<div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Berdasarkan</label>
    <div class="col-sm-10">
       <select class="custom-select mr-sm-2" name="berdasarkan" id="berdasarkan">
        <option selected>Pilih Berdasarkan...</option>
        <option value="nis">NIS siswa</option>
        <option value="nama_siswa">Nama Siswa</option>
        <option value="jk">Jenis Kelamin</option>
        <option value="alamat">Alamat Siswa</option>
        <option value="kelas_id">Kelas</option>
        <option value="tahun_masuk">Tahun Masuk</option>
        <option value="status_byr">Status Bayar</option>
        <option value="status_siswa">Status Siswa</option>
      </select>
    </div>
   </div>
   <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Berdasarkan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="isinya" id="isinya" placeholder="Tulis">
    </div>

  </div>
  </div>
    <a href="" onclick="this.href='/siswa/laporan-berdasarkan/'+ document.getElementById('berdasarkan').value + '/' + 
    document.getElementById('isinya').value" target="_blank" class="btn tbn-primary col-md-12">cetak laporan</a>
</form>

 <a href="" onclick="this.href='/siswa/laporan-all/'" target="_blank" class="btn tbn-primary col-md-12">cetak laporan Lengkap</a>
<div class="container">


</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/siswa/laporan.blade.php ENDPATH**/ ?>