



<?php $__env->startSection('judul'); ?>
Tambah Data Pembayaran
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href=" " class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/pembayaran" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-md-5">

                <input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
                <?php if( $aa =="Administrator"): ?>
                <div class="form-group">
                    <label for="inputState">Siswa</label>
                    <select name="siswa_id" id="nis" class="form-control" data-live-search="true">
                        <option selected>Pilih Siswa</option>
                        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($siswa->id); ?>"><?php echo e($siswa->nama_siswa); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php else: ?>
                <div class="form-group">
                    <label for="inputState">Siswa</label>
                    <input value="<?php echo e($aa = auth()->user()->id); ?>" type="text" hidden name="siswa_id" id="nis"
                        class="form-control">
                    <input value="<?php echo e($aa = auth()->user()->name); ?>" type="text" required readonly class="form-control">
                </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="inputState">Periode</label>
                    <?php if( $aa =="Administrator"): ?>
                    <select name="periode_id" id="periode" class="form-control" data-live-search="true">
                        <option selected>Pilih Periode</option>
                        <?php $__currentLoopData = $periode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($periode->id); ?>"><?php echo e($periode->bulan); ?> <?php echo e($periode->tahun); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php else: ?>
                    <select name="periode_id" id="periode" class="form-control" data-live-search="true">
                        <option selected>Pilih Periode</option>
                        <?php $__currentLoopData = $periodecek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option data-periode="" value="<?php echo e($periode->id); ?>" <?php echo e($periode->bulan == request()->bulan ? "selected": ""); ?>><?php echo e($periode->bulan); ?> <?php echo e($periode->tahun); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="inputState">Ketentuan</label>
                    <select name="ketentuan" id="ketentuan" class="form-control" data-live-search="true">
                        <option selected>Pilih Ketentuan</option>
                        <?php $__currentLoopData = $ketentuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ketentuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($ketentuan->id); ?>"><?php echo e($ketentuan->keterangan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>




            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Uang SPP</label>
                    <input type="text" required value="<?php echo e(old('spp')); ?>" name="spp" class="form-control" id="spp"
                        placeholder="Nama Siswa">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Lainnya</label>
                    <input type="text" required value="<?php echo e(old('lainnya')); ?>" name="lainnya" class="form-control"
                        id="lainnya" placeholder="Uang Lainnya">
                </div>
                

                <input type="text" hidden value="<?php echo e(old('denda')); ?>" name="denda"
                    class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-incalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="denda" placeholder="denda Siswa">


                <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input type="text" required value="<?php echo e(old('total')); ?>" name="total" class="form-control" id="total"
                        placeholder="Total">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Upload Bukti Pembayaran</label>
                    <img class="img-preview img-fluid">
                    <input type="file" required value="<?php echo e(old('bukti')); ?>" name="bukti" class="form-control" id="bukti"
                        placeholder="Bukti Siswa" onchange="previewImage()">

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


                <div class="form-group">
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" name="slug" value="<?php echo e(old('slug')); ?>" readonly required
                        class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" placeholder="Slug">
                </div>
                 <?php if( $aa =="Administrator"): ?>
                <input type="text" hidden name="status" value="Lunas" readonly>
                <?php else: ?>
                <input type="text" hidden name="status" value="Menunggu Konfirmasi" readonly>
                <?php endif; ?>
                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    error nich
                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>



                <button type="submit" class="btn btn-primary">Tambah Pembayaran</button>
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
        fetch('/siswa/checkSlug?nis=' + nis.value)
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/pembayaran/create.blade.php ENDPATH**/ ?>