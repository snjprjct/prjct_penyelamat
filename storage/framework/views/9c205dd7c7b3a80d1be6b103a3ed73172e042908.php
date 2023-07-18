 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
 <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
 <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
 <div class="app-wrapper">
     <div class="left-area hide-on-mobile">
         <div class="app-header">BAITURRAHIM
             <button class="close-menu">
                 <svg width="24" height="24" fill="none" stroke="#51a380" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" class="feather feather-x">
                     <defs />
                     <path d="M18 6L6 18M6 6l12 12" />
                 </svg>
             </button>
         </div>
         <div class="left-area-content">
             <div class="profile">
                 <img src="https://images.unsplash.com/photo-1496340672773-0b29c9b17ed2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                     alt="">
                 <div class="profile-info">
                     <span class="name"><b><?php echo e(auth()->user()->name); ?></b></span>
                     <span class="country"><?php echo e(auth()->user()->level); ?></span>
                 </div>
             </div>
             <div class="page-link-list">
                 <a href="/" class="item-link active" id="pageLink">
                     <svg class="link-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                         stroke-linejoin="round" stroke-width="2" class="feather feather-home" viewBox="0 0 24 24">
                         <defs />
                         <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                         <path d="M9 22V12h6v10" />
                     </svg>
                     Home</a>

                 <input hidden value="<?php echo e($aa = auth()->user()->level); ?>">

                 <div class="card">
                     <div class="card-header1" style="padding: 0.75rem 1.25rem;
  margin-bottom: 0;  " id="headingOne">
                         <h5 class="mb-0">
                             <button class="btn btn-link" data-toggle="collapse" style="padding: 0"
                                 data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <a class="item-link" id="pageLink" style="padding: 0 0 0 0 " href="#">
                                     <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                         <path
                                             d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                                     </svg>
                                     Data
                                 </a>
                             </button>
                         </h5>
                     </div>

                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <?php if($aa=="Administrator" ): ?>
                         <a href="/user" class="item-link" id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             User</a>
                          
                          <a href="/kelas" class="item-link" id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             Kelas</a>
                          
                           <a href="/periode" class="item-link" id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             Periode Bayar</a>

                             
                        <?php endif; ?>
                         <a href="/rekening" class="item-link" id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             Rekening</a>


                         


                         <a href="/ketentuan" class="item-link" id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             Ketentuan</a>


                         <a <?php if($aa=="Administrator" ): ?> href="/siswa" <?php elseif($aa=="Siswa" ): ?>
                             href="<?php echo e(url("siswa/" . auth()->user()->siswa->slug)); ?>" <?php endif; ?> class="item-link"
                             id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             Siswa</a>


                        




                     </div>
                 </div>


                 <a href="/pembayaran" class="item-link" id="pageLink">
                     <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-list">
                         <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                     </svg>
                     Pembayaran</a>

                    <div class="card">
                     <div class="card-header1" style="padding: 0.75rem 1.25rem;
  margin-bottom: 0;  " id="headingTwo">
                         <h5 class="mb-0">
                             <button class="btn btn-link" data-toggle="collapse" style="padding: 0"
                                 data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                 <a class="item-link" id="pageLink" style="padding: 0 0 0 0 " href="#">
                                     <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                         <path
                                             d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                                     </svg>
                                     Laporan
                                 </a>
                             </button>
                         </h5>
                     </div>

                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <?php if($aa=="Administrator" ): ?>
                         <a  
                             href="<?php echo e(route('siswa.laporan-siswa')); ?>" class="item-link"
                             id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             Siswa</a>
                        <?php endif; ?>

                         <a href="<?php echo e(route('pembayaran.laporan-pembayaran')); ?>" class="item-link" id="pageLink">
                             <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                 <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                             </svg>
                             Pembayaran</a>




                     </div>
                 </div>

               
             </div>

         </div>
         <form action="/logout" method="POST">
             <?php echo csrf_field(); ?>
             <button class="btn-invite">Logout</button>
         </form>
     </div>
     <div class="right-area">
         <div class="right-area-upper">
             <button class="menu-button">
                 <svg width="24" height="24" fill="none" stroke="#51a380" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2">
                     <defs />
                     <path d="M3 12h18M3 6h18M3 18h18" />
                 </svg>
             </button>
             <div class="search-part-wrapper">

                 <a class="menu-links" href="#">Sistem Informasi Pembayaran SPP </a>


             </div>

  
            <div class="dropdown" style="margin-top:10px; margin-bottom:10px">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(auth()->user()->notif_pembayaran()->count()); ?>

                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php $__currentLoopData = auth()->user()->notif_pembayaran(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item p-3" href="#"><?php echo e($notif->siswa->nama_siswa . ' Bulan ' . $notif->periode->bulan . ' ' . $notif->periode->tahun); ?> <span class="badge badge-warning">Menunggu Konfirmasi</span></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>

         </div>

         <div class="page-right-content">
             <div class="content-line content-line-hero" style="margin-bottom:3%; padding-left:12px">
                 <div class="line-header">
                     <h2 class="header-text"><?php echo $__env->yieldContent('judul'); ?></h2>

                 </div>
             </div>

             <?php echo $__env->yieldContent('container'); ?>

         </div>
     </div>


     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>
<?php /**PATH D:\laravel\coba1\spp\resources\views/layouts/main.blade.php ENDPATH**/ ?>