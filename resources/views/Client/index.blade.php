@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
    <h1>Listado Salas</h1>
    <table class="table">
        <thead>
            <th>Sala</th>
            <th>Bloque</th>
            <th>Piso</th>
            <th>Aula</th>
            <th>Cantidad de Equipos</th>
        </thead>
        <tbody>
            <td>1</td>
            <td>11</td>
            <td>2</td>
            <td>27</td>
            <td>11</td>
        </tbody>
    </table>
    <a href="{{route('client.create')}}" class="btn btn-primary">Reservar Equipos</a>
</div>
@endsection