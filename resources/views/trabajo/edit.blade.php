@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    EDITAR TRABAJO
                </div>
                <div class="card-body">
                    {!! Form::model($trabajo, ['route' => ['trabajo.update', $trabajo->id], 'method' => 'PUT']) !!}

                    <div class="form-group">
                        {{       Form::label('parametro1', 'Ingrese nombre del trabajo')     }}
                        {{       Form::text('nombre',null,['class' => 'form-control'])     }}
                    </div>

                    @if(!empty($trabajo->primerEstudiante))
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese nombre del primer estudiante')     }}
                            {{       Form::text('primerEstudiante',null,['class' => 'form-control'])     }}
                        </div>
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese rut del primer estudiante')     }}
                            {{       Form::text('primerRut',null,['class' => 'form-control'])     }}
                        </div>
                    @endif
                    @if(!empty($trabajo->segundoEstudiante))
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese nombre del segundo estudiante')     }}
                            {{       Form::text('segundoEstudiante',null,['class' => 'form-control'])     }}
                        </div>
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese rut del segundo estudiante')     }}
                            {{       Form::text('segundoRut',null,['class' => 'form-control'])     }}
                        </div>
                    @endif
                    @if(!empty($trabajo->tercerEstudiante))
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese nombre del tercer estudiante')     }}
                            {{       Form::text('tercerEstudiante',null,['class' => 'form-control'])     }}
                        </div>
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese rut del tercer estudiante')     }}
                            {{       Form::text('tercerRut',null,['class' => 'form-control'])     }}
                        </div>
                    @endif
                    @if(!empty($trabajo->cuartoEstudiante))
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese nombre del cuarto estudiante')     }}
                            {{       Form::text('cuartoEstudiante',null,['class' => 'form-control'])     }}
                        </div>
                        <div class="form-group">
                            {{       Form::label('parametro1', 'Ingrese rut del cuarto estudiante')     }}
                            {{       Form::text('cuartoRut',null,['class' => 'form-control'])     }}
                        </div>
                    @endif
                    <div class="form-group">
                        {{       Form::label('parametro2', 'Ingrese nombre del profesor guía')     }}
                        {{       Form::text('primerProfesor',null,['class' => 'form-control'])     }}
                    </div>

                    <div class="form-group">
                        {{       Form::label('parametro3', 'Ingrese rut del profesor guía')     }}
                        {{       Form::text('rutPrimerProfesor',null,['class' => 'form-control'])     }}
                    </div>

                    <p><strong>Si solo necesita un profesor guía, dejar el siguiente en blanco.</strong></p>
                    <div class="form-group">
                        {{       Form::label('parametro4', 'Ingrese nombre del segundo profesor guía (opcional*)')     }}
                        {{       Form::text('segundoProfesor',null,['class' => 'form-control'])     }}
                    </div>


                    <div class="form-group">
                        {{       Form::label('parametro5', 'Ingrese rut del segundo profesor guía (opcional*)')     }}
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