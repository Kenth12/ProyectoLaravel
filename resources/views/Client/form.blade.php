@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
    <h1>Reservar Equipos</h1>
    <form action="" method="POST">
    <div class="mb-3">
        <label for="id_sala" class="form-label">Seleccione La Sala</label>
            <select name="id_sala" id="id_sala" class="form-control">

            </select>
        </div>
        
        <div class="mb-3">
        <label for="id_equipo" class="form-label">Seleccione El Equipo</label>
            <select name="id_equipo" id="id_equipo" class="form-control">

            </select>
        </div>
    
    </form>
</div>
@endsection