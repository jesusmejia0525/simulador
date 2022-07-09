@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <br>
            <table class="table table-light table-bordered">
                <tbody>
                    <tr class="texr-center">
                        <td class="texr-center"  align="center"  colspan="4">Préstamo</td>
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
            
         
            <table class="table table-light table-bordered">
                <tbody>
                <tr class="texr-center">
                        <td class="texr-center"  align="center"  colspan="4">Amortización</td>
                    </tr>
                    <tr>
                        <th width='40%'>Num. Pago</th>
                        <th width='15%' class="texr-center">Pago Interés</th>
                        <th width='20%' class="texr-center">Pagos Capital</th>
                        <th width='20%' class="texr-center">Saldo</th>
                       
                    </tr>
                    <?php foreach ($Amortizacion as $indice => $amortizacion) { ?>
                        <tr>
                       
                            <td width='40%'><?php echo $amortizacion['No'] ?></td>
                            <td width='15%' class="texr-center"><?php echo $amortizacion['Intereses'] ?></td>
                            <td width='20%' class="texr-center"><?php echo $amortizacion['Capital'] ?></td>
                            <td width='20%' class="texr-center"><?php echo $amortizacion['Insoluto'] ?></td>
                           
                        </tr>
                    <?php } ?>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@endsection
