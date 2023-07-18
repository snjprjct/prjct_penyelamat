



<?php $__env->startSection('judul'); ?>
Tambah Data Pembayaran
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href=" " class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/paket" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-md-5">

                <input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
                <div class="form-group">
                    <label for="inputState">Nama Paket</label>
                    <input name="nama_paket" placeholder="Nama Paket" id="nama_paket" class="form-control" >

                </div>

                <div class="form-group">
                    <label for="inputState">Harga</label>

                    <input name="harga" id="harga" placeholder="Harga" class="form-control">

                </div>

                <div class="form-group">
                    <label for="inputState">Jumlah Jam</label>

                    <input name="jumlah_jam" id="jumlah_jam" class="form-control" placeholder="Jumlah Jam">

                </div>







                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea type="textarea" required value="<?php echo e(old('keterangan')); ?>" name="keterangan"
                        class="form-control" id="keterangan" placeholder="Total"></textarea>
                </div>

                


                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback">
                    error nich
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>
            

        <div class="col-md-5">

        <div class="form-group">
                    <label for="exampleInputPassword1">Foto Paket</label>
                    <img class="img-preview img-fluid">
                    <input type="file" required value="<?php echo e(old('foto')); ?>" name="foto" class="form-control" id="foto"
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
        <button type="submit" class="btn btn-primary">Tambah Paket</button>

        </div>

            
    </form>

</div>
</div>
</div>


<script>
    var e = document.getElementById("nama_paket");

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
    const nama_paket = document.querySelector('#nama_paket');
    const slug = document.querySelector('#slug');



    function changeSlug() {
        slug.value = `${nama_paket.value}-${periode.value}-${ketentuan.value}`;
    }

    nama_paket.addEventListener('change', function () {
        fetch('/customer/checkSlug?nama_paket=' + nama_paket.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    nama_paket.addEventListener('change', function () {
        changeSlug();
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/paket/create.blade.php ENDPATH**/ ?>