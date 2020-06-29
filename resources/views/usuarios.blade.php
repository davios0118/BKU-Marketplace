@extends('layouts.app')
@section('content')
<div class="table-responsive" class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Habilitar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td scope="row">{{$usuario->id}} </td>
                <td scope="row">{{$usuario->name}} </td>
                <td scope="row">{{$usuario->email}} </td>
                <td scope="row">@if ($usuario->isAdmin)Administrador


                    @else Cliente

                    @endif</td>
                <td scope="row">@if ($usuario->isOn)Activo

                    @else Inactivo



                    @endif</td>
                <td><a href="{{route('editar',$usuario)}}">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection