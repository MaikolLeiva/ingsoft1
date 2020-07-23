@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                        Crear nuevo trabajo
                </div>
                <div class="card-body">

                {!! Form::open(['route' => 'trabajo.store'])!!}

                    {{ Form::hidden('user_id', auth()->user()->id)}}

                    <div class="form-group">
                        {{       Form::label('parametro1', 'Ingrese nombre del trabajo')     }}
                        {{       Form::text('nombre',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro2', 'Ingrese nombre del estudiante')     }}
                        {{       Form::text('primerEstudiante',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese rut del estudiante')     }}
                        {{       Form::text('primerRut',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese carrera del estudiante')     }}
                        {{       Form::text('primeraCarrera',null,['class' => 'form-control'])     }}
                    </div>

                    <p><strong>Si solo es un estudiante, dejar los demás estudiantes en blanco.</strong></p>
                    <div class="form-group">
                        {{       Form::label('parametro4', 'Ingrese nombre del estudiante (Opcional*)')     }}
                        {{       Form::text('segundoEstudiante',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro5', 'Ingrese rut del estudiante (Opcional*)')     }}
                        {{       Form::text('segundoRut',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese carrera del estudiante(Opcional*)')     }}
                        {{       Form::text('segundaCarrera',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro6', 'Ingrese nombre del estudiante (Opcional*)')     }}
                        {{       Form::text('tercerEstudiante',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro7', 'Ingrese rut del estudiante (Opcional*)')     }}
                        {{       Form::text('tercerRut',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese carrera del estudiante (Opcional*)')     }}
                        {{       Form::text('terceraCarrera',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro8', 'Ingrese nombre del estudiante (Opcional*)')     }}
                        {{       Form::text('cuartoEstudiante',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro9', 'Ingrese rut del estudiante (Opcional*)')     }}
                        {{       Form::text('cuartoRut',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese carrera del estudiante (Opcional*)')     }}
                        {{       Form::text('cuartaCarrera',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro10', 'Ingrese nombre del profesor guía')     }}
                        {{       Form::text('primerProfesor',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro11', 'Ingrese rut del profesor guía')     }}
                        {{       Form::text('rutPrimerProfesor',null,['class' => 'form-control'])     }}
                    </div>
                    <p><strong>Si solo es un profesor, dejar el siguiente profesor en blanco.</strong></p>
                    <div class="form-group">
                        {{       Form::label('parametro12', 'Ingrese nombre del segundo profesor guía (Opcional*)')     }}
                        {{       Form::text('segundoProfesor',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro13', 'Ingrese rut del segundo profesor guía (Opcional*)')     }}
                        {{       Form::text('rutSegundoProfesor',null,['class' => 'form-control'])     }}
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