@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-light table-bordered">
          <tbody>
            <tr class="texr-center">
              <td class="texr-center" align="center" colspan="4">Préstamo</td>
            </tr>
            <tr>
              <th width='20%'>Monto Crédito</th>
              <th width='15%' class="texr-center">TI Anual</th>
              <th width='20%' class="texr-center">Número de Pagos</th>
              <th width='20%' class="texr-center">Pago Mensual</th>
            </tr>
            <tr>
              <td width='40%'><?php echo $Prestamo['MontoCredito'] ?></td>
              <td width='15%' class="texr-center"><?php echo $Prestamo['TIAnual'] ?></td>
              <td width='20%' class="texr-center"><?php echo $Prestamo['NumeroPagos'] ?></td>
              <td width='20%' class="texr-center"><?php echo $Prestamo['PagoMensual'] ?></td>
            </tr>
          </tbody>
        </table>
        </tbody>
        </table>
        
        <div>
        <a href="{{route('PDF')}}" class="btn btn-primary" href="#" role="button">PDF Amortización</a>
        </div>
      </div>
      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  


    </div>
 
  </div>

  @endsection