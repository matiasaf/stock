@extends('layouts.app')



@section('content')

    <form action="{{route('buscar')}}" method="post" >
    <div class="container bloque centrado">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <div class="input-group">
          
         
         
            <input type="text" name="codigo" class="form-control" placeholder="Ingrese el código del producto...">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
            </span>
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          </div><!-- /input-group -->
        </div>
      </div>
    </div>

    </form>






@endsection
