 



<?php $__env->startSection('judul'); ?>
Tambah Data rekening
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href=" " class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/rekening" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            


            <div class="col-md-12">


                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Bank</label>
                    <input type="text" required value="<?php echo e(old('bank')); ?>" name="bank" class="form-control" id="bank"
                        placeholder="Nama Bank">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemilik</label>
                    <input type="text" required value="<?php echo e(old('atas_nama')); ?>" name="atas_nama" class="form-control"
                        id="atas_nama" placeholder="Atas Nama">
                </div>
                 
                <div class="form-group">
                    <label for="exampleInputPassword1">Rekening</label>
                    <input type="text" required value="<?php echo e(old('rekening')); ?>" name="rekening" class="form-control" id="rekening"
                        placeholder="Rekening">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Foto Bank</label>
                    <img class="img-preview img-fluid">
                    <input type="file" required value="<?php echo e(old('foto_bank')); ?>" name="foto_bank" class="form-control" id="foto_bank"
                        placeholder="Foto Bank" onchange="previewImage()">

                    <?php $__errorArgs = ['foto_bank'];
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


                 



                <button type="submit" class="btn btn-primary">Tambah rekening</button>
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
    const test = "bababalalbdksfgjsfg";
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

                if(new Date() > new Date(periode.selectedOptions[0].label)) {

                    denda.value = data.denda.replace(/\./, '');
                } else {
                    denda.value = 0;
                }

                total.value = parseInt(spp.value) + parseInt(lainnya.value) + parseInt(denda.value);
            });
    });

    function previewImage() {
        const foto_bank = document.querySelector('#foto_bank');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto_bank.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahlan Nugraha\Downloads\photography\photography\resources\views/dashboard/rekening/create.blade.php ENDPATH**/ ?>