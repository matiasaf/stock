@extends('layouts.app')

@section('content')


    <div class="container-fluid panel-stock">
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
              Articulos en Stock
            </div>
              

            <form action="{{ route('editar_precio')}}" method="post" id="form-edit">
            
            <input type="text" name="precio_edit" id="precio_edit" ><button class="btn btn-success">Editar precio</button>
            
            <input type="checkbox" name="marcarTodo" id="marcarTodo" />
            <input type="hidden" name="lista_id" id="lista_id" >

            <input type="hidden" name="_token" value="{{Session::token() }}">
            
          </form>


              <!-- Table -->

              <table id="table1" class="table tablesorter">
                <thead>
                  <tr>
                    <th>Codigo
                    <th>Categoría</th>
                    <th>Artículo</th>
                    <th>Marca</th>
                    <th>Talle</th>
                    <th>Color</th>
                    <th>Tela</th>
                    <th>Motivo</th>
                    <th>Friza</th>
                    <th>Capucha</th>
                    <th>Precio 
</th>
                    <th>¿Eliminar artículo?</th>


                  </tr>
                </thead>
                <tbody>


                  @foreach($articulos as $articulo)

			        <tr data-id="{{ $articulo->id }}">

			          <td>{{$articulo->codigo }}</td>
			          <td>{{$articulo->categoria}}</td>

			          <td>{{$articulo->tipo_articulo}}</td>
			          <td>{{$articulo->marca}}</td>
			          <td>{{$articulo->talle}}</td>

			          <td>{{$articulo->color}}</td>
			          <td>{{$articulo->tela}}</td>
			          <td>{{$articulo->motivo}}</td>
			          <td>{{$articulo->friza}}</td>
                <td>{{$articulo->capucha}}</td>
			          <td>{{$articulo->precio}} <input type="checkbox" class="micheckbox" value="{{$articulo->id}}"></td>

			     
               <td><button class="btn-delete">Eliminar</button></td>


			        </tr>



     			       @endforeach


                </tbody>
              </table>


            </div>
        </div>

      </div>
    </div>

  


	<form action="{{ route('eliminar',[ 'id' => ':USER_ID'])}}" method="get" id="form-delete">

    <input type="hidden" name="_token" value="{{Session::token() }}">
  </form>





@endsection




	@section('scripts')

      

    <script type="text/javascript" language="javascript" src="js/tablefilter.js"></script>
    <script type="text/javascript" language="javascript" src="js/tablesorter.js"></script>



    		<script>

    			$(document).ready( function() {

          $("#marcarTodo").change(function () {
                if($(this).is(':checked') ){
                  //Recorro todas las filas de la tabla
                  $('#table1 tbody tr').each(function (i) {
                    //Si la fila esta visible, busco el check de la fila y lo seteo.
                    if ($(this).is(":visible")){
                      //Prueba para mostrar por consola que anda bien
                      
                     $(this).find("input[type=checkbox]").prop("checked", true);
                    }
                  });
                } else {
                  $(".micheckbox").prop('checked', false); 
                }
              });




    				$('.btn-delete').click(function(e) {


              e.preventDefault();


    					var row = $(this).parents('tr');
    					var id = row.data('id');
              var form = $('#form-delete');
              var url = form.attr('action').replace(':USER_ID', id);
              var data = form.serialize();

              row.fadeOut();


              $.get(url , function (respuesta) {

                window.location.assign(respuesta);

              });



            });


    			});


    		</script>

        
        <script>

          $(document).ready( function(){

          var lista='';

          $('.btn-success').click( function(){



                $('.micheckbox:checked').each( function() {
                          
                          lista+= $(this).val() + ",";
                  }
                );

                fin= lista.length - 1;
                lista = lista.substring(0,fin);

               $('#lista_id').val(lista);
               
                
                var form= $('#form-edit');
                var data = form.serialize();

                var url= form.attr('action');

                 
                 $.post(url, data, function(respuesta){

                      window.location.assign(respuesta);

                   }); 



                });
       
          });

   

        </script>





	 <script language="javascript" type="text/javascript">
        /*Table sorter*/
        $(document).ready(function()
        {
            $("#table1").tablesorter();
        }
         );

    	var filtersConfig = {

        rows_counter: true,
        btn_reset: true,
        loader: true,
        status_bar: true,

    	};

      	var tf = new TableFilter('table1',filtersConfig);
      	tf.init();
    </script>
    





    @endsection
