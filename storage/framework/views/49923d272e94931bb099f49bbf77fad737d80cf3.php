



<?php $__env->startSection('judul'); ?>
Konfirmasi Data rekening
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href="<?php echo e(url()->previous()); ?>" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="/rekening/<?php echo e($rekening->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="row">
         
            <div class="col-md-12">


                <div class="form-group">
                    <label for="exampleInputPassword1">Bank</label>
                    <input type="text" required value="<?php echo e(old('bank',$rekening->bank)); ?>" name="bank" class="form-control"
                        id="bank" placeholder="Nama Bank">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Atas Nama</label>
                    <input type="text" required value="<?php echo e(old('atas_nama',$rekening->atas_nama)); ?>" name="atas_nama"
                        class="form-control" id="atas_nama" placeholder="Atas Nama">
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Rekening</label>

                    <input  type="text" required value="<?php echo e(old('rekening',$rekening->rekening)); ?>" name="rekening"
                        class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-incalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="rekening" placeholder="Nomor Rekening">
                
                </div> 
 

                <div class="form-group">
                    <label for="exampleInputPassword1">Foto Bank</label>
                   <input type="hidden" name="oldImage" value="<?php echo e($rekening->foto_bank); ?>">
                    <?php if($rekening->foto_bank): ?>
                    <img src="<?php echo e(asset('storage/' . $rekening->foto_bank)); ?>" class="img-preview img-fluid">
                    
                    <?php else: ?>
                    <img class="img-preview img-fluid">
                    <?php endif; ?>
                    <img class="img-preview img-fluid">
                    <input type="file"  value="<?php echo e(old('foto_bank')); ?>" name="foto_bank" class="form-control" id="foto_bank"
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


                
                    <input type="text" hidden name="id" value="<?php echo e(old('id',$rekening->id)); ?>" readonly required
                        class="form-control <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id" placeholder="id">
                 
               

                <?php $__errorArgs = ['id'];
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


                 <button type="submit" class="btn btn-primary">Edit Bank</button>
                
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

    const id = document.querySelector('#id');
    const spp = document.querySelector('#spp');
    const atas_nama = document.querySelector('#atas_nama');
    const rekening = document.querySelector('#rekening');

    function changeid() {
        id.value = `${nis.value}-${periode.value}-${ketentuan.value}`;
    }

    nis.addEventListener('change', function () {
        fetch('/siswa/checkid?nis=' + nis.value)
            .then(response => response.json())
            .then(data => id.value = data.id)
    });

    nis.addEventListener('change', function () {
        changeid();
    });


    periode.addEventListener('change', function () {
        changeid();
    });


    ketentuan.addEventListener('change', function () {
        changeid();

        fetch('/ketentuan/get-ketentuan/' + ketentuan.value)
            .then(response => response.json())
            .then(data => {
                spp.value = data.spp.replace(/\./, '');
                atas_nama.value = data.uang_atas_nama.replace(/\./, '');
                rekening.value = data.rekening.replace(/\./, '');
                total.value = parseInt(spp.value) + parseInt(atas_nama.value) + parseInt(rekening.value);
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/rekening/edit.blade.php ENDPATH**/ ?>