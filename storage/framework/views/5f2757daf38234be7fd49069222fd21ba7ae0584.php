




<?php $__env->startSection('judul'); ?>
Tambah Data Kelas
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

 
<div class="container">
  <br>
    <a type="button" href=" " class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/ketentuan">
 <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Pembayaran SPP</label>
    <input type="text" id="rupiah"  value="<?php echo e(old('spp')); ?>" required name="spp" autofocus class="form-control <?php $__errorArgs = ['spp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  aria-describedby="spp" placeholder="ketentuan Spp"> 
  </div>
    
    <input type="text" id="rupiah2"  value="0" name="denda" hidden autofocus class="form-control <?php $__errorArgs = ['denda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="denda" placeholder="ketentuan denda"> 
   
  <div class="form-group">
    <label for="exampleInputPassword1">Uang Lainnya</label>
    <input type="text" id="rupiah3" required  value="<?php echo e(old('uang_lainnya')); ?>" name="uang_lainnya" class="form-control"  placeholder="Nominal Uang Lainnya">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan Pembayaran</label>
    <textarea type="text" required  name="keterangan" class="form-control" placeholder="Keterangan Pembayaran"><?php echo e(old('keterangan')); ?></textarea>
  </div>

  
  
   <button type="submit" class="btn btn-primary">Tambah ketentuan</button>
</form>

</div>

<script>
 
 var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
}


</script>


<script>
 
 var rupiah2 = document.getElementById("rupiah2");
rupiah2.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatrupiah2() untuk mengubah angka yang di ketik menjadi format angka
  rupiah2.value = formatrupiah2(this.value, "Rp. ");
});

/* Fungsi formatrupiah2 */
function formatrupiah2(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah2 = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah2 += separator + ribuan.join(".");
  }

  rupiah2 = split[1] != undefined ? rupiah2 + "," + split[1] : rupiah2;
  return prefix == undefined ? rupiah2 : rupiah2 ? "" + rupiah2 : "";
}


</script>



<script>
 
 var rupiah3 = document.getElementById("rupiah3");
rupiah3.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatrupiah3() untuk mengubah angka yang di ketik menjadi format angka
  rupiah3.value = formatrupiah3(this.value, "Rp. ");
});

/* Fungsi formatrupiah3 */
function formatrupiah3(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah3 = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah3 += separator + ribuan.join(".");
  }

  rupiah3 = split[1] != undefined ? rupiah3 + "," + split[1] : rupiah3;
  return prefix == undefined ? rupiah3 : rupiah3 ? "" + rupiah3 : "";
}


</script>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/ketentuan/create.blade.php ENDPATH**/ ?>