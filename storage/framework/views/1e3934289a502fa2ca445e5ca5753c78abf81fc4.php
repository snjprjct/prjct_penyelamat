<?php $__env->startSection('judul'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('container'); ?>

<style>
    .card {
        border: solid 1px #dbdad7;
        width: 100%;
        padding-left: 10px !important;
        padding-bottom: 10px !important;
        padding-right: 10px !important;
        padding-top: 0px !important;

    }

    .card-title {
        margin: auto;
        padding: 15px;
        background-color: #2f7fad;
        color: white;
        width: 80%;
    }

    div.card-body {
        padding: 0px;
    }

    .custom-select {
        width: 100%;
    }

    .btn2 {
        margin-left: 10%;
    }

    input {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important;
    }

    input:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    select {

        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important;
    }

    select:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .radiobtn {
        margin-left: 3.5%;
    }

    .icons {
        margin: auto !important;

    }

    .fa {
        border-radius: 25px;
        width: 10%;
        margin-left: 5%;
        border: solid 2px #dbdad7;
        margin-top: 5%;
        text-align: center;
    }

    .fa-plane {
        color: #1cad9f;
    }

    .fa-taxi {
        color: #c2f700;
    }

    .fa-train {
        color: red;
    }

    @media  only screen and (max-width: 600px) {
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: 90%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important;

        }

        .fa {
            border-radius: 25px;
            width: 15%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center;
        }
    }
</style>


<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="">
                <div class="card shadow mb-5 bg-white rounded">
                    <Br>
                    <Br>
                    <div class="col-md-12 col-md-pull-7">
                        <div class="booking-form">
                            <form method="post" action="/booking/cek">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Tanggal Pemesanan</span>
                                            <input class="form-control" name="tgl_booking" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Jam Pemesanan</span>
                                            <input class="form-control" name="jam_booking" type="time" required>
                                        </div>
                                    </div>
                                </div>

                                <input class="form-control" name="paket" value="<?php echo e(request()->idp); ?>" type="text" required>

                                <div class="form-btn">
                                    <button class="card-title text-center shadow mb-5 rounded"
                                        style="width:100%; border:none">Check availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-mb-12">
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <!--Card-->
                    <div class="card shadow mb-5 bg-white rounded">

                        <!--Card-Body-->
                        <form >

                            <?php $__currentLoopData = $posta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            
                        <div class="card-body">

                            <!--Card-Title-->
                            <p class="card-title text-center shadow mb-5 rounded">Booking Form</p>

                             
                            <hr>



                           
                            <!--Second Row-->
                            <div class="row">

                                <div class="col-sm-6">
                                    <input type="date" value="<?php echo e($posta->tgl_booking); ?>" class="browser-default custom-select mb-4" id="select"> 
                                </div>

                                <div class="col-sm-6">
                                    <input type="time" class="browser-default custom-select mb-4" id="select">
                                         
                                </div>

                            </div>


                            <!--Third Row-->
                            <div class="row">

                                <div class="col-sm-6">
                                    <input type="text" class="browser-default custom-select mb-4" id="select">
                                </div>

                                <div class="col-sm-6">
                                    <input type="time" class="browser-default custom-select mb-4" id="select">
                                </div>

                            </div>


                            <!--Fourth Row-->
                            <div class="row mt-4">

                                <div class="col-sm-6">
                                    <select class="browser-default custom-select mb-4" id="select">
                                        <option value="" disabled="" selected="">Anytime</option>
                                        <option value="1">6:00 AM</option>
                                        <option value="2">3:00 PM</option>
                                        <option value="3">6:00 PM</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <select class="browser-default custom-select mb-4" id="select">
                                        <option value="" disabled="" selected="">Anytime</option>
                                        <option value="1">6:00 AM</option>
                                        <option value="2">3:00 PM</option>
                                        <option value="3">6:00 PM</option>
                                    </select>
                                </div>

                            </div>




                            <!--Fifth Row-->
                            <div class="row">

                                <div class="col-sm-4">
                                    <select class="browser-default custom-select mb-4" id="select">
                                        <option value="" disabled="" selected="">Kids(0-14)</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <select class="browser-default custom-select mb-4" id="select">
                                        <option value="" disabled="" selected="">Adults(15-64)</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <select class="browser-default custom-select mb-4" id="select">
                                        <option value="" disabled="" selected="">Seniors(65+)</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>



                            </div>

                            <a href="#" class="btn btn-primary float-right mt-5">Find Flights</a>
                        </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </form>
                    </div>
                </div>




                
</div>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views//create.blade.php ENDPATH**/ ?>