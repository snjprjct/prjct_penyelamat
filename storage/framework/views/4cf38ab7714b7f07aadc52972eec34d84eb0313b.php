



<?php $__env->startSection('judul'); ?>
Data Galery
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/galery/create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="col-md-4">
            <form action="/galery">
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
    <?php elseif(session()->has('update')): ?>
    <div class="alert alert-warning" role="alert">
        <?php echo e(session('warning')); ?>

    </div>
    <?php elseif(session()->has('deleted')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(session('deleted')); ?>

    </div>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Galery</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><a href="/galery/<?php echo e($posta->id); ?>"><?php echo e($posta->judul); ?></a></td>
                <td><?php echo e($posta->kegiatan); ?></td>
                <td><?php echo e($posta->keterangan); ?></td>
                <td>

                    <a href="/galery/<?php echo e($posta->id); ?>/edit" role="button" class="new button">
                        <img src="https://i.ibb.co/FW9tsHK/attachment.png"></a>
                    <form action="/galery/<?php echo e($posta->id); ?>" class="d-inline" method="post">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>

                        <button onclick="return confirm('Are You Sure')" role="button" class="new button">
                            <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" />
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>


   
    <?php endif; ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography (1)\photography\resources\views/dashboard/galery/index.blade.php ENDPATH**/ ?>