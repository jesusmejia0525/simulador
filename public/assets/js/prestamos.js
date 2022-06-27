var monto, plazo, tasaAnual, fecha, tasaMensual, 
mensualidad,intereses, impuestos, capital, insoluto,
primerInteres = 0, primerImpuesto = 0, primerCapital = 0, primerInsoluto = 0

var establecerDatos = function(){
    monto = document.getElementById('monto').value
    plazo = document.getElementById('plazo').value
    tasaAnual = document.getElementById('interes').value
    fecha = new Date(document.getElementById('fecha').value)

    /* no se han establecido rb para seleccionar el tipo de plazo
    if(plazoMensual === true) {
        this.plazo = plazo
    } else {
        this.plazo = plazo
    } */
}

function calcularTasaMensual(){
    tasaMensual = (tasaAnual / 100) / 12
    return tasaMensual
}

function PagoMensual() {
    var denominador = Math.pow((1 + calcularTasaMensual()), plazo) - 1
    mensualidad = (calcularTasaMensual() + (calcularTasaMensual() / denominador)) * monto
    return mensualidad
}

function calcularTotalPrestamo() {
    var totalPrestamo = 0;
    for (let i = 0; i < plazo; i++) {
        totalPrestamo += mensualidad
    }
    return totalPrestamo
}

function obtenerPagoMensual() {
    return Math.round(PagoMensual(), 2)
}

function obtenerTotalPrestamo() {
    return Math.round(calcularTotalPrestamo(), 2)
}

function Intereses() {
    if (primerInteres == 0) {
        intereses = tasaMensual * monto
        primerInteres = intereses
        alert(tasaMensual)
    } else {
        intereses = tasaMensual * insoluto
    }
    return intereses
}

function Impuestos() {
    if (primerImpuesto == 0) {
        impuestos = primerInteres
        primerImpuesto = impuestos
    } else {
        impuestos = Intereses() 
    }
    return impuestos
}

function Capital() {
    if (primerCapital == 0) {
        capital = mensualidad - primerInteres
        primerCapital = capital
    } else {
        capital = mensualidad - Intereses()
    }
    return capital
}

function SaldoInsoluto() {
    if (primerInsoluto == 0) {
        insoluto = monto - primerCapital
        primerInsoluto = insoluto
    } else {
        insoluto -= Capital()
    }
    return insoluto
}

function simularPrestamo() {
    establecerDatos()
    PagoMensual()
    calcularTotalPrestamo()

    var acumIntereses = 0, acumImpuestos = 0, acumCapital = 0
    // Tabla Monto de prestamo
<<<<<<< HEAD
    var miArreglo2 = ['Monto Credito','TI anual', 'Numero de Pagos','Pago Mensual']

=======
    var miArreglo2 = ['Monto Credito', 'TI anual', 'Numero de Pagos', 'Pago Mensual']
    var tablaPrestamo = document.getElementById('prestamo')
    var tablaP = document.createElement('table')
    var cabeceraTablaP = document.createElement('thead')
    var cuerpoTablaP = document.createElement('tbody')
    var pieTablaP = document.createElement('tfoot')
    var filaP = document.createElement("tr")

    // este for, lo utilizo para el header de la tabla
    for (let j = 0; j < miArreglo2.length; j++) {
        var celdaP = document.createElement("td")
        var textoP = miArreglo2[j]
        var textoCeldaP = document.createTextNode(textoP)
        celdaP.appendChild(textoCeldaP)
        filaP.appendChild(celdaP)
    }
    cabeceraTablaP.appendChild(filaP)
    var filaP = document.createElement("tr")
    for (let j = 0; j < miArreglo2.length; j++) {
        var celdaP = document.createElement("td")
        var textoP // el texto a mostrar en la celda
        switch (miArreglo2[j]) {
            case 'Monto Credito':
                textoP = '$' + monto
                break
            case 'TI anual':
                textoP = tasaAnual + '%'
                break
            case 'Numero de Pagos':
                textoP = plazo
                break
            case 'Pago Mensual':
                textoP = '$' + mensualidad.toFixed(2)
                break
            default:
                textoP = null
                break
        }
        var textoCeldaP = document.createTextNode(textoP)
        celdaP.appendChild(textoCeldaP)
        filaP.appendChild(celdaP)
    }
    cuerpoTablaP.appendChild(filaP)

    tablaP.appendChild(cabeceraTablaP)
    tablaP.appendChild(cuerpoTablaP)
    //tabla.appendChild(pieTabla)
    tablaPrestamo.appendChild(tablaP)

    //Tabla de amortizacion
>>>>>>> parent of b3b297c (Se creo la funcionalidad de las tablas y mustra tablas correctamente)
    var miArreglo = ['No.', 'Fecha', 'Mensualidad', 'Intereses', 'Impuestos', 'Capital', 'Insoluto']

    var tablaAmortizaciones = document.getElementById('amortizaciones')
    var tabla = document.createElement('table')
    var cabeceraTabla = document.createElement('thead')
    var cuerpoTabla = document.createElement('tbody')
    var pieTabla = document.createElement('tfoot')
    var fila = document.createElement("tr")

    // este for, lo utilizo para el header de la tabla
    for (let j = 0; j < miArreglo.length; j++) {
        var celda = document.createElement("td")
        var texto = miArreglo[j]
        var textoCelda = document.createTextNode(texto)
        celda.appendChild(textoCelda)
        fila.appendChild(celda)
    }
    
    cabeceraTabla.appendChild(fila)

    // este for, lo utilizo para el cuerpo de la tabla
    for (let i = 0; i < plazo; i++) {
        var intereses = Intereses(), impuestos = Impuestos(), capital = Capital(), insoluto = SaldoInsoluto()
        
        var fila = document.createElement("tr")
        for (let j = 0; j < miArreglo.length; j++) {
            var celda = document.createElement("td")
            var texto // el texto a mostrar en la celda
            switch(miArreglo[j]) {
                case 'No.':
                    texto = (i+1)
                    break
                case 'Fecha':
                    texto = fecha.getDate() + '/' + fecha.getMonth() + '/' + fecha.getFullYear()
                    break
                case 'Mensualidad':
                    texto = '$' + mensualidad.toFixed(2)
                    break
                case 'Intereses':
                    texto = '$' + intereses.toFixed(2)
                    break
                case 'Impuestos':
                    texto = '$' + impuestos.toFixed(2)
                    break
                case 'Capital':
                    texto = '$' + capital.toFixed(2)
                    break
                case 'Insoluto':
                    texto = '$' + Math.abs(insoluto.toFixed(2))
                    break
                default:
                    texto = null
                    break
            }
            var textoCelda = document.createTextNode(texto)
            celda.appendChild(textoCelda)
            fila.appendChild(celda)
        }
        cuerpoTabla.appendChild(fila)
    }

    tabla.appendChild(cabeceraTabla)
    tabla.appendChild(cuerpoTabla)
    //tabla.appendChild(pieTabla)
    tablaAmortizaciones.appendChild(tabla)

    /*       
        for (let i = 0; i < plazo; i++)
        {
        acumIntereses += intereses;
        acumImpuestos += impuestos;
        acumCapital += capital;
        }
        amortizaciones += "Intereses: $" + Math.Round(acumIntereses, 2)
        amortizaciones += "Impuestos: $" + Math.Round(acumImpuestos, 2)
        amortizaciones += "Capital: $" + Math.Round(acumCapital, 2)
    */
}