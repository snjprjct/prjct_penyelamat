 



<?php $__env->startSection('judul'); ?>
Data User
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<div class="container" style="padding: 20px; margin:0">

    <div class="row" style="display:flex; margin-bottom:5px">
        <div class="col-md-8">
            <a type="button" href="/user/create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="col-md-4">
            <form action="/user">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" value="<?php echo e(request('search')); ?>"
                        placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

    </div>
    <?php elseif(session()->has('deleted')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(session('deleted')); ?>

    </div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Level</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody style="overflow:auto;">
            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td><?php echo e($posta->name); ?></td>
                <td><?php echo e($posta->level); ?></td>
                <td><?php echo e($posta->email); ?></td>
                <td><?php echo e($posta->username); ?></td>

                <td>
                    <a href="/user/<?php echo e($posta->id); ?>/edit" role="button" class="new button">
                        <img src="https://i.ibb.co/FW9tsHK/attachment.png"></a>
                    <form action="/user/<?php echo e($posta->id); ?>" class="d-inline" method="post">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>

                        <button onclick="return confirm('Are You Sure')" role="button"
                            class="new button">
                            <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" />
                        </button>
                    </form>
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="col-md-4"></div>

    <div class="col-md-4" style="display:-webkit-inline-box">
    
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/dashboard/user/index.blade.php ENDPATH**/ ?>