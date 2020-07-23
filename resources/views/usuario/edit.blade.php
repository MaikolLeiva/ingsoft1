@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    EDITAR USUARIO
                </div>
                <div class="card-body">
                    {!! Form::model($user, ['route' => ['usuario.update', $user->id], 'method' => 'PUT']) !!}

                    <div class="form-group">
                        {{       Form::label('parametro1', 'Ingrese nombre del usuario')     }}
                        {{       Form::text('name',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro2', 'Ingrese correo del usuario')     }}
                        {{       Form::text('email',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese rol del usuario')     }}
                        {{       Form::select('rol',['Administrador' => 'Administrador','Estudiante'=>'Estudiante','Profesor'=>'Profesor','Secretaria'=>'Secretaria', 'Encargado de titulación'=>'Encargado de titulación'],'Kosovo',['class'=>'form-control','placeholder'=>'Select rol'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro4', 'Ingrese contraseña del usuario')     }}
                        {{       Form::password('password', ['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::submit('Guardar', ['class' => 'btn btn-primary'])     }}
                    </div>
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection