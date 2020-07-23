@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    VER USUARIO
                    <a href="" style="float:right" class="btn btn-primary">Editar</a>
                </div>
                <div class="card-body">
                <p><strong>Nombre del usuario: </strong>{{$user->name}}</p>
                <p><strong>Correo electrónico del usuario: </strong>{{$user->email}}</p>
                <p><strong>Rol del usuario: </strong>{{$user->rol}}</p>
                
                </div>

            </div>
            <a href="{{route('usuario.index')}}" class="btn btn-info">Volver</a>
        </div>
    </div>
</div>

@endsection