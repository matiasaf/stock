 
@extends('layouts.app')



@section('content')

 <div class="container">
      <div class="row">
        <div class="page-header">
          <h2>Ventas</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <table id="tabla_ventas" class="table table-striped">
            <tbody>
              <tr>
                <th>Fecha</th>
                <th>Articulo</th>
                <th>Precio</th>
                <th>Tipo de venta</th>
              </tr>
              
              @foreach($venta_articulo_log as $articulo_vendido)
              <tr>
                <td>{{$articulo_vendido->created_at}}</td>
                <td>{{$articulo_vendido->tipo_articulo}}</td>
                <td>{{$articulo_vendido->precio}}</td>
                <td>{{$articulo_vendido->forma_pago}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
       

        
      </div>
    </div>
  

 <script type="text/javascript" language="javascript" src="js/tablefilter.js"></script> 
    <script language="javascript" type="text/javascript"> 
        /*Table sorter*/
    var filtersConfig = {
        filters_row_index: 1, 
        col_3:"select", 
        rows_counter: true,
        btn_reset: true,
        loader: true,
        status_bar: true,
        
    }; 
      var tf = new TableFilter('tabla_ventas',filtersConfig);  
      tf.init();   
    </script>  


  
  @stop