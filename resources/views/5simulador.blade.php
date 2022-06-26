@extends('layouts.app')
@section('content')


    <div id="contenedorTa">
        <div name="frmPrestamo" id="frmPrestamo">
            <div class="control">
                <label for="nombre">Nombre: <input type="text" name="nombre" id="nombre" placeholder="nombre"></label>
            </div>
            <div class="control">
                <label for="fecha">Fecha: <input type="date" name="fecha" id="fecha" placeholder="fecha"></label>
            </div>
            <div class="control">
                <label for="monto">Monto: <input type="number" name="monto" id="monto" placeholder="monto" min="500" step="500"></label>
            </div>
            <div class="control">
                <label for="periodo">Periodo:
                    <select name="periodo" id="periodo">
                        <option value="semanal">semanal</option>
                        <option value="quincenal">quincenal</option>
                        <option value="mensual">mensual</option>
                    </select>
                </label>
            </div>
            <div class="control">
                <label for="interes">Interés: <input type="number" name="interes" id="interes" placeholder="interés" min="5" max="100" step=".01"></label>
            </div>
            <div class="control">
                <label for="plazo">Plazo (meses):
                    <input type="number" name="plazo" id="plazo" min="1" max="12" step="1" required>
                </label>
            </div>

            <button id="simular" onclick="simularPrestamo()">Simular préstamo</button>
        </div>
    </div>

    <div id="contenedorTabla">
        <div class="header">
        <h2>Prestamo</h2>
        </div>      
        <div id="prestamo">     
        </div>
        <br>
        <br>
        <div class="header">
        <h2>Amortizacion</h2>
        </div>      
        <div id="amortizaciones">     
        </div>
    </div>

    
<!-- </body>
</html> -->
@endsection