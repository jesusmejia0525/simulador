@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="imageA"></div>
    <div class="frmA">
        <h3 id="h1-form">Ingrese los datos de su préstamo hipotecario automóvil</h3>
        <form action="{{ route ('tablas')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nombre">Nombre del dueño del auto:</label>
            <input class="form-control"  type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="marca">Marca:</label>
            <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca" required>
            @error('marca')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input class="form-control"  type="text" name="modelo" id="modelo" placeholder="Modelo" required>
            @error('modelo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       <div class="form-group">
            <label for="ano">Año automovil:</label>
            <input class="form-control"  type="text" name="ano" id="ano" placeholder="Año" required minlength="2" maxlength="4" size="10">
            @error('ano')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="version">Versión:</label>
            <input class="form-control"  type="text" name="versiom" id="version" placeholder="Version" required>
            @error('version')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="km">Kilometraje aproximado:</label>
            <select class="form-control" name="km" id="km" placeholder="km" required>
                    <option class="form-control"  value="0 - 5,000">0 - 5,000</option>
                    <option class="form-control" value="5,001 - 10,000">5,001 - 10,000</option>
                    <option class="form-control" value="10,001 - 20,000">10,001 - 20,000</option>
                    <option class="form-control" value="20,001 - 30,000">20,001 - 30,000</option>
                    <option class="form-control" value="30,001 - 40,000">30,001 - 40,000</option>
                    <option class="form-control" value="40,001 - 50,000">40,001 - 50,000</option>
                    <option class="form-control" value="50,001 - 60,000">50,001 - 60,000</option>
                    <option class="form-control" value="60,001 - 70,000">60,001 - 70,000</option>
                    <option class="form-control" value="70,001 - 80,000">70,001 - 80,000</option>
                    <option class="form-control" value="80,001 - 90,000">80,001 - 90,000</option>
                    <option class="form-control" value="90,001 - 100,000">90,001 - 100,000</option>
                    <option class="form-control" value="100,001 - 125,000">100,001 - 125,000</option>
                    <option class="form-control" value="125,001 - 150,000">125,001 - 150,000</option>
                </select>
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input class="form-control"  type="text" name="color" id="color" placeholder="Color" required>
            @error('color')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="estado">Estado al que pertenece la placa:</label>
            <input class="form-control"  type="text" name="estPlaca" id="estPlaca" placeholder="Estado Placa" required>
            @error('estado')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="monto">Monto:</label>
            <input class="form-control"  type="number" name="monto" id="monto" min="500" required>
            @error('monto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="periodo">Periodos del plazo de pago:</label>
            <input class="form-control"  type="number" name="periodo" id="periodo" placeholder="Plazo" min="1" max="120" step="1"required>
            <select class="form-control" name="periodo" id="periodo">
                <option class="form-control"  value="semanal">Semanal</option>
                <option class="form-control" value="quincenal">Quincenal</option>
                <option class="form-control" value="mensual">Mensual</option>
            </select>
            </label>
        </div>
        <div class="form-group">
            <label for="interes">Interes:</label>
            <input class="form-control" type="number" name="interes" id="interes" placeholder="Interés" min="5" max="100" step=".01">
        </div>
        <div class="form-group">
            <label for="cancelación">Coste de cancelación:</label>
            <input class="form-control"  type="number" name="cancelación" id="cancelación" placeholder="Cancelación" min="1" max="500" required>
            @error('cancelación')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">Simular</button>
        </div>
        </form>
    </div>
</div>
@endsection
