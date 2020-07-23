@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                        Crear nuevo usuario
                </div>
                <div class="card-body">

                {!! Form::open(['route' => 'usuario.store'])!!}

                    {{ Form::hidden('user_id', auth()->user()->id)}}

                    <div class="form-group">
                        {{       Form::label('parametro1', 'Ingrese nombre del usuario')     }}
                        {{       Form::text('name',null,['class' => 'form-control'])     }}
                    </div>
                    
                    <div class="form-group">
                        {{       Form::label('parametro2', 'Ingrese email del usuario')     }}
                        {{       Form::text('email',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro2', 'Ingrese rol del usuario')     }}
                        {{       Form::select('rol',['Administrador' => 'Administrador','Estudiante'=>'Estudiante','Profesor'=>'Profesor','Secretaria'=>'Secretaria', 'Encargado de titulación'=>'Encargado de titulación'],'Kosovo',['class'=>'form-control','placeholder'=>'Select rol'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese contraseña del usuario')     }}
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