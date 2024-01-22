<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard || Mi blog</title>
    <!-- favicon
		============================================ -->
        <link href="{{ asset('img/icon/perfil_git.gif') }}" rel="icon">


    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{asset('admin/css/login.css')}}" rel="stylesheet">
    <!-- DataTables CSS-->
    <link href="{{asset('admin/datatables/datatables.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/datatables/main.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('admin/assets/css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}" />
    <link rel="stylesheet" href="toaster.css">

    @vite(['resources/css/buscador.css','resources/js/busqueda.js'])

</head>

<body>

    @include('layouts.inc.nav')
    <div class="overlay"></div>

    <main class="main-wrapper">
        @include('layouts.inc.sidebar')

        @yield('content')

    </main>

</body>
<!--CDN bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('admin/js/jquery-3.6.4.slim.js')}}"></script>
<script src="{{asset('admin/popper/popper.min.js')}}"></script>
<!-- datatables JS -->
<script type="text/javascript" src="{{asset('admin/datatables/datatables.min.js')}}"></script>

<!-- para usar botones en datatables JS -->
<script src="{{asset('admin/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/datatables/JSZip-2.5.0/jszip.min.js')}}"></script>
<script src="{{asset('admin/datatables/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/datatables/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/datatables/Buttons-1.5.6/js/buttons.html5.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontró registro",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Buscar",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },

        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',
        buttons: [{
                extend: 'excelHtml5',
                text: '<img src="{{ asset('img/icon/excel.png') }}" alt="" width="40" height="40">',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-info'
            },
            {
                extend: 'pdfHtml5',
                text: '<img src="{{ asset('img/icon/pdf.png') }}" alt="" width="40" height="40">',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-info'
            },
            {
                extend: 'print',
                text: '<img src="{{ asset('img/icon/imprimir.png') }}" alt="" width="40" height="40">',
                titleAttr: 'Imprimir',
                className: 'btn btn-info'
            },
        ]
    });
});
</script>
<script>
$("#btnExport").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
    e.preventDefault();
});
</script>
<script src="//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"></script>
<script src="{{asset('admin/assets/js/Chart.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dynamic-pie-chart.js')}}"></script>
<script src="{{asset('admin/assets/js/moment.min.js')}}"></script>
<script src="{{asset('admin/assets/js/fullcalendar.js')}}"></script>
<script src="{{asset('admin/assets/js/jvectormap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/world-merc.js')}}"></script>
<script src="{{asset('admin/assets/js/polyfill.js')}}"></script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/assets/js/toaster.js')}}"></script>

</html>