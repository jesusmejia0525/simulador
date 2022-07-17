@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="imageA"></div>
    <div class="frmA">
        <h3 id="h1-form">Ingrese los datos de su préstamo hipotecario automóvil</h3>
        <form action="{{ route ('tablas')}}" method="POST">
        {{ csrf_field() }} 
        <div class="form-group">
            <label for="nombre">Nombre:</label>
<<<<<<< HEAD
            <input class="form-control"  type="text" value="{{Auth::user()->name}}" name="nombre" id="nombre" placeholder="Nombre" required pattern="[A-Za-z ]{3,100}">
=======
            <input class="form-control"  type="text" name="nombre" id="nombre" placeholder="Nombre" required pattern="[A-Z a-z]{3,100}">
>>>>>>> c1ce92507a1bd73b0c1b7598f3a90b9b54fcc3d6
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca" required pattern="[A-Z a-z]{3,100}">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input class="form-control"  type="text" name="modelo" id="modelo" placeholder="Modelo" required pattern="[A-Z a-z]{3,100}">
        </div>
       <div class="form-group">
            <label for="ano">Año automóvil:</label>
            <select class="form-control" name="ano" id="ano" placeholder="Año" required>
                <option class="form-control" value="2000">2000</option>
                <option class="form-control" value="2001">2001</option>
                <option class="form-control" value="2002">2002</option>
                <option class="form-control" value="2003">2003</option>
                <option class="form-control" value="2004">2004</option>
                <option class="form-control" value="2005">2005</option>
                <option class="form-control" value="2006">2006</option>
                <option class="form-control" value="2007">2007</option>
                <option class="form-control" value="2008">2008</option>      
                <option class="form-control" value="2009">2009</option>
                <option class="form-control" value="2010">2010</option>
                <option class="form-control" value="2011">2011</option>
                <option class="form-control" value="2012">2012</option>
                <option class="form-control" value="2013">2013</option>
                <option class="form-control" value="2014">2014</option>
                <option class="form-control" value="2015">2015</option>
                <option class="form-control" value="2016">2016</option>
                <option class="form-control" value="2017">2017</option>
                <option class="form-control" value="2018">2018</option>
                <option class="form-control" value="2019">2019</option>
                <option class="form-control" value="2020">2020</option>
                <option class="form-control" value="2021">2021</option>
                <option class="form-control" value="2022">2022</option>
            </select>
        </div>
        <div class="form-group">
            <label for="version">Versión:</label>
            <input class="form-control"  type="text" name="versiom" id="version" placeholder="Versión" required pattern="{3,100}">
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
            <label for="color">Color del automóvil:</label>
            <input class="form-control"  type="text" name="color" id="color" placeholder="Color" required pattern="[A-Z a-z]{3,100}">
        </div>
        <div class="form-group">
            <label for="estPlaca">Estado al que pertenece la placa:</label>
<<<<<<< HEAD
            <select class="form-control" name="ano" id="ano" placeholder="Año" required>
                <option class="form-control" value="Aguascalientes">Aguascalientes</option>
                <option class="form-control" value="Baja California">Baja California</option>
                <option class="form-control" value="Campeche">Campeche</option>
                <option class="form-control" value="Chiapas">Chiapas</option>
                <option class="form-control" value="Chihuahua">Chihuahua</option>
                <option class="form-control" value="Ciudad de Mexico">Ciudad de México</option>
                <option class="form-control" value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                <option class="form-control" value="Colima">Colima</option>
                <option class="form-control" value="Durango">Durango</option>      
                <option class="form-control" value="Guanajuato">Guanajuato</option>
                <option class="form-control" value="Guerrero">Guerrero</option>
                <option class="form-control" value="Hidalgo">Hidalgo</option>
                <option class="form-control" value="Jalisco">Jalisco</option>
                <option class="form-control" value="Estado de Mexico">Estado de México</option>
                <option class="form-control" value="Michoacan">Michoacán</option>
                <option class="form-control" value="Morelos">Morelos</option>
                <option class="form-control" value="Nayarit">Nayarit</option>
                <option class="form-control" value="Nuevo Leon">Nuevo León</option>
                <option class="form-control" value="Oaxaca">Oaxaca</option>
                <option class="form-control" value="Puebla">Puebla</option>
                <option class="form-control" value="Queretaro">Querétaro</option>
                <option class="form-control" value="Quintana Roo">Quintana Roo</option>
                <option class="form-control" value="San Luis Potosí">San Luis Potosí</option>
                <option class="form-control" value="Sinaloa">Sinaloa</option>
                <option class="form-control" value="Sonora">Sonora</option>
                <option class="form-control" value="Tabasco">Tabasco</option>
                <option class="form-control" value="Tamaulipas">Tamaulipas</option>
                <option class="form-control" value="Tlaxcala">Tlaxcala</option>
                <option class="form-control" value="Veracruz">Veracruz</option>
                <option class="form-control" value="Yucatan">Yucatán</option>
                <option class="form-control" value="Zacatecas">Zacatecas</option>
            </select>

=======
            <input class="form-control"  type="text" name="estPlaca" id="estPlaca" placeholder="Estado Placa" required>
>>>>>>> c1ce92507a1bd73b0c1b7598f3a90b9b54fcc3d6
        </div>
        <div class="form-group">
            <label for="monto">Monto:</label>
            <input class="form-control"  type="number" name="monto" id="monto" placeholder="Monto" min="500" required>
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
                <label for="plazo">Duración del plazo:</label>
                <input class="form-control"  type="number" name="plazo" id="plazo" min="1" max="120" step="1"required>
            </div>
        <div class="form-group">
<<<<<<< HEAD
            <label  for="interes">Interes:</label>
            <input class="form-control" type="number" name="interes" id="interes" placeholder="Interés %" min="5" max="100" step=".01">
=======
            <label for="interes">Interes:</label>
            <input class="form-control" type="number" name="interes" id="interes" placeholder="Interés %" min="5" max="100" step=".01" required>
>>>>>>> c1ce92507a1bd73b0c1b7598f3a90b9b54fcc3d6
        </div>
        <div class="form-group">
            <label for="cancelación">Coste de cancelación:</label>
            <input class="form-control"  type="number" name="cancelación" id="cancelación" placeholder="Cancelación %" min="5" max="100" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">Simular</button>
        </div>
        </form>
    </div>
</div>
@endsection