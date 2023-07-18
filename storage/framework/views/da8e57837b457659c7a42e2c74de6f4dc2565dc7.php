



<?php $__env->startSection('judul'); ?>
Data Paket
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/paket/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
            <form action="/paket">
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
                <th scope="col">Paket</th> 
                <th scope="col">Harga</th>
                <th scope="col">Waktu</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><a href="/paket/<?php echo e($posta->id); ?>"><?php echo e($posta->nama_paket); ?></a></td>
                <td>Rp. <?php echo 
            number_format($posta->harga,0,',','.');?></td>
                <td><?php echo e($posta->jumlah_jam); ?> Jam</td>
                <td>
                   
                    <a href="/paket/<?php echo e($posta->slug); ?>/edit" role="button" class="btn btn-warning">Edit</a>
                    
                    <form action="/paket/<?php echo e($posta->slug); ?>" class="d-inline" method="post">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>

                        <button onclick="return confirm('Are You Sure')" role="button"
                            class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>


    <?php else: ?>
    <div class="row">
   
     
    <br>
    <div class="col-md-8">
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Total</th> 
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>


                <?php $__currentLoopData = $postper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <tr>
                    <th scope="row"><a href="/paket/cetak_pdf"><?php echo e($loop->iteration); ?></a></th>
                    <td><a href="/paket/<?php echo e($posta['slug']); ?>">
                            <?php echo e($posta->periode->bulan); ?>

                            <?php echo e($posta->periode->tahun); ?></a></td>

                    <td> Rp. <?php echo 
            number_format($posta->total,0,',','.');?></td>
                    <input value="<?php echo e($status = $posta->status); ?>" hidden>
                  <?php if(  $status == "Lunas"): ?>
                   <td>
                        <a href="" role="button" class="btn btn-success">Lunas</a>
                        <a href="<?php echo e(url('exportlaporan')); ?>?id=<?php echo e($posta->id); ?>" role="button" class="btn btn-secondary">Cetak Kwitansi</a>

                    </td>

                  <?php else: ?>
                    <td>
                        <a href="" role="button" class="btn btn-warning">Menunggu Konfirmasi</a>

                    </td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

        <div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>


    </div>
     <div class="col-md-4 ">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Periode Nunggak</th> 
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>


                <?php $__currentLoopData = $periodecek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><a href="">
                            <?php echo e($postar->bulan); ?>

                            <?php echo e($postar->tahun); ?></a></td>

                    
                    <td>
                        <a href="/paket/create?bulan=<?php echo e($postar->bulan); ?>" role="button" class="btn btn-warning">Bayar</a>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    </div>
    <br>
    </div>
    <?php endif; ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/paket/index.blade.php ENDPATH**/ ?>