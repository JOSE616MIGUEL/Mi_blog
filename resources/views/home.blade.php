@extends('layouts.inc.admin')

@section('content')

<!-- ========== section start ========== -->
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Panel</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Panel de control</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon purple">
                        <i class="lni lni-cart-full"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Total de Empresas</h6>
                        <?php
                                $contandorempresa=0;
                            ?>
                        @forelse ($empresa as $item)
                        <?php
            $contandorempresa++;
            ?>
                        @empty
                        <!--
    <tr>
                                <div>
                                    <h1>No hay productos</h1>
                                </div>
                            </tr>

                              -->
                        @endforelse
                        <h3 class="text-bold mb-10"><?php echo $contandorempresa?></h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon success">
                        <i class="lni lni-dollar"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Total de Clientes</h6>
                        <?php
                                $contandorcliente=0;
                            ?>
                        @forelse ($cliente as $item)
                        <?php
            $contandorcliente++;
            ?>
                        @empty
                        <!--
    <tr>
                                <div>
                                    <h1>No hay productos</h1>
                                </div>
                            </tr>

                              -->
                        @endforelse
                        <h3 class="text-bold mb-10"><?php echo $contandorcliente?></h3>

                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Total de proyectos</h6>
                        <?php
                                $contandorproyecto=0;
                            ?>
                        @forelse ($proyecto as $item)
                        <?php
            $contandorproyecto++;
            ?>
                        @empty
                        <!--
    <tr>
                                <div>
                                    <h1>No hay productos</h1>
                                </div>
                            </tr>

                              -->
                        @endforelse
                        <h3 class="text-bold mb-10"><?php echo $contandorproyecto?></h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon orange">
                        <i class="lni lni-user"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Total de Ventas</h6>
                        <?php
                                $contandorventa=0;
                            ?>
                        @forelse ($venta as $item)
                        <?php
            $contandorventa++;
            ?>
                        @empty
                        <!--
    <tr>
                                <div>
                                    <h1>No hay productos</h1>
                                </div>
                            </tr>

                              -->
                        @endforelse
                        <h3 class="text-bold mb-10"><?php echo $contandorventa?></h3>
                    </div>
                </div>
                <!-- End Icon Cart -->
             
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <div id="container"></div>
    </div>
    <!-- end container -->
</section>
<!-- ========== section end ========== -->
 <!--Chart.js-->
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <script src="https://code.highcharts.com/modules/series-label.js"></script>
 <script src="https://code.highcharts.com/modules/exporting.js"></script>
 <script src="https://code.highcharts.com/modules/export-data.js"></script>
 <script src="https://code.highcharts.com/modules/accessibility.js"></script>
 <script>
     // Data generated from http://www.bikeforums.net/professional-cycling-fans/1113087-2017-tour-de-france-gpx-tcx-files.html

// Now create the chart
Highcharts.chart('container', {

    chart: {
        type: 'area',
        zoomType: 'x',
        panning: true,
        panKey: 'shift',
        scrollablePlotArea: {
            minWidth: 600
        }
    },

    caption: {
        text: 'This chart uses the Highcharts Annotations feature to place labels at various points of interest. The labels are responsive and will be hidden to avoid overlap on small screens.'
    },

    title: {
        text: 'Gráfico de ventas de softwares',
        align: 'left'
    },

    accessibility: {
        description: 'Estadística de ventas esto es cuando se finaliza el desarrollo y se entregó el dinero',
        landmarkVerbosity: 'one'
    },

    lang: {
        accessibility: {
            screenReaderSection: {
                annotations: {
                    descriptionNoPoints: '{annotationText}, at distance {annotation.options.point.x}km, elevation {annotation.options.point.y} meters.'
                }
            }
        }
    },

    credits: {
        enabled: false
    },


    yAxis: {
        startOnTick: true,
        endOnTick: false,
        maxPadding: 1,
        title: {
            text: null
        },
        labels: {
            format: '{value} CLP'
        },
        accessibility: {
            description: 'Precio',
            rangeDescription: ''
        }
    },

    tooltip: {
        headerFormat: '',
        shared: true
    },

    legend: {
        enabled: false
    },

    series: [{
        data: <?= $data?>,
        lineColor: Highcharts.getOptions().colors[1],
        color: Highcharts.getOptions().colors[2],
        fillOpacity: 1,
        name: 'Precio',
        marker: {
            enabled: false
        },
        threshold: null
    }]

});

     </script>
     <!--Chart.js-->
@endsection