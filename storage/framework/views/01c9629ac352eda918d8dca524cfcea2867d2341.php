

<?php $__env->startSection('container'); ?>

<div class="container">
    <br>
    <a href="/galery" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

            <table class="table">

                <tbody>

                  
                    <tr>

                        <td>Nama Menu</td>
                        <td>:</td>
                        <td><?php echo e($galery->judul); ?></td>
                    </tr>

                    <tr>

                        <td>kegiatan</td>
                        <td>:</td>
                        <td><?php echo e($galery->kegiatan); ?></td>
                    </tr>

                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?php echo e($galery->keterangan); ?></td>
                    </tr>
 


                </tbody>
            </table>

        </div>


        <div class="col-md-6">

            <table class="table">

                <tbody>

                    

                     <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="<?php echo e(asset('storage/' . $galery->foto)); ?>" alt="<?php echo e($galery->judul); ?>" class="img-fluid mt-3"></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography (1)\photography\resources\views/dashboard/galery/detgalery.blade.php ENDPATH**/ ?>