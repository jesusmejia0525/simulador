@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="imageNomina"></div> 
    <div class="frmNomina">
        <h3 id="h1-form">Ingrese los datos de su nómina</h3>
        <form action="{{ route ('tablas')}}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" value="{{Auth::user()->name}}" type="text" name="nombre" id="nombre" placeholder="Nombre" required pattern="[A-Za-z ]{3,100}">
                <h12>*Ingrese solo letras*</h12> 
            </div>
            <div class="form-group">
                <label for="contrato">Tipo de contrato:</label>
                <select class="form-control" name="contrato" id="contrato">
                    <option class="form-control"  value="jornada_completa">Jornada completa</option>
                    <option class="form-control" value="jornada_parcial">Jornada parcial</option>
                    <option class="form-control" value="contrato_indefinido">Contrato indefinido</option>
                </select>
            </div>
            <div class="form-group"> 
                <label for="situacion_emp">Situación personal del empleado:</label>
                <select class="form-control" name="situacion_emp" id="situacion_emp">
                    <option class="form-control"  value="casado">Casado</option>
                    <option class="form-control" value="soltero">Soltero</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bj">Baja Medica:</label>
                <select class="form-control" name="bj" id="bj">
                    <option class="form-control"  value="medica">Medica</option>
                    <option class="form-control" value="peternidad">Paternidad</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pagos">Cantidad de pagos extras:</label>
                <input class="form-control" type="number" name="pagos" id="pagos" placeholder="Pagos" required step="1" min="1" max="100" >
                <h12>*Ingrese solo números*</h12> 
            </div>
             <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input class="form-control"  type="date" name="fecha" id="fecha" placeholder="Fecha">
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input class="form-control"  type="number" name="monto" id="monto" placeholder="Monto" min="500" >
                <h12>*Ingrese solo números*</h12> 
            </div> 
            <div class="form-group">
                <label for="periodo">Periodos del plazo de pago:</label>
                <select class="form-control" name="periodo" id="periodo">
                    <option class="form-control"  value="semanal">Semanal</option>
                    <option class="form-control" value="quincenal">Quincenal</option>
                    <option class="form-control" value="mensual">Mensual</option>
                </select>
                </label>
            </div>
            <div class="form-group">
                <label for="plazo">Número de plazos:</label>
                <input class="form-control"  type="number" name="plazo" id="plazo" min="1" max="120" step="1">
                <h12>*Ingrese solo números Min:1, Max:120*</h12> 
            </div> 
            <div class="form-group">
                <label for="interes">Intéres:</label>
                <input class="form-control" type="number" name="interes" id="interes" placeholder="Interés %" min="5" max="100" step=".01">
                <h12>*Ingrese solo números Min:1, Max:100*</h12> 
            </div>    
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">Simular</button>
            </div>
        </form>
    </div>
</div>
@endsection
