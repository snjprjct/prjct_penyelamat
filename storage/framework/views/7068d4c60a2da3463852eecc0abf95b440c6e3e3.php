

<?php $__env->startSection('container'); ?>

<div class="container">
    <br>
    <a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>NIS Siswa</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->slug); ?></td>
                        <td><?php echo e($pembayaran->siswa->nis); ?></td>
                    </tr>
                    
                    <tr>

                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->siswa->nama_siswa); ?></td>
                    </tr>

                    <tr>

                        <td>Kelas</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->siswa->kelas->nama_kelas); ?></td>
                    </tr>

                    <tr>
                        <td>Tahun Masuk</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->siswa->tahun_masuk); ?></td>
                    </tr>

                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->siswa->status_byr); ?></td>
                    </tr>

                    <tr>
                        <td>Status Aktif</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->siswa->status_siswa); ?></td>
                    </tr>

                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td><b><?php echo e($pembayaran->status); ?></b></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>


        <div class="col-md-6">

            <table class="table">

                <tbody>

                    <tr>

                        <td>Periode</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->periode->bulan); ?> <?php echo e($pembayaran->periode->tahun); ?></td>
                    </tr>

                    <tr>

                        <td>SPP</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->spp); ?></td>
                    </tr>

                    <tr>
                        <td>Denda</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->denda); ?></td>
                    </tr>

                    <tr>
                        <td>Uang Lainnya/td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->lainnya); ?></td>
                    </tr>

                    <tr>
                        <td>Total Pembayaran</td>
                        <td>:</td>
                        <td><?php echo e($pembayaran->total); ?></td>
                    </tr>

                     <tr>
                        <td>Bukti</td>
                        <td>:</td>
                        <td><img src="<?php echo e(asset('storage/' . $pembayaran->bukti)); ?>" alt="<?php echo e($pembayaran->slug); ?>" class="img-fluid mt-3"></td>
                    </tr>

                    <tr>


                </tbody>
            </table>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/pembayaran/detpembayaran.blade.php ENDPATH**/ ?>