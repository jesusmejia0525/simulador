@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="imageA"></div>
    <div class="frmA">
        <h3 id="h1-form">Ingrese los datos de su préstamo hipotecario automóvil</h3>
        <form action="{{ route ('tablas')}}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca">
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input class="form-control"  type="text" name="modelo" id="modelo" placeholder="Modelo">
            </div>
           <div class="form-group">
                <label for="ano">Año automovil:</label>
                <input class="form-control"  type="text" name="ano" id="ano" placeholder="Año" required minlength="2" maxlength="4" size="10">
            </div>
            <div class="form-group">
                <label for="version">Versión:</label>
                <input class="form-control"  type="text" name="versiom" id="version" placeholder="Version">
            </div>
            <div class="form-group">
                <label for="km">Kilometraje aproximado:</label>
                <input class="form-control"  type="number" name="kilometraje" id="kilometraje" placeholder="Kilometraje" min="1" max="500">
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input class="form-control"  type="text" name="color" id="color" placeholder="Color">
            </div>
            <div class="form-group">
                <label for="estado">Estado al que pertenece la placa:</label>
                <input class="form-control"  type="text" name="estPlaca" id="estPlaca" placeholder="Estado Placa">
            </div>
            <div class="form-group">
                <label for="cantDueños">Cantidad de dueños que ha tenido el auto:</label>
                <input class="form-control"  type="number" name="dueños" id="dueños" placeholder="Dueños" min="1" max="120" step="1">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del dueño del auto:</label>
                <input class="form-control"  type="text" name="nombre" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo del dueño del auto:</label>
                <input class="form-control"  type="email" name="correo" id="correo" placeholder="Correo" pattern=".+@globex\.com" size="30" required>
            </div>
            <div class="form-group">
                <label for="numTel">Número telefónico del dueño del auto:</label>
                <input class="form-control"  type="text" name="numTel" id="numTel" placeholder="Número Telefónico"required minlength="1" maxlength="10" size="10">
            </div>
            <div class="form-group">
                <label for="monto">Monto de prestamo solicitado:</label>
                <input class="form-control"  type="number" name="monto" id="monto" min="500">
            </div>
            <div class="form-group">
                <label for="periodo">Periodos de pago:</label>
                    <select class="form-control" name="periodo" id="periodo">
                        <option class="form-control"  value="semanal">semanal</option>
                        <option class="form-control" value="quincenal">quincenal</option>
                        <option class="form-control" value="mensual">mensual</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label for="interes">Interes:</label>
                <input class="form-control" type="number" name="interes" id="interes" placeholder="interés" min="5" max="100" step=".01">
            </div>
            <div class="form-group">
                <label for="plazo">Plazo:</label>
                <input class="form-control"  type="number" name="plazo" id="plazo" min="1" max="120" step="1">
            </div>
            <div class="form-group">
                <label for="cancelación">Coste de cancelación:</label>
                <input class="form-control"  type="number" name="cancelación" id="cancelación" placeholder="cancelación" min="1" max="500">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">Simular</button>
            </div>
        </form>
    </div>
</div>
@endsection
