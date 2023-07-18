



<?php $__env->startSection('judul'); ?>
Tambah Data customer
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>


<div class="container">
    <br>
    <a type="button" href="<?php echo e(url()->previous()); ?>" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form method="post" action="/customer/<?php echo e($customer->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="row">
            <div class="col-md-5">







                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" value="<?php echo e($user->username); ?>" required name="username" autofocus
                        class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username"
                        aria-describedby="username" placeholder="username customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" value="<?php echo e($user->password); ?>" required name="password" autofocus
                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password"
                        aria-describedby="password" placeholder="password customer">
                </div>

            </div>


            <div class="col-md-7">


                <div class="form-group">
                    <label for="exampleInputPassword1">Nama customer</label>
                    <input type="text" required value="<?php echo e(old('nama_customer',$customer->nama_customer)); ?>"
                        name="nama_customer" class="form-control" id="nama_customer" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <input type="text" name="id" hidden value="<?php echo e(old('id',$customer->id)); ?>" readonly required
                        class="form-control <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is->invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id" placeholder="id">
                </div>

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





                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <Br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki"
                            <?php echo e($customer->jk == 'Laki-Laki' ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="jk1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan"
                            <?php echo e($customer->jk == 'Perempuan' ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="jk2">Perempuan</label>
                    </div>

                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea type="text" required value="<?php echo e(old('alamat',$customer->alamat)); ?>" name="alamat"
                        class="form-control" id="alamat"
                        placeholder="Alamat customer"><?php echo e(old('alamat',$customer->alamat)); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="text" required value="<?php echo e(old('telepon',$customer->telepon)); ?>" name="telepon"
                        class="form-control" id="telepon" placeholder="Nama customer">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" required value="<?php echo e(old('email',$customer->email)); ?>" name="email"
                        class="form-control" id="email" placeholder="Email customer">
                </div>

 




                <button type="submit" class="btn btn-primary">Edit customer</button>
    </form>

</div>
</div>
</div>


<script>
    const nis = document.querySelector('#nis');
    const id = document.querySelector('#id');

    nis.addEventListener('change', function () {
        fetch('/customer/checkid?nis=' + nis.value)
            .then(response => response.json())
            .then(data => id.value = data.id)
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/dashboard/customer/edit.blade.php ENDPATH**/ ?>