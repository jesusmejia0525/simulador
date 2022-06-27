@extends('layouts.app')
@section('content')
<!-- <form action="{{ route ('tablas')}}" method="POST">

                        {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="category" >categoria</label>
                    <input type="text" name="category" id="category">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-dark"></button>
            </div>
           
        </form> -->
<div class="container" id="registration-form">
    <div class="image"></div>
    <div class="frm">
        <h3 id="h1-form">Ingrese los datos de su prestamo</h3>
        <form action="{{ route ('tablas')}}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="nombre">
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
                <label for="periodo">Periodo:</label>
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
<!-- 
     <div class="form-group">
                <label for="periodo">Periodo:
                    <select class="form-control" name="periodo" id="periodo">
                        <option value="semanal">semanal</option>
                        <option value="quincenal">quincenal</option>
                        <option value="mensual">mensual</option>
                    </select>
                </label>
            </div>
 -->