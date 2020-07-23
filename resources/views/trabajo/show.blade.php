@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    VER TRABAJO
                    <a href="{{route('trabajo.edit', $trabajo->id)}}" style="float:right" class="btn btn-primary">Editar</a>
                </div>
                <div class="card-body">
                <p><strong>Nombre del trabajo: </strong>{{$trabajo->nombre}}</p>

                @if(!empty($trabajo->primerEstudiante))
                    <p><strong>Nombre del estudiante: </strong>{{$trabajo->primerEstudiante}}</p>
                    <p><strong>Rut del estudiante: </strong>{{$trabajo->primerRut}}</p>
                    <p><strong>Carrera del estudiante: </strong>{{$trabajo->primeraCarrera}}</p>
                @endif

                @if(!empty($trabajo->segundoEstudiante))
                    <p><strong>Nombre del estudiante: </strong>{{$trabajo->segundoEstudiante}}</p>
                @endif
                @if(!empty($trabajo->segundoRut))
                    <p><strong>Rut del estudiante: </strong>{{$trabajo->segundoRut}}</p>
                @endif
                @if(!empty($trabajo->segundaCarrera))
                    <p><strong>Carrera del estudiante: </strong>{{$trabajo->segundaCarrera}}</p>
                @endif

                @if(!empty($trabajo->tercerEstudiante))
                    <p><strong>Nombre del estudiante: </strong>{{$trabajo->tercerEstudiante}}</p>
                @endif
                @if(!empty($trabajo->tercerRut))
                    <p><strong>Rut del estudiante: </strong>{{$trabajo->tercerRut}}</p>
                @endif
                @if(!empty($trabajo->terceraCarrera))
                    <p><strong>Carrera del estudiante: </strong>{{$trabajo->terceraCarrera}}</p>
                @endif

                @if(!empty($trabajo->cuartoEstudiante))
                    <p><strong>Nombre del estudiante: </strong>{{$trabajo->cuartoEstudiante}}</p>
                @endif
                @if(!empty($trabajo->cuartoRut))
                    <p><strong>Rut del estudiante: </strong>{{$trabajo->cuartoRut}}</p>
                @endif
                @if(!empty($trabajo->cuartaCarrera))
                    <p><strong>Carrera del estudiante: </strong>{{$trabajo->cuartaCarrera}}</p>
                @endif


                <p><strong>Nombre de profesor guía: </strong>{{$trabajo->primerProfesor}}</p>
                <p><strong>Rut de profesor guía: </strong>{{$trabajo->rutPrimerProfesor}}</p>

                @if(!empty($trabajo->segundoProfesor))
                    <p><strong>Nombre del segundo profesor guía: </strong>{{$trabajo->segundoProfesor}}</p>
                @endif

                @if(!empty($trabajo->rutSegundoProfesor))
                    <p><strong>Rut del segundo profesor: </strong>{{$trabajo->rutSegundoProfesor}}</p>
                @endif

                <p><strong>Usuario que creó el trabajo: </strong>{{App\User::find($trabajo->user_id)->name}}</p>
                </div>

            </div>
            <a href="{{route('trabajo.index')}}" class="btn btn-info">Volver</a>
        </div>
    </div>
</div>

@endsection