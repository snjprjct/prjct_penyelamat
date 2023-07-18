



<?php $__env->startSection('judul'); ?>
Tambah Data customer
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href="/customer" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/customer">
        <?php echo csrf_field(); ?>

        <div class="row">

            <div class="col-md-5">

                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" required value="<?php echo e(old('username')); ?>" name="username" class="form-control"
                        id="username" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required value="<?php echo e(old('password')); ?>" name="password" class="form-control"
                        id="password" placeholder="Password">
                </div>

            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Nama customer</label>
                    <input type="text" required value="<?php echo e(old('nama_customer')); ?>" name="nama_customer"
                        class="form-control" id="nama_customer" placeholder="Nama customer">
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
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <Br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki">
                        <label class="form-check-label" for="jk1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan">
                        <label class="form-check-label" for="jk2">Perempuan</label>
                    </div>

                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea type="text" required value="<?php echo e(old('alamat')); ?>" name="alamat" class="form-control"
                        id="alamat" placeholder="Alamat customer"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="text" required value="<?php echo e(old('telepon')); ?>" name="telepon" class="form-control"
                        id="telepon" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" required value="<?php echo e(old('email')); ?>" name="email" class="form-control" id="email"
                        placeholder="Email customer">
                </div>



                <button type="submit" class="btn btn-primary">Tambah customer</button>
    </form>

</div>
</div>
</div>


<script>
    const nis = document.querySelector('#nama_customer');
    const slug = document.querySelector('#slug');

    nis.addEventListener('change', function () {
        fetch('/customer/checkSlug?nama_customer=' + nis.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/dashboard/customer/create.blade.php ENDPATH**/ ?>