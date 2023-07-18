



<?php $__env->startSection('judul'); ?>

<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
 
<div class="container" style="margin-top:10%; margin-bottom:5%">
     
   <CENTER> <h3>RIWAYAT PEMESANAN</h3></CENTER>
   <bR>
   <bR>

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
                <th scope="col">Nama Paket</th>
                <th scope="col">Tanggal Foto</th>
                <th scope="col">Jam Foto</th>
                <th scope="col">Total</th>
                <th scope="col">Catatan</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>


            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e($posta->paket->nama_paket); ?></td>
                <td><?php echo e($posta->tgl_booking); ?> </td>
                <td><?php echo e($posta->jam_booking); ?> - <?php echo e($posta->jam_selesai); ?></td>
                <td>Rp. <?php echo 
            number_format($posta->total,0,',','.');?></td>
                <td><?php echo e($posta->catatan); ?></td>
                <td>

                    <a type="button" class="btn" 

                    style="background:
                    <?php if($posta->status=='Menunggu Konfirmasi'): ?> Orange <?php elseif($posta->status=='Konfirmasi'): ?>green <?php else: ?> red <?php endif; ?>
                    " ><?php echo e($posta->status); ?></a>
                  
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

        
    </table>
</div>
    
   
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahlan Nugraha\Downloads\photography\photography\resources\views/riwayat.blade.php ENDPATH**/ ?>