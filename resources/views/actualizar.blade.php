@extends('layouts.app')
@section('content')
<div class='container'>
    <form action="{{route('actualizar', $usuario)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="exampleInputName">Nombre</label>
            <input name="nombre" type="texto" class="form-control" id="exampleInputName" value="{{ $usuario->name}}">

        </div>
        <div class="form-group form-check">
            <input name="isOn" type="checkbox" class="form-check-input" id="exampleCheck1" @if ($usuario->isOn) checked
            @endif>
            <label class="form-check-label" for="exampleCheck1">Habilitar</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ URL::previous()}}">Volver</a>




    </form>
</div>


@endsection