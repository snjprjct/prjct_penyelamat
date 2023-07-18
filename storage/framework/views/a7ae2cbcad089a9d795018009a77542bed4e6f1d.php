



<?php $__env->startSection('judul'); ?>
Hai <?php echo e($aa = auth()->user()->level); ?> <?php echo e($aa = auth()->user()->name); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
<div class="container row">
    <div class="col-md-7 item video-box-wrapper">

    <Style>
        @property  --p {
        syntax: "<number>";
        inherits: true;
        initial-value: 0;
        }

        .pie {
        --p: 20;
        --b: 22px;
        --c: darkred;
        --w: 150px;

        width: var(--w);
        aspect-ratio: 1;
        position: relative;
        display: inline-grid;
        margin: 5px;
        place-content: center;
        font-size: 25px;
        font-weight: bold;
        font-family: sans-serif;
        }
        .pie:before,
        .pie:after {
        content: "";
        position: absolute;
        border-radius: 50%;
        }
        .pie:before {
        inset: 0;
        background: radial-gradient(farthest-side, var(--c) 98%, #0000) top/var(--b)
            var(--b) no-repeat,
            conic-gradient(var(--c) calc(var(--p) * 1%), #0000 0);
        -webkit-mask: radial-gradient(
            farthest-side,
            #0000 calc(99% - var(--b)),
            #000 calc(100% - var(--b))
        );
        mask: radial-gradient(
            farthest-side,
            #0000 calc(99% - var(--b)),
            #000 calc(100% - var(--b))
        );
        }
        .pie:after {
        inset: calc(50% - var(--b) / 2);
        background: var(--c);
        transform: rotate(calc(var(--p) * 3.6deg))
            translateY(calc(50% - var(--w) / 2));
        }
        .animate {
        animation: p 1s 0.5s both;
        }
        .no-round:before {
        background-size: 0 0, auto;
        }
        .no-round:after {
        content: none;
        }
        @keyframes  p {
        from {
            --p: 0;
        }
        } }

    </style>
<div class="row">
<div class="col-md-6">
 

       

    </div>

    <div class="col-md-4 item video-box-wrapper">

        
    </div>

</div>

<?php elseif($aa=="Pemilik"): ?>

<div class="content-line content-line-hero" style="padding: 0 20px 0 20px">

    
</div>

<style>
    table,
    th,
    td {
        border: 0px solid black;
        width: 100%;
        padding: 15px 25px 0 25
    }
</style>

<div id="owl-slider-2" class="slider-wrapper owl-carousel">
    <div class="item video-box-wrapper" style="display:block">

        <div class="video-description-wrapper">

            <table class="table table-hover">
                <tr>
                    <th rowcol="2">
                        <p class="video-description-header">Activity</p>
                    </th>
                    <th>
                        <p class="video-description-header">Time</p>
                    </th>
                </tr>

              
            </table>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
              
          
            <script>
                var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = ["red", "green","blue","orange","brown"];
                
                new Chart("myChart", {
                  type: "bar",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "World Wine Production 2018"
                    }
                  }
                });
                </script>
           



        </div>
    </div>
    <div class="item video-box-wrapper" style="overflow:auto">

        <div class="video-description-wrapper">
            <table class="table table-hover">
                <tr>
                    <th rowcol="2">
                        <p class="video-description-header">Bulan Belum Membayar</p>
                    </th>
                    <th>
                        <p class="video-description-header">Aksi</p>
                    </th>
                </tr>

             

        </div>
    </div>
</div>



<?php endif; ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography (1)\photography\resources\views/dashboard/home.blade.php ENDPATH**/ ?>