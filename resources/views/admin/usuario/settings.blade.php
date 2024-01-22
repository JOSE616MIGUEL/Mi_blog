@extends ('layouts.inc.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Configurar Usuario
                    <a href="{{ route('home') }}" class="btn btn-primary float-end">Volver</a>
                </h4>
                <p>Para actualizar debe ingresar la contraseña del administrador</p>
            </div>
            @if($mensaje = Session::get('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $mensaje }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-body">
                <form action="{{ route('Usuario.configurationupdate', Auth::user()->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{$usuario->name}}" />
                            @error('nombre')
                            <small>
                                <strong>
                                    <div class="alert alert-danger" role="alert">
                                        Campo vacío
                                    </div>
                                </strong>
                            </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Correo</label>
                            <input type="text" name="email" class="form-control" value="{{$usuario->email}}" />
                            @error('email')
                            <small>
                                <strong>
                                    <div class="alert alert-danger" role="alert">
                                        Campo vacío
                                    </div>
                                </strong>
                            </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Imagen</label>
                            <input type="file" name="imagen" class="form-control" />
                            @if($usuario->imagen)
                            <img src="{{ asset($usuario->imagen) }}" alt="" width="100px" height="100px">
                            @else
                            <img src="{{ asset('img/usuario/negro.jpg') }}" alt="" width="100px" height="100px">
                            @endif
                            @error('imagen')
                            <small>
                                <strong>
                                    <div class="alert alert-danger" role="alert">
                                        Imagen debe ser de tipo impagen
                                    </div>
                                </strong>
                            </small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" />
                            @error('password')
                            <small>
                                <strong>
                                    <div class="alert alert-danger" role="alert">
                                        Campo vacío
                                    </div>
                                </strong>
                            </small>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection