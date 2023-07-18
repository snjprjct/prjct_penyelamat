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

                                <?php if(session()->has('update')): ?>
                                <div class="alert alert-warning" role="alert">
                                    <center> <?php echo e(session('update')); ?> </center>
                                </div>

                                <?php endif; ?>
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
                              
                                <?php if(request()->idp==null): ?>
                                    
                               
                                <input type="text" hidden name="paket"
                                value="<?php echo e(session()->get('paket_id')); ?>"
                                class="browser-default custom-select mb-4" id="select">
                                <?php else: ?>
                                <input class="form-control" name="paket" hidden value="<?php echo e(request()->idp); ?>" type="text"
                                >
                                <?php endif; ?>

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
                        <form method="post" action="/booking" enctype="multipart/form-data">


                            <?php echo csrf_field(); ?>




                            <div class="container card-body" style="padding:30px">

                                <!--Card-Title-->
                                <p class="card-title text-center shadow mb-5 rounded">Booking Form</p>

                                <div class="container">
                                    <center> <?php if(session()->has('success')): ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo e(session('success')); ?>

                                        </div>

                                        <?php elseif(session()->has('deleted')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo e(session('deleted')); ?>

                                        </div>
                                        <?php endif; ?> </center>
                                </div>

                                <hr>




                                <!--Second Row-->
                                <div class="row">


                                    <div class="col-sm-6">
                                        <label>Tanggal Booking</label>
                                        <Br>
                                        <input type="date" name="tgl_booking"
                                            value="<?php echo e(session()->get('tgl_booking')); ?>"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                        <br>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Nama Paket yang diPilih</label>
                                        <Br>
                                        <input type="text" value="<?php echo e(session()->get('nama_paket')); ?>"
                                            class="browser-default custom-select mb-4" id="select">
                                        <input type="text" hidden name="paket_id"
                                            value="<?php echo e(session()->get('paket_id')); ?>"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                        <br>
                                    </div>



                                </div>


                                <!--Third Row-->
                                <div class="row">

                                    <div class="col-sm-6">
                                        <label>Jam Booking</label>
                                        <Br>
                                        <input type="text" readonly name="jam_booking"
                                            value="<?php echo e(session()->get('jam_booking')); ?>"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Jam Selesai</label>
                                        <Br>
                                        <input type="text" name="jam_selesai"
                                            value="<?php echo e(session()->get('jam_selesai')); ?>"
                                            class="browser-default custom-select mb-4" id="select">
                                        <br>
                                    </div>



                                </div>


                                <!--Fourth Row-->
                                <div class="row mt-4">

                                    <div class="col-sm-6">
                                        <label>Catatan</label>
                                        <Br>
                                        <textarea class="browser-default custom-select mb-4" row="3"
                                            style="height:100px" name="catatan"></textarea>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Harga</label>
                                        <Br>
                                        <input type="text" name="total" value="<?php echo e(session()->get('harga')); ?>"
                                            class="browser-default custom-select mb-4" id="select"> <br>

                                    </div>

                                </div>

                                <div class="row mt-4">
                                    <label>Upload Bukti Pembayaran</label>
                                    <Br>
                                    <img class="img-preview img-fluid">
                                    <input type="file" required value="<?php echo e(old('bukti')); ?>" style="height:50px"
                                        name="bukti" class="browser-default custom-select mb-4" id="bukti"
                                        placeholder="Bukti customer" onchange="previewImage()">

                                    <?php $__errorArgs = ['bukti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <input type="text" name="customer_id" value="<?php echo e(auth()->user()->customer->id); ?>"
                                    class="browser-default custom-select mb-4" id="select"> <br>
                                <input type="text" name="status" hidden value="Menunggu Konfirmasi"
                                    class="browser-default custom-select mb-4" id="select"> <br>



                                <!--Fifth Row-->

                                <button type="submit" class="btn btn-primary float-right mt-5">Booking Sekarang</button>
                            </div>


                        </form>
                    </div>
                </div>

                <script>
                    function myFunction() {
                        document.getElementById("booking").submit();
                    }
                </script>
                <Script>
                    function previewImage() {
                        const bukti = document.querySelector('#bukti');
                        const imgPreview = document.querySelector('.img-preview')

                        imgPreview.style.display = 'block';

                        const oFReader = new FileReader();
                        oFReader.readAsDataURL(bukti.files[0]);

                        oFReader.onload = function (oFREvent) {
                            imgPreview.src = oFREvent.target.result;
                        }

                    }
                </script>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba1\photography\resources\views/create.blade.php ENDPATH**/ ?>