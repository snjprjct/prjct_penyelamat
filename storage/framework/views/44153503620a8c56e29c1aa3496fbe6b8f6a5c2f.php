




<?php $__env->startSection('judul'); ?>
Ketentuan Pembayaran
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<div class="container">
      <div class="row">
        <div class="col-md-8">
          <!-- <a type="button" href="/ketentuan/create" class="btn btn-primary">Tambah</a>  -->
        </div>  
        <div class="col-md-4">
          <form action="/ketentuan">
            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" 
              value="<?php echo e(request('search')); ?>"
              placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary" >Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-8">
    <form action="/ketentuan">
    </form>
  </div>
  </div>

   <?php if(session()->has('success')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

      </div>
  <?php endif; ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th> 
      <th scope="col">SPP</th> 
      <th scope="col">Uang lainnya</th>
      <th scope="col">Catatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
 
      <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
    <tr>
      <th scope="row"><?php echo e($loop->iteration); ?></th> 
      <td>Rp. <?php echo e($posta['spp']); ?></td> 
      <td>Rp. <?php echo e($posta['uang_lainnya']); ?></td>
      <td><?php echo e($posta['keterangan']); ?></td>
      <td>
          <a href="/ketentuan/<?php echo e($posta['id']); ?>/edit" role="button" class="btn btn-warning">Edit</a>
         
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>




<?php else: ?>


<style>
    @import  url("https://fonts.googleapis.com/css?family=Raleway");
      * {
        box-sizing: border-box;
        font-family: "Raleway", "Arial";
      }

      .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
      }

      @-webkit-keyframes slideInLeft {
        from {
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
          visibility: visible;
        }
        to {
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      }
      @keyframes  slideInLeft {
        from {
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
          visibility: visible;
        }
        to {
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      }
      .slideInLeft {
        -webkit-animation-name: slideInLeft;
        animation-name: slideInLeft;
      }

      @-webkit-keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      @keyframes  fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
      }

      .card {
        margin: 0 auto;
        width: 650px;
        height: 350px;
        border: 1px solid #888888;
        margin: auto auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .card .top {
        padding: 1px;
        color: white;
        background-color: #3498db;
        width: 100%;
        height: 50%;
        font-size: 2em;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
      }
      .card .top .img {
        z-index: 100;
      }
      .card .bottom {
        width: 100%;
        height: 50%;
        padding: 10px;
        /*background-color: $blue;*/
      }
      .card .bottom button {
        width: 120px;
        height: 50px;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        outline: none;
        text-overflow: ellipsis;
      }
      .card .bottom .blue {
        background-color: #3498db;
        color: white;
      }
      .card .bottom .blue:hover {
        background-color: #196090;
      }
      .card .bottom .happy {
        background-color: #2ecc71;
        color: white;
      }
      .card .bottom .happy:hover {
        background-color: #1b7943;
      }
      .card .bottom .worry {
        background-color: #9b59b6;
        color: white;
      }
      .card .bottom .worry:hover {
        background-color: #623475;
      }
      .card .bottom .none {
        background-color: #ecf0f1;
      }
      .card .bottom .none:hover {
        background-color: #b1c2c6;
      }
</style>

<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card">
  <div class="top">
    <div class="text animated slideInLeft">
      <span>Total SPP</span><br>
      <span>Rp. <?php echo e($posta['spp'] + $posta['uang_lainnya']); ?>.000</span>
    </div>
    <div class="img animated fadeIn">
      <img src="http://2.1m.yt/E86DSfk.png" alt="mylogo" width="140px" />
    </div>
  </div>

  <div class="bottom" style="padding-left: 20px;">
    <p>Ketentuan</p>
    <div class="row" >
      <div class="col-md-6">
        Uang SPP Tunggal
      </div>
       <div class="col-md-6">
        : Rp. <?php echo e($posta['spp']); ?>

      </div>
       <div class="col-md-6">
        Uang Komite
      </div>
       <div class="col-md-6">
        : Rp. <?php echo e($posta['spp']); ?>

      </div>
    </div>
   <br>
    <p><?php echo e($posta['keterangan']); ?></p>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\spp\resources\views/ketentuan/index.blade.php ENDPATH**/ ?>