



<?php $__env->startSection('judul'); ?>

<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('container'); ?>
 
<Style>
    .page-title {
  text-align: center;
  color: #FFFFFF;
  font-weight: 100;
  font-size: 40px;
  margin-top: 60px;
  margin-bottom: 40px;
    }

    .wrapper {
    width: 100%;
    min-height: 930px;
    display: block;
    position: relative;
    background: #333333;
    background-size: cover;
    background-position: center center;
    position: relative;
    padding-bottom: 50px;
    }
    .wrapper:after {
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111111;
    display: block;
    content: "";
    top: 0;
    left: 0;
    z-index: 1;
    opacity: 0.6;
    }
    .wrapper .container {
    z-index: 2;
    position: relative;
    }
    .wrapper footer {
    position: absolute;
    z-index: 3;
    bottom: 20px;
    width: 100%;
    text-align: center;
    }
    .wrapper footer h3 {
    color: #FFFFFF;
    font-weight: 200;
    }
    .wrapper footer .social-icon {
    color: #FFFFFF;
    opacity: 0.8;
    font-size: 34px;
    margin: 20px;
    }
    .wrapper footer .social-icon:hover {
    opacity: 1;
    }

    .ticket-card {
    margin-top: 15vh;
    margin-bottom: 15vh;
    background: #FFFFFF;
    border-radius: 4px;
    }
    .ticket-card:hover .cover img, .ticket-card.active .cover img {
    -moz-transform: translate(0, -50px);
    -o-transform: translate(0, -50px);
    -ms-transform: translate(0, -50px);
    -webkit-transform: translate(0, -50px);
    transform: translate(0, -50px);
    box-shadow: 0 10px 20px -4px rgba(22, 22, 22, 0.5);
    }
    .ticket-card .cover {
    border-radius: 4px 4px 0 0;
    position: relative;
    margin: 15px;
    }
    .ticket-card .cover img {
    width: 100%;
    position: relative;
    z-index: 2;
    margin-top: -30px;
    box-shadow: 0 10px 16px -6px rgba(22, 22, 22, 0.5);
    border-radius: 4px;
    -moz-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    -moz-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    -o-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    -ms-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    }
    .ticket-card .cover .info {
    position: absolute;
    width: 100%;
    bottom: 0px;
    padding: 0 15px;
    color: #777777;
    }
    .ticket-card .cover .info .going,
    .ticket-card .cover .info .tickets-left {
    padding-bottom: 10px;
    border-bottom: 1px solid #f3f3f3;
    width: 50%;
    }
    .ticket-card .cover .info .going {
    float: left;
    }
    .ticket-card .cover .info .tickets-left {
    float: right;
    text-align: right;
    }
    .ticket-card .cover .info .fa {
    color: #CCCCCC;
    margin-right: 5px;
    }
    .ticket-card .artist {
    float: left;
    }
    .ticket-card .artist .info {
    font-weigth: 600;
    font-size: 12px;
    text-transform: uppercase;
    color: #BBBBBB;
    margin-bottom: 0;
    }
    .ticket-card .artist .name {
    font-weight: 200;
    font-size: 22px;
    margin-top: 5px;
    }
    .ticket-card .ticket {
    float: left;
    }
    .ticket-card .ticket small {
    font-size: 75%;
    }
    .ticket-card .price {
    float: right;
    text-align: right;
    }
    .ticket-card .price .from {
    color: #BBBBBB;
    }
    .ticket-card .price .value {
    font-size: 28px;
    font-weight: 200;
    color: #00bbff;
    margin-top: -5px;
    }
    .ticket-card .price .value b {
    font-size: 18px;
    font-weight: 200;
    }
    .ticket-card .list-unstyled {
    max-height: 200px;
    overflow-x: scroll;
    background: #EEEEEE;
    margin-bottom: 0;
    box-shadow: inset 0px 4px 10px rgba(0, 0, 0, 0.25);
    }
    .ticket-card .list-unstyled li {
    border-bottom: 1px dotted #CCCCCC;
    padding: 5px 30px;
    overflow: hidden;
    width: 100%;
    display: block;
    position: relative;
    }
    .ticket-card .list-unstyled li .btn-buy {
    position: absolute;
    right: 15px;
    top: 13px;
    padding: 8px 20px;
    border-radius: 6px;
    background: #00bbff;
    border: 0;
    opacity: 0;
    -webkit-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    -moz-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    -o-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    -ms-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
    }
    .ticket-card .list-unstyled li:hover .btn-buy {
    opacity: 1;
    }
    .ticket-card .list-unstyled li:last-child {
    border-bottom: none;
    }
    .ticket-card .list-unstyled li:before, .ticket-card .list-unstyled li:after {
    display: table;
    content: " ";
    clear: both;
    }
    .ticket-card .list-unstyled li .price .value {
    color: #444444;
    font-size: 22px;
    margin-top: 10px;
    }
    .ticket-card .body {
    padding: 5px 30px;
    }
    .ticket-card .body .info {
    color: #777777;
    }
    .ticket-card .body .location,
    .ticket-card .body .date {
    padding-top: 10px;
    width: 50%;
    }
    .ticket-card .body .location {
    float: left;
    }
    .ticket-card .body .date {
    float: right;
    text-align: right;
    }
    .ticket-card .body .fa {
    color: #CCCCCC;
    margin-right: 5px;
    }
    .ticket-card .footer .btn {
    width: 100%;
    background: transparent;
    border-top: 1px dotted #BBBBBB;
    border-radius: 0;
    padding: 15px 8px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    color: #666666;
    box-shadow: none;
    }
    .ticket-card .footer .btn:focus, .ticket-card .footer .btn:hover, .ticket-card .footer .btn:active {
    outline: none !important;
    }
