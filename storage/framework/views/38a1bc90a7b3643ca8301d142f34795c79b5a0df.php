



<?php $__env->startSection('judul'); ?>
Hai <?php echo e($aa = auth()->user()->level); ?> <?php echo e($aa = auth()->user()->name); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('container'); ?>

<input value="<?php echo e($aa = auth()->user()->level); ?>" hidden>
<?php if( $aa =="Administrator"): ?>
<div class="row">

    

    <div class="col-md-6">
        <Style>
            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 310px;
                max-width: 800px;
                margin: 1em auto;
                }

                #container {
                height: 400px;
                }

                .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
                }

                .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
                }

                .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
                }

                .highcharts-data-table td,
                .highcharts-data-table th,
                .highcharts-data-table caption {
                padding: 0.5em;
                }

                .highcharts-data-table thead tr,
                .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
                }

                .highcharts-data-table tr:hover {
                background: #f1f7ff;
                }

        </style>

                
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <figure class="highcharts-figure">
        <div id="container"></div>
         
        </figure>


        <script>
           
            Highcharts.chart("container", {
            chart: {
                type: "column"
            },
            title: {
                align: "left",
                text: "Pemesanan Tanggal <?php echo e($start); ?> - <?php echo e($end); ?>"
            },
            
            accessibility: {
                announceNewData: {
                enabled: true
                }
            },
            xAxis: {
                type: "category"
            },
            yAxis: {
                title: {
                text: "Total Pemesan"
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: "{point.y:f}"
                }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat:
                '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> of total<br/>'
            },

            series: [
                {
                name: "Browsers",
                colorByPoint: true,
                data: [
                    <?php foreach($graf as $graf)
                    {
                    ?>
                    {
                    name: "<?php echo e($graf->tgl_booking); ?>",
                    y: <?php echo e($graf->sum); ?>,
                        drilldown: "<?php echo e($graf->tgl_booking); ?>"
                    },

                    <?php }?>

                ]
                }
            ],
            drilldown: {
                breadcrumbs: {
                position: {
                    align: "right"
                }
                },
                series: [
                {
                    name: "Chrome",
                    id: "Chrome",
                    data: [
                    ["v65.0", 0.1],
                    ["v64.0", 1.3],
                    ["v63.0", 53.02],
                    ["v62.0", 1.4],
                    ["v61.0", 0.88],
                    ["v60.0", 0.56],
                    ["v59.0", 0.45],
                    ["v58.0", 0.49],
                    ["v57.0", 0.32],
                    ["v56.0", 0.29],
                    ["v55.0", 0.79],
                    ["v54.0", 0.18],
                    ["v51.0", 0.13],
                    ["v49.0", 2.16],
                    ["v48.0", 0.13],
                    ["v47.0", 0.11],
                    ["v43.0", 0.17],
                    ["v29.0", 0.26]
                    ]
                },
                {
                    name: "Firefox",
                    id: "Firefox",
                    data: [
                    ["v58.0", 1.02],
                    ["v57.0", 7.36],
                    ["v56.0", 0.35],
                    ["v55.0", 0.11],
                    ["v54.0", 0.1],
                    ["v52.0", 0.95],
                    ["v51.0", 0.15],
                    ["v50.0", 0.1],
                    ["v48.0", 0.31],
                    ["v47.0", 0.12]
                    ]
                },
                {
                    name: "Internet Explorer",
                    id: "Internet Explorer",
                    data: [
                    ["v11.0", 6.2],
                    ["v10.0", 0.29],
                    ["v9.0", 0.27],
                    ["v8.0", 0.47]
                    ]
                },
                {
                    name: "Safari",
                    id: "Safari",
                    data: [
                    ["v11.0", 3.39],
                    ["v10.1", 0.96],
                    ["v10.0", 0.36],
                    ["v9.1", 0.54],
                    ["v9.0", 0.13],
                    ["v5.1", 0.2]
                    ]
                },
                {
                    name: "Edge",
                    id: "Edge",
                    data: [
                    ["v16", 2.6],
                    ["v15", 0.92],
                    ["v14", 0.4],
                    ["v13", 0.1]
                    ]
                },
                {
                    name: "Opera",
                    id: "Opera",
                    data: [
                    ["v50.0", 0.96],
                    ["v49.0", 0.82],
                    ["v12.1", 0.14]
                    ]
                }
                ]
            }
            });

        </script>



    </div>

    <div class="col-md-4">


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
                    var barColors = ["red", "green", "blue", "orange", "brown"];

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
                            legend: {
                                display: false
                            },
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 7\SKRIPSI\PEMROGRAMAN\photography\resources\views/dashboard/home.blade.php ENDPATH**/ ?>