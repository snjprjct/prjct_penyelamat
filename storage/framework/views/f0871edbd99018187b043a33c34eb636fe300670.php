



<?php $__env->startSection('judul'); ?>
Konfirmasi Data Pembayaran
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href=" " class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/pembayaran/<?php echo e($pembayaran->slug); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="row">
            <div class="col-md-5">

                <div class="form-group">
                    <label for="inputState">Siswa</label>
                    <?php echo e(old('siswa_id',$pembayaran->siswa_id)); ?>

                    <select readonly name="siswa_id" id="nis" class="form-control" data-live-search="true">

                        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                         <option  value="<?php echo e($siswa->id); ?>" <?php echo e($pembayaran->siswa_id == $siswa->id ? 'selected' : ''); ?>><?php echo e($siswa->nama_siswa); ?></option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="inputState">Periode</label>
                    <select name="periode_id" readonly id="periode" class="form-control" data-live-search="true">
                        <?php $__currentLoopData = $periode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($periode->id); ?>" <?php echo e($pembayaran->periode_id == $periode->id ? 'selected' : ''); ?>><?php echo e($periode->bulan); ?> <?php echo e($periode->tahun); ?></option>
                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputState">Ketentuan</label>
                    <select readonly name="ketentuan" id="ketentuan" class="form-control" data-live-search="true">
                         <?php $__currentLoopData = $ketentuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ketentuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($ketentuan->id); ?>"><?php echo e($ketentuan->keterangan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                 <input type="text" value="<?php echo e($stat=$pembayaran->status); ?>" readonly>
                <br>
                <?php if($stat=="Menunggu Konfirmasi"): ?>
                <button type="submit" name="status" value="Lunas" class="btn btn-primary">Konfirmasi Pembayaran</button>
                <br>
                <br>
                <button type="submit" name="status" value="Ditolak" class="btn btn-primary">Tolak Pembayaran</button>
                <?php else: ?>
                <button type="submit" name="status" class="btn btn-primary">Update Pembayaran</button>
                <?php endif; ?>


            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Uang SPP</label>
                    <input type="text" required value="<?php echo e(old('spp',$pembayaran->spp)); ?>" name="spp" class="form-control"
                        id="spp" placeholder="Nama Siswa">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Lainnya</label>
                    <input type="text" required value="<?php echo e(old('lainnya',$pembayaran->lainnya)); ?>" name="lainnya"
                        class="form-control" id="lainnya" placeholder="Uang Lainnya">
                </div>

                    <input hidden type="text" required value="<?php echo e(old('denda',$pembayaran->denda)); ?>" name="denda"
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
                    <input type="text" required value="<?php echo e(old('total',$pembayaran->total)); ?>" name="total"
                        class="form-control" id="total" placeholder="Total">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Upload Bukti Pembayaran</label>
                   <input type="hidden" name="oldImage" value="<?php echo e($pembayaran->bukti); ?>">
                    <?php if($pembayaran->bukti): ?>
                    <img src="<?php echo e(asset('storage/' . $pembayaran->bukti)); ?>" class="img-preview img-fluid">
                   <?php echo e($pembayaran->bukti); ?>

                    <?php else: ?>
                    <img class="img-preview img-fluid">
                    <?php endif; ?>
                    <img class="img-preview img-fluid">
                    <input type="file"  value="<?php echo e(old('bukti')); ?>" name="bukti" class="form-control" id="bukti"
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
                    <input type="text" name="slug" value="<?php echo e(old('slug',$pembayaran->slug)); ?>" readonly required
                        class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" placeholder="Slug">
                </div>

               

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
                denda.value = data.denda.replace(/\./, '');
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/pembayaran/edit.blade.php ENDPATH**/ ?>