</style>

 
    <div class="wrapper">
      <div class="container">
        <h2 class="page-title">Paket Foto</h2>
        <div class="row">

            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
           
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ticket-card">
              <div class="cover">
                <img src="<?php echo e(asset('storage/' . $paket->foto)); ?>" alt="" />
                 
              </div>
              <div class="body">
  
                <div class="artist"> 
                  <h4 class="name"><?php echo e($paket->nama_paket); ?></h4>
                </div>
                <div class="price">
                  <div class="from"></div>
                  <div class="value">
                    Rp. <?php echo 
            number_format($paket->harga,0,',','.');?>
                  </div>
                </div>
  
                <div class="clearfix"></div>
                <div class="info">
                  <p class="location">
                    <?php echo e($paket->keterangan); ?>

                  </p>
                   
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="collapse">
                <ul class="list-unstyled">
                  <li>
                    <div class="ticket">
                      <h5>Basic Ticket<br>
                        <small>25 Tickets left</small>
                      </h5>
                    </div>
                    <div class="price">
                      <div class="value"><b>$</b>599</div>
                    </div>
                    <a href="#" class="btn btn-info btn-sm btn-buy">Buy Now!</a>
                  </li>
                  <li>
                    <div class="ticket">
                      <h5>Regular Ticket<br>
                        <small>15 Tickets left</small>
                      </h5>
                    </div>
                    <div class="price">
                      <div class="value"><b>$</b>799</div>
                    </div>
                    <a href="#" class="btn btn-info btn-sm btn-buy">Buy Now!</a>
                  </li>
                  <li>
                    <div class="ticket">
                      <h5>Premium Ticket<br>
                        <small>62 Tickets left</small>
                      </h5>
                    </div>
                    <div class="price">
                      <div class="value"><b>$</b>1,299</div>
                    </div>
                    <a href="#" class="btn btn-info btn-sm btn-buy">Buy Now!</a>
                  </li>
                  <li>
                    <div class="ticket">
                      <h5>VIP Ticket<br>
                        <small>6 Tickets left</small>
                      </h5>
                    </div>
                    <div class="price">
                      <div class="value"><b>$</b>1,799</div>
                    </div>
                    <a href="#" class="btn btn-info btn-sm btn-buy">Buy Now!</a>
                  </li>
                </ul>
              </div>
              <div class="footer">
                <?php if(Auth::guest()==true): ?>:
                  <button class="btn toggle-tickets" onclick="location.href='/login-home'" >Cek Sekarang</button>
                <?php else: ?>:
                <button class="btn toggle-tickets" onclick="location.href='/create?idp=<?php echo e($paket->id); ?>'" >Cek Sekarang</button>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
         
  
        </div>
      </div>
  
    
    </div> 


 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/paket.blade.php ENDPATH**/ ?>