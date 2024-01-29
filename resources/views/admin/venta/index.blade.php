@extends ('layouts.inc.admin')

@section('content')

@include('admin.venta.create-modal')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Venta
                </h4>
            </div>
            @if($mensaje = Session::get('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $mensaje }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    Agregar
                </button>

                </br>
                </br>
                <div class="table table-reposive">
                    <table class="table table-sm table-bordered display" id="myTable">
                        <thead>
                            <th class="text-white">N.</th>
                            <th class="text-white">Cliente</th>
                            <th class="text-white">Empresa</th>
                            <th class="text-white">Proyecto</th>
                            <th class="text-white">Precio</th>
                            <th class="text-white"></th>
                        </thead>
                        <tbody>
                            <?php
                                $contandor=1;
                            ?>
                            @forelse ($venta as $item)
                            <tr>
                                <!-- para imprimir debe ser igual los nombre de los campos de la tabla -->
                                <td><?php echo $contandor?></td>
                                <td>{{ $item->cliente->nombre }}</td>
                                <td>{{ $item->empresa->nombre }}</td>
                                <td>{{ $item->proyecto->nombre }}</td>
                                <td>{{ $item->precio }}</td>
                                <td>
                                <div class="d-grid gap-2">
                                            <a class="btn btn-outline-secondary" href="{{ route('Venta.edit', $item->id) }}"
                                                role="button">Editar</a>
                                            <a class="btn btn-danger" href="{{ route('Venta.show', $item->id) }}"
                                                role="button">Eliminar</a>
                                        </div>
                                </td>
                            </tr>
                            <?php
            $contandor++;
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection