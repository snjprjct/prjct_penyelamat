



<?php $__env->startSection('nama'); ?>
Data team
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/team/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
            <form action="/team">
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
                <th scope="col">Team</th> 
                <th scope="col">Posisi</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><a href="/team/<?php echo e($posta->id); ?>"><?php echo e($posta->nama); ?></a></td>
                <td><?php echo e($posta->posisi); ?></td>

                <td><img src="<?php echo e(asset('storage/' . $posta->foto)); ?>" style="height:20px" alt="<?php echo e($posta->nama); ?>" class="img-fluid mt-3"></td>
                <td>
                   
                <button onclick="location.href='/team/<?php echo e($posta->id); ?>/edit'" role="button" class="new button">
                        <img src="https://i.ibb.co/FW9tsHK/attachment.png"></button>                    
                   <form action="/team/<?php echo e($posta->id); ?>" class="d-inline" method="post">
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
                    <th scope="row"><a href="/team/cetak_pdf"><?php echo e($loop->iteration); ?></a></th>
                    <td><a href="/team/<?php echo e($posta['slug']); ?>">
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
                        <a href="/team/create?bulan=<?php echo e($postar->bulan); ?>" role="button" class="btn btn-warning">Bayar</a>

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

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography (1)\photography\resources\views/dashboard/team/index.blade.php ENDPATH**/ ?>