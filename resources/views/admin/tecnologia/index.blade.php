@extends ('layouts.inc.admin')

@section('content')

@include('admin.tecnologia.create-modal')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tecnología
                </h4>
            </div>
            @if($mensaje = Session::get('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
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
                            <th>N.</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php
                                $contandor=1;
                            ?>
                            @forelse ($tecnologia as $item)
                            <tr>
                                <!-- para imprimir debe ser igual los nombre de los campos de la tabla -->
                                <td><?php echo $contandor?></td>
                                <td>
                                    @if($item->imagen)
                                    <img src="{{ asset($item->imagen) }}" alt="" width="100px" height="100px">
                                    @else
                                    <h5>No hay imagen</h5>
                                    @endif
                                </td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->tipo }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at}}</td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-warning" href="{{ route('Tecnologia.edit', $item->id) }}"
                                            role="button">Editar</a>
                                        <a class="btn btn-danger" href="{{ route('Tecnologia.show', $item->id) }}"
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