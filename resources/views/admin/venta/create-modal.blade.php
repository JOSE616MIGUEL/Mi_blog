<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Agregar Proyecto</div>
                                <hr>
                                <form action="{{ route('Venta.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="input-4">Cliente</label>
                                        <select name="cliente_id" class="form-control">
                                            <option value="">Seleccionar cliente</option>
                                            @foreach ($cliente as $item)
                                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                            @endforeach
                                        </select>
                                        @error('cliente_id')
                                        <small>
                                            <strong>
                                                <div class="alert alert-danger" role="alert">
                                                    Campo vacío
                                                </div>
                                            </strong>
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="input-4">Empresa</label>
                                        <select name="empresa_id" class="form-control">
                                            <option value="">Seleccionar empresa</option>
                                            @foreach ($empresa as $item)
                                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                            @endforeach
                                        </select>
                                        @error('empresa_id')
                                        <small>
                                            <strong>
                                                <div class="alert alert-danger" role="alert">
                                                    Campo vacío
                                                </div>
                                            </strong>
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="input-4">Proyecto</label>
                                        <select name="proyecto_id" class="form-control">
                                            <option value="">Seleccionar proyecto</option>
                                            @foreach ($proyecto as $item)
                                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                            @endforeach
                                        </select>
                                        @error('proyecto_id')
                                        <small>
                                            <strong>
                                                <div class="alert alert-danger" role="alert">
                                                    Campo vacío
                                                </div>
                                            </strong>
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="input-5">Precio</label>
                                        <input type="number" class="form-control" name="precio">
                                        @error('precio')
                                        <small>
                                            <strong>
                                                <div class="alert alert-danger" role="alert">
                                                    Campo vacío
                                                </div>
                                            </strong>
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Salir</button>
                                        <button type="submit" class="btn btn-success px-5"><i class="icon-lock"></i>
                                            Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>