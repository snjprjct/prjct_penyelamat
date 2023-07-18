 



<?php $__env->startSection('judul'); ?>
Data rekening
<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a type="button" href="/rekening/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
            <form action="/rekening">
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
                <th scope="col">Bank</th>
                <th scope="col">Atas Nama</th>
                <th scope="col">Rekening</th> 
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr>
                <th scope="row">1</th>
                <td><?php echo e($posta->bank); ?></td>
                <td><?php echo e($posta->atas_nama); ?></td> 
                <td><?php echo e($posta->rekening); ?></td>
                <td>
                    
                    <a href="/rekening/<?php echo e($posta->id); ?>/edit" role="button" class="new button">
                      <img src="https://i.ibb.co/FW9tsHK/attachment.png"></a>
                    
                    <form action="/rekening/<?php echo e($posta->id); ?>" class="d-inline" method="post">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>

                        <button onclick="return confirm('Are You Sure')" role="button"
                            class="new button">
    <img src="https://i.ibb.co/Lv6TqBG/waste-bin.png" /></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <div class="d-flex center-content-end"><?php echo e($post->links()); ?> </div>


    <?php else: ?>
   
<style>
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 200;
      src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 300;
      src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7g.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 600;
      src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlxdr.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdr.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 900;
      src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xKydSBYKcSV-LCoeQqfX1RYOo3iu4nwlxdr.ttf) format('truetype');
    }
    body {
      background: #dce1df;
      color: #4f585e;
      font-family: 'Source Sans Pro', sans-serif;
      text-rendering: optimizeLegibility;
    }
    a.btn {
      background: #0096a0;
      border-radius: 4px;
      box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.25);
      color: #ffffff;
      display: inline-block;
      padding: 6px 30px 8px;
      position: relative;
      text-decoration: none;
      transition: all 0.1s 0s ease-out;
    }
    .no-touch a.btn:hover {
      background: #00a2ad;
      box-shadow: 0px 8px 2px 0 rgba(0, 0, 0, 0.075);
      transform: translateY(-2px);
      transition: all 0.25s 0s ease-out;
    }
    .no-touch a.btn:active,
    a.btn:active {
      background: #008a93;
      box-shadow: 0 1px 0px 0 rgba(255, 255, 255, 0.25);
      transform: translate3d(0, 1px, 0);
      transition: all 0.025s 0s ease-out;
    }
    div.cards {
      margin: 80px auto;
      max-width: 960px;
      text-align: center;
    }
    div.card {
      background: #ffffff;
      display: inline-block;
      margin: 8px;
      max-width: 300px;
      perspective: 1000;
      position: relative;
      text-align: left;
      transition: all 0.3s 0s ease-in;
      width: 300px;
      z-index: 1;
    }
    div.card img {
      max-width: 300px;
    }
    div.card .card__image-holder {
      background: rgba(0, 0, 0, 0.1);
      height: 0;
      padding-bottom: 33%;
    }
    div.card div.card-title {
      background: #ffffff;
      padding: 6px 15px 10px;
      position: relative;
      z-index: 0;
    }
    div.card div.card-title a.toggle-info {
      border-radius: 32px;
      height: 32px;
      padding: 0;
      position: absolute;
      right: 15px;
      top: 10px;
      width: 32px;
    }
    div.card div.card-title a.toggle-info span {
      background: #ffffff;
      display: block;
      height: 2px;
      position: absolute;
      top: 16px;
      transition: all 0.15s 0s ease-out;
      width: 12px;
    }
    div.card div.card-title a.toggle-info span.left {
      right: 14px;
      transform: rotate(45deg);
    }
    div.card div.card-title a.toggle-info span.right {
      left: 14px;
      transform: rotate(-45deg);
    }
    div.card div.card-title h2 {
      font-size: 24px;
      font-weight: 700;
      letter-spacing: -0.05em;
      margin: 0;
      padding: 0;
    }
    div.card div.card-title h2 small {
      display: block;
      font-size: 18px;
      font-weight: 600;
      letter-spacing: -0.025em;
    }
    div.card div.card-description {
      padding: 0 15px 10px;
      position: relative;
      font-size: 14px;
    }
    div.card div.card-actions {
      box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.075);
      padding: 10px 15px 20px;
      text-align: center;
    }
    div.card div.card-flap {
      background: #d9d9d9;
      position: absolute;
      width: 100%;
      transform-origin: top;
      transform: rotateX(-90deg);
    }
    div.card div.flap1 {
      transition: all 0.3s 0.3s ease-out;
      z-index: -1;
    }
    div.card div.flap2 {
      transition: all 0.3s 0s ease-out;
      z-index: -2;
    }
    div.cards.showing div.card {
      cursor: pointer;
      opacity: 0.6;
      transform: scale(0.88);
    }
    .no-touch div.cards.showing div.card:hover {
      opacity: 0.94;
      transform: scale(0.92);
    }
    div.card.show {
      opacity: 1 !important;
      transform: scale(1) !important;
    }
    div.card.show div.card-title a.toggle-info {
      background: #ff6666 !important;
    }
    div.card.show div.card-title a.toggle-info span {
      top: 15px;
    }
    div.card.show div.card-title a.toggle-info span.left {
      right: 10px;
    }
    div.card.show div.card-title a.toggle-info span.right {
      left: 10px;
    }
    div.card.show div.card-flap {
      background: #ffffff;
      transform: rotateX(0deg);
    }
    div.card.show div.flap1 {
      transition: all 0.3s 0s ease-out;
    }
    div.card.show div.flap2 {
      transition: all 0.3s 0.2s ease-out;
    }

</style>

<div class="cards">
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="card">
                    <div class="card__image-holder">
                      <img class="card__image" src="<?php echo e(asset('storage/' . $posta->foto_bank)); ?>" alt="wave" />
                    </div>
                    <div class="card-title">
                      
                      <h1><?php echo e($posta->bank); ?></h1>
                      <h2>
                        <?php echo e($posta->atas_nama); ?>

                        <small><br><?php echo e($posta->rekening); ?></small><br>
                      </h2>
                      <a href="#" >
                        <input type="text" value="<?php echo e($posta->rekening); ?>" hidden id="copyText" >
                        <!-- The button used to copy the text -->
                        <button class="toggle-info btn" id="copyBtn">Copy Rekening</button>
                      </a>
                    </div>
                     
                      
                     
                </div>

                     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script>
                            const copyBtn = document.getElementById('copyBtn')
                            const copyText = document.getElementById('copyText')
                            
                            copyBtn.onclick = () => {
                                copyText.select();    // Selects the text inside the input
                                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                                 Swal.fire({         //displays a pop up with sweetalert
                                    icon: 'success',
                                    title: 'Text copied to clipboard',
                                    showConfirmButton: false,
                                    timer: 1000
                                });
                            }
                        </script>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           

         
    <?php endif; ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/dashboard/rekening/index.blade.php ENDPATH**/ ?>