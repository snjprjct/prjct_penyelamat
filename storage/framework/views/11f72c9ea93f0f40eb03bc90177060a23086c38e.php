 

<?php $__env->startSection('container'); ?>

<div class="container">
    <br>
    <a href="/paket" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>Nama Paket</td>
                        <td>:</td>
                        <td><?php echo e($paket->nama_paket); ?></td> 
                    </tr>
                    
                    <tr>

                        <td>Harga</td>
                        <td>:</td>
                        <td>Rp. <?php echo 
            number_format($paket->harga,0,',','.');?></td>
                    </tr>

                    <tr>

                        <td>Jumlah Jam</td>
                        <td>:</td>
                        <td><?php echo e($paket->jumlah_jam); ?> Jam</td>
                    </tr>

                 


                </tbody>
            </table>

        </div>


        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?php echo e($paket->keterangan); ?></td>
                    </tr>

                  

                     <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="<?php echo e(asset('storage/' . $paket->foto)); ?>"class="img-fluid mt-3"></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/dashboard/paket/detpaket.blade.php ENDPATH**/ ?>