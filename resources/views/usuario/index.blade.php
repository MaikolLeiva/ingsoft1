@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class='col-md-12 col-md-offset-2'>
            <div class="card">
                <div class="card-header">
                    Lista de usuarios
                    <a href="{{ route('usuario.create') }}" style="float:right"class="btn bn-sm btn-primary">Crear</a>
                </div>
            </div>

            <div class="card-body">           
                <table class='table table-striped table-hover'>
                    <thread>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Correo electrónico</th>
                            <th>Acciones</th>
                        </tr>
                    </thread>

                    <Tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>   
                                <td>{{$user->name}}</td>    
                                <td>{{$user->rol}}</td>     
                                <td>{{$user->email}}</td> 
                                <td>
                                    <a href="{{route('usuario.show', $user->id)}}" class="btn btn-sm btn-primary">Ver</a>
                                    <a href="{{route('usuario.edit', $user->id)}}" class="btn btn-sm btn-primary">Editar</a> 
                                    {!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'DELETE']) !!}
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