



<?php $__env->startSection('judul'); ?>
Data Booking
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/booking/create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="col-md-4">
            <form action="/booking">
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
                <th scope="col">Nama customer</th>
                <th scope="col">Nama Paket</th>
                <th scope="col">Waktu</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>

                <td><?php echo e($posta->customer->nama_customer); ?></td>
                <td><?php echo e($posta->paket->nama_paket); ?></td>
                <td><?php echo e($posta->tgl_booking); ?> / <?php echo e($posta->jam_booking); ?></td>
                <td>Rp. <?php echo 
            number_format($posta->total,0,',','.');?></td>
                <td><?php echo e($posta->status); ?></td>
                <td>
                    <?php if($posta->status=="Menunggu Konfirmasi"): ?>
                    <a href="/booking/<?php echo e($posta->id); ?>/edit" role="button" class="btn btn-warning">Konfirmasi</a>
                    <?php else: ?>
                    <a href="/booking/<?php echo e($posta->id); ?>/edit" role="button" class="btn btn-warning">Edit</a>
                    <?php endif; ?>
                    <form action="/booking/<?php echo e($posta->id); ?>" class="d-inline" method="post">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>

                        <button onclick="return confirm('Are You Sure')" role="button" class="new button">
                            <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" /></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>


    <?php else: ?>
   
    <?php endif; ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography (1)\photography\resources\views/dashboard/booking/index.blade.php ENDPATH**/ ?>