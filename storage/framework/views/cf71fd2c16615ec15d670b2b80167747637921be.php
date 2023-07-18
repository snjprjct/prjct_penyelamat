

<?php $__env->startSection('container'); ?>

<div class="container">
    <br>
    <a href="/team" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

            <table class="table">

                <tbody>

                  
                    <tr>

                        <td>Nama Team</td>
                        <td>:</td>
                        <td><?php echo e($team->nama); ?></td>
                    </tr>

                    <tr>

                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo e($team->jk); ?></td>
                    </tr>

                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo e($team->tempat_lahir); ?> / <?php echo e($team->tanggal_lahir); ?></td>
                    </tr>

                    <tr>

                        <td>Telepon</td>
                        <td>:</td>
                        <td><?php echo e($team->telepon); ?></td>
                    </tr>

                    <tr>

                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo e($team->alamat); ?></td>
                    </tr>
 


                </tbody>
            </table>

        </div>


        <div class="col-md-6">

            <table class="table">

                <tbody>

                    
                    <tr>

                        <td>Posisi</td>
                        <td>:</td>
                        <td><?php echo e($team->posisi); ?></td>
                    </tr>
                     <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="<?php echo e(asset('storage/' . $team->foto)); ?>" alt="<?php echo e($team->nama); ?>" class="img-fluid mt-3"></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/dashboard/team/detteam.blade.php ENDPATH**/ ?>