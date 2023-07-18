



<?php $__env->startSection('judul'); ?>
Konfirmasi Data galery
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href="/galery" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/galery/<?php echo e($galery->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="row">
            <div class="col-md-5">
 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Nama galery</label>
                    <input type="text" required value="<?php echo e(old('judul',$galery->judul)); ?>" name="judul" class="form-control"
                        id="spp" placeholder="Nama galery">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">kegiatan</label>
                    <input type="text" required value="<?php echo e(old('kegiatan',$galery->kegiatan)); ?>" name="kegiatan" class="form-control"
                        id="spp" placeholder="kegiatan galery">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea type="text" required name="keterangan" class="form-control"  placeholder="Keterangan galery"><?php echo e(old('keterangan',$galery->keterangan)); ?></textarea>
                </div>
               

            </div>


            <div class="col-md-7">


              
                <div class="form-group">
                    <label for="exampleInputPassword1">Upload foto galery</label>
                   <input type="hidden" name="oldImage" value="<?php echo e($galery->foto); ?>">
                    <?php if($galery->foto): ?>
                    <img src="<?php echo e(asset('storage/' . $galery->foto)); ?>" class="img-preview img-fluid">
                   <?php echo e($galery->foto); ?>

                    <?php else: ?>
                    <img class="img-preview img-fluid">
                    <?php endif; ?>
                    <img class="img-preview img-fluid">
                    <input type="file"  value="<?php echo e(old('foto')); ?>" name="foto" class="form-control" id="foto"
                        placeholder="foto customer" onchange="previewImage()">

                    <?php $__errorArgs = ['foto'];
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

                <button type="submit"  class="btn btn-primary">Update Pembayaran</button>


                
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
    const ketentuan = document.querySelector('#ketentuan');

    const slug = document.querySelector('#slug');
    const spp = document.querySelector('#spp');
    const lainnya = document.querySelector('#lainnya');
    const denda = document.querySelector('#denda');

    function changeSlug() {
        slug.value = `${nis.value}-${periode.value}-${ketentuan.value}`;
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


    ketentuan.addEventListener('change', function () {
        changeSlug();

        fetch('/ketentuan/get-ketentuan/' + ketentuan.value)
            .then(response => response.json())
            .then(data => {
                spp.value = data.spp.replace(/\./, '');
                lainnya.value = data.uang_lainnya.replace(/\./, '');
                denda.value = data.denda.replace(/\./, '');
                total.value = parseInt(spp.value) + parseInt(lainnya.value) + parseInt(denda.value);
            });



    });


    function previewImage() {
        const foto = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/dashboard/galery/edit.blade.php ENDPATH**/ ?>