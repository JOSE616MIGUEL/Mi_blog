@extends ('layouts.inc.admin')

@section('content')

@include('admin.empresa.create-modal')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Empresa
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
                        <div id="dvData">
                            <thead>
                                <th>N.</th>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Ubicación</th>
                                <th>Fono</th>
                                <th>Correo</th>
                                <th>Razon Social</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                <?php
                                $contandor=1;
                            ?>
                                @forelse ($empresa as $item)
                                <tr>
                                    <!-- para imprimir debe ser igual los nombre de los campos de la tabla -->
                                    <td><?php echo $contandor?></td>
                                    <td>{{ $item->rut }} </td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->ubicacion }}</td>
                                    <td>{{ $item->fono }}</td>
                                    <td>{{ $item->correo }} </td>
                                    <td>{{ $item->razon_social }}</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <a class="btn btn-warning" href="{{ route('Empresa.edit', $item->id) }}"
                                                role="button">Editar</a>
                                            <a class="btn btn-danger" href="{{ route('Empresa.show', $item->id) }}"
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
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection