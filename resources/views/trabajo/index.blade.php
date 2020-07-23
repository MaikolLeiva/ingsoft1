@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class='col-md-12 col-md-offset-2'>
            <div class="card">
                <div class="card-header">
                    Lista de trabajos
                    <a href="{{route('trabajo.create')}}" style="float:right"class="btn bn-sm btn-primary">Crear</a>
                </div>
            </div>

            <div class="card-body">           
                <table class='table table-striped table-hover'>
                    <thread>
                        <tr>
                            <th>ID</th>
                            <th>Nombre trabajo</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thread>

                    <Tbody>
                        @foreach($trabajos as $trabajo)
                            <tr>
                                <td>{{$trabajo->id}}</td>   
                                <td>{{$trabajo->nombre}}</td>     
                                <td>{{App\User::find($trabajo->user_id)->name}}</td> 
                                <td>
                                    <a href="{{route('trabajo.show', $trabajo->id)}}" class="btn btn-sm btn-primary">Ver</a>
                                    <a href="{{route('trabajo.edit', $trabajo->id)}}" class="btn btn-sm btn-primary">Editar</a> 
                                    {!! Form::open(['route' => ['trabajo.destroy', $trabajo->id], 'method' => 'DELETE']) !!}
                                        <button onClick="return confirmar_accion()" class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                </td>   
                            </tr>              
                        @endforeach
                                                                     
                    </Tbody>

                </table>
            </div>

        </div>
    </div>


</div>

<script>

function confirmar_accion(){

    return confirm('¿Estás seguro que deseas eliminar este registro?');

}

</script>

@endsection