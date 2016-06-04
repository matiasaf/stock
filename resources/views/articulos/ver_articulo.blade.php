
@extends('layouts.app')


@section('content')


     <div class="container centrado">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
              
            <form action="{{route('vender')}}" method="post" >

              <div class="input-group input-group-lg inputs">
                <span class="input-group-addon" id="sizing-addon1">Artículo</span>
                <input type="text" class="form-control" aria-describedby="sizing-addon1" 
                value="{{$articulo->tipo_articulo." - ".
                          $articulo->marca." - ".
                          $articulo->categoria." - ".
                          $articulo->talle}}"
                >
                
              </div>
             
              <div class="input-group input-group-lg inputs">
                <span class="input-group-addon glyphicon glyphicon-usd" id="sizing-addon1"></span>
                <input type="text" class="form-control" aria-describedby="sizing-addon1" 
                 value="{{$articulo->precio}}"
                 >
              
                
                </div>        
              
                <label class="btn btn-lg  btn-primary">
                  <input type="radio" name="forma_pago"  autocomplete="off" value="Efectivo" checked> Efectivo
                </label>
                <label class="btn btn-lg btn-primary">
                  <input type="radio" name="forma_pago"  autocomplete="off" value="Tarjeta"> Tarjeta
                </label>
                <label class="btn btn-lg btn-primary">
                  <input type="radio" name="forma_pago"  autocomplete="off" value="Cuenta"> Cuenta
                </label>
                  <button type="submit" class="btn btn-success btn-lg btn-vender">Vender</button>

                  <input type="hidden" name="id" id="id" value="{{ $articulo->id }}">

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  </form>
            </div>
          </div>       
        </div> 
       
       </div>
      </div>
    </div>

@endsection        