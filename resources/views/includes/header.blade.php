  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">CODIGO | Control de Stock</a>
        <!-- button type="button" class="btn btn-default navbar-btn navbar-right">Stock</button>
        <button type="button" class="btn btn-default navbar-btn navbar-right">Cargar artículo</button>
        <button type="button" class="btn btn-default navbar-btn navbar-right">Ventas</button> -->
        <div class="btn-group navbar-btn navbar-right" role="group" aria-label="...">
          <a href="{{route('ver_stock')}}" class="btn btn-default">Stock</a>
          <a href="{{route('ver_ventas')}}" class="btn btn-default">Ventas</a>
          
          <a href="{{route('agregar')}}" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
          
        </div>
      </div>
    </nav>