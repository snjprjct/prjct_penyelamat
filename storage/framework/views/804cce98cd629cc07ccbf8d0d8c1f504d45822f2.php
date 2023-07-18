



<?php $__env->startSection('judul'); ?>
Konfirmasi Data booking
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href="/booking" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/booking/<?php echo e($booking->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="row">
            <div class="col-md-5">

                <div class="form-group">
                    <label for="inputState">Customer</label> 
                    <input class="form-control" type="text" value="<?php echo e($booking->customer->nama_customer); ?>" readonly> 
                    <input class="form-control" hidden name="customer_id" type="text" value="<?php echo e($booking->customer_id); ?>" readonly> 
                  
                </div>


                <div class="form-group">
                    <label for="inputState">Paket</label> 
                    <input class="form-control" type="text" value="<?php echo e($booking->paket->nama_paket); ?>" readonly> 
                    <input class="form-control" hidden name="paket_id" type="text" value="<?php echo e($booking->paket_id); ?>" readonly> 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Tanggal Booking</label>  
                    <input class="form-control" name="tgl_booking" type="date" value="<?php echo e($booking->tgl_booking); ?>" > 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Jam Mulai</label>  
                    <input class="form-control" name="jam_booking" type="time" value="<?php echo e($booking->jam_booking); ?>" > 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Jam Selesai</label>  
                    <input class="form-control" type="time" name="jam_selesai" value="<?php echo e($booking->jam_selesai); ?>" > 
                  
                </div>


          
                 <input type="text" value="<?php echo e($stat=$booking->status); ?>" hidden>
                <br>
                <?php if($stat=="Menunggu Konfirmasi"): ?>
                <button type="submit" name="status"  style="width:100%" class="btn btn-warning">Konfirmasi booking</button>
                <br>
               
                <?php else: ?>
                <button type="submit" class="btn btn-primary">Update booking</button>
                <?php endif; ?>


            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="inputState">Total Pembayaran</label>  
                    <input class="form-control" type="text" value="Rp. <?php echo 
            number_format($harga = $booking->total,0,',','.');?>" readonly> 
                  
                </div>

                <div class="form-group">
                    <label for="inputState">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="<?php echo e($booking->status); ?>" selected>--<?php echo e($booking->status); ?>--</option>
                        
                        <option value="Batal">Batal</option>
                        <option value="Konfirmasi">Konfirmasi</option>
                        <option value="Ditolak">Tolak</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Upload Bukti booking</label>
                   <input type="hidden" name="oldImage" value="<?php echo e($booking->bukti); ?>">
                    <?php if($booking->bukti): ?>
                    <a href="<?php echo e(asset('storage/' . $booking->bukti)); ?>" target="_blank">    <img src="<?php echo e(asset('storage/' . $booking->bukti)); ?>" class="img-preview img-fluid"> </a>
                   <?php echo e($booking->bukti); ?>

                    <?php else: ?>
                    <img class="img-preview img-fluid">
                    <?php endif; ?>
                    <img class="img-preview img-fluid">
                    <input type="file"  value="<?php echo e(old('bukti')); ?>" name="bukti" class="form-control" id="bukti"
                        placeholder="Bukti customer" onchange="previewImage()">
                    

                    <?php $__errorArgs = ['bukti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

               
               <?php $pesannya = "Halo, Dengan Studio Delapan... Ada yang ingin kami tanyakan seputar Pemesanan Studio Foto Anda :)" ; 

                $telepon 	= $booking->customer->telepon; 
                    // $nomor= "89649341999";
                    //$nomor= substr($telepon,1);
                    // die($nomor);
                

                    ?>
	            <a class="btn btn-success" href="https://wa.me/62<?php echo e($telepon); ?>?text=<?php echo e($pesannya); ?>" target="_blank">Hubungi Via WhatsApp</a></td>

               
                


                
    </form>

</div>
</div>
</div>


<script>
    var e = document.getElementById("nis");

    function onChange() {
        var value = e.value;
        var text = e.options[e.selectedIndex].text;
        console.log(value, text);
    }
    e.onchange = onChange;
    onChange();

</script>



<script>
    const nis = document.querySelector('#nis');
    const periode = document.querySelector('#periode');
    const paket_id = document.querySelector('#paket_id');

    const slug = document.querySelector('#slug');
    const harga = document.querySelector('#harga');
    const lainnya = document.querySelector('#lainnya');
    const denda = document.querySelector('#denda');

    function changeSlug() {
        slug.value = `${nis.value}-${periode.value}-${paket_id.value}`;
    }

    nis.addEventListener('change', function () {
        fetch('/customer/checkSlug?nis=' + nis.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    nis.addEventListener('change', function () {
        changeSlug();
    });


    periode.addEventListener('change', function () {
        changeSlug();
    });


    paket_id.addEventListener('change', function () {
        changeSlug();

        fetch('/paket_id/get-paket_id/' + paket_id.value)
            .then(response => response.json())
            .then(data => {
                harga.value = data.harga.replace(/\./, '');
                lainnya.value = data.uang_lainnya.replace(/\./, '');
                denda.value = data.denda.replace(/\./, '');
                total.value = parseInt(harga.value) + parseInt(lainnya.value) + parseInt(denda.value);
            });



    });


    function previewImage() {
        const bukti = document.querySelector('#bukti');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(bukti.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/dashboard/booking/edit.blade.php ENDPATH**/ ?>