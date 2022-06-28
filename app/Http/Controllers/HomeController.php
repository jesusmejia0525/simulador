<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function FrmAuto()
    {
        return view('FrmAuto');
    }
    public $monto;
    public $plazo;
    public $tasaAnual;
    public $fecha;
    public $tasaMensual;
    public $mensualidad;
    public $intereses;
    public $impuestos;
    public $capital;
    public $insoluto;
    public $primerInteres = 0;
    public $primerImpuesto = 0;
    public $primerCapital = 0;
    public $primerInsoluto = 0;
    public function tablas(Request $request)
    {


        $nombre = $request->nombre;
        $this->fecha =  $request->fecha;
        $this->monto = $request->monto;
        $periodo = $request->periodo;
        $this->tasaAnual = $request->interes;
        $this->plazo = $request->plazo;

        // Tabla Monto de prestamo
        // $miArreglo2 = ['Monto Credito', 'TI anual', 'Numero de Pagos', 'Pago Mensual'];
        $Prestamo=array(
           'MontoCredito'=> $request->monto,
           'TIAnual'=> $this->tasaAnual,
           'NumeroPagos'=> $this->plazo,
           'PagoMensual'=>round(HomeController::PagoMensual($request), 2)
       ); 

        // Tabla Monto de Amortizacion
        // miArreglo = ['No.', 'Intereses', 'Impuestos', 'Capital', 'Insoluto']
        HomeController::PagoMensual();
        HomeController::calcularTotalPrestamo();
     

        for ($i = 0; $i <  $this->plazo; $i++) {

            $Amortizacion[] = array(
                'No' => ($i + 1),
                'Intereses' => round(HomeController::Intereses(), 2),
                'Capital' => round(HomeController::Capital(), 2),
                'Insoluto' => round(HomeController::SaldoInsoluto(), 2)

            );
        }
        return view('tablas', compact('Amortizacion','Prestamo'));
    }




    public function calcularTasaMensual()
    {
        $this->tasaMensual = ($this->tasaAnual / 100) / 12;
        return  $this->tasaMensual;
    }

    function PagoMensual()
    {
        $denominador = pow((1 +  HomeController::calcularTasaMensual()), $this->plazo) - 1;
        $this->mensualidad = (HomeController::calcularTasaMensual() + (HomeController::calcularTasaMensual() / $denominador)) * $this->monto;
        return  $this->mensualidad;
    }

    function calcularTotalPrestamo()
    {
        $totalPrestamo = 0;
        for ($i = 0; $i < $this->plazo; $i++) {
            $totalPrestamo += $this->mensualidad;;
        }
        return $totalPrestamo;
    }

    function obtenerPagoMensual()
    {
        return round(HomeController::PagoMensual(), 2);
    }

    function obtenerTotalPrestamo()
    {
        return round(HomeController::calcularTotalPrestamo(), 2);
    }

    function Intereses()
    {
        if ($this->primerInteres == 0) {
            $this->intereses = $this->tasaMensual * $this->monto;
            $this->primerInteres =  $this->intereses;
        } else {
            $this->intereses = $this->tasaMensual * $this->insoluto;
        }
        return  $this->intereses;
    }

    function Impuestos()
    {
        if ($this->primerImpuesto == 0) {
            $this->impuestos = $this->primerInteres;
            $this->primerImpuesto =  $this->impuestos;
        } else {
            $this->impuestos = HomeController::Intereses();
        }
        return  $this->impuestos;
    }

    function Capital( )
    {
        if ($this->primerCapital == 0) {
            $this->capital = $this->mensualidad - $this->primerInteres;
            $this->primerCapital =  $this->capital;
        } else {
            $this->capital = $this->mensualidad - HomeController::Intereses();
        }
        return  $this->capital;
    }

    function SaldoInsoluto( )
    {
        if ($this->primerInsoluto == 0) {
            $this->insoluto = $this->monto - $this->primerCapital;
            $this->primerInsoluto =  $this->insoluto;
        } else {

            $this->insoluto -= HomeController::Capital();
        }
        return  $this->insoluto;
    }

}
