@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="imageHipotecario"></div>
    <div class="frmHipotecario">
        <h3 id="h1-form">Ingrese los datos de su préstamo hipotecario</h3>
        <form action="{{ route ('tablas')}}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="nombre">
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input class="form-control"  type="text" name="domicilio" id="domicilio" placeholder="domicilio">
            </div><div class="form-group">
                <label for="cp">Código Postal:</label>
                <input class="form-control"  type="number" name="cp" id="cp" placeholder="código postal">
            </div>
            <div class="form-group">
                <label for="seguroVida">¿Tiene seguro de Vida?:
                    <select class="form-control" name="respuesta" id="seguroVida">
                        <option class="form-control"  value="si">Si</option>
                        <option class="form-control" value="no">No</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label for="seguroInmueble">¿Tiene seguro de daños del inmueble?:</label>
                    <select class="form-control" name="respuesta" id="seguroInmueble">
                        <option class="form-control"  value="si">Si</option>
                        <option class="form-control" value="no">No</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label for="cancelación">Coste de cancelación:</label>
                <input class="form-control"  type="number" name="cancelación" id="cancelación" placeholder="cancelación">
            </div>
             <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input class="form-control"  type="date" name="fecha" id="fecha" placeholder="fecha">
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input class="form-control"  type="number" name="monto" id="monto" placeholder="monto" min="500" >
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
                <button type="submit" class="btn btn-success btn-lg">Simular</button>
            </div>
        </form>
    </div>
</div>
@endsection

