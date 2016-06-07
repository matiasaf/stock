@extends('layouts.app')


@section('content')


  
    <div class="container-fluid panel-stock">
      <div class="row">
        <div class="col-xs-12">
          

          <form action="{{route('nuevo')}}" method="post">
            

            <!--Codigo -->
            <div class="row">
              <div class="col-xs-3">
                Codigo 
                <input type="text" name="codigo" id="codigo">
              </div>
              <div class="col-xs-3">
                Precio
                <input type="text" name="precio" id="precio">
              </div>
              
            </div>
            
          
            <div class="row">
              <div class="col-xs-1">
                <h3><span class="label label-primary">Cat</span></h3>
                <select name="CAT" id="CAT" class="form-control" size=20>
                  <option value="Niños"  selected>Niños
                  <option value="Niñas">Niñas
                  <option value="Hombre">Hombre
                  <option value="Mujer">Mujer
                </select>
             </div> 
             <div class="col-xs-2">
                <h3><span class="label label-primary">Articulo</span></h3>
                <select name="ART" id="ART" class="form-control" size=20>
               
                <script type="text/javascript">makeModel.printOptions("ART")</script>
                </select>
             </div> 
             <div class="col-xs-1">
                <h3><span class="label label-primary">Tela</span></h3>
                <select name="TELA" id="TELA" class="form-control" size=20>
                <script type="text/javascript">makeModel.printOptions("TELA")</script>
                </select>
              </div> 
             <div class="col-xs-1">
              <h3><span class="label label-primary">Motivo</span></h3>
                <select name="MOTIVO" id="MOTIVO" class="form-control" size=20>
                  <option value="-" selected>-
                  <option value="liso">Liso
                  <option value="estampado">Estampado
                  <option value="rayado">Rayado
                  <option value="mil rayas">Mil rayas
                  <option value="rayas 1/2">Rayas 1/2
                  <option value="cuadros chicos">Cuadros chicos
                  <option value="cuadros">Cuadros
                  <option value="fantasia">Fantasía  
                </select>
               </div> 
             <div class="col-xs-1">
              <h3><span class="label label-primary">Marca</span></h3>
                <select name="MARCA" id="MARCA" class="form-control" size=20>
                  <option value="-" selected>-</option>
                  <option value="Taverniti">Taverniti
                  <option value="Mistral">Mistral
                  <option value="Unimog">Unimog
                  <option value="John Doe">John Doe
                  <option value="Viento Sur">Viento Sur
                  <option value="Via Difussion">Via Difussion
                  <option value="Minette">Minette
                  <option value="Gustamas">Gustamas 
                  <option value="Pink Mania">Pink Mania
                </select>
              </div> 
             <div class="col-xs-1">
                <h3><span class="label label-primary">Talle</span></h3>
                <select name="TALLE" id="TALLE" class="form-control" size=20>
                  <option value="T1" selected>T1
                  <option value="T2">T2
                  <option value="T4">T4 
                  <option value="T6">T6 
                  <option value="T8">T8 
                  <option value="T10">T10 
                  <option value="12">12 
                  <option value="14">14 
                  <option value="16">16 
                  <option value="18">18  
                  <option value="XS">XS
                  <option value="S">S
                  <option value="M">M
                  <option value="L">L
                  <option value="XL">XL
                  <option value="XXL">XXL 
                  <option value="XXXL">XXXL
                </select>
              </div> 
              <div class="col-xs-1">
                <h3><span class="label label-primary">Color</span></h3>
                <select name="COLOR" id="COLOR" class="form-control" size=20>
                  <option value="Rojo" selected>Rojo
                  <option value="Azul">Azul
                  <option value="Azul oscuro">Azul oscuro 
                  <option value="Amarillo">Amarillo
                  <option value="Verde">Verde
                  <option value="Negro">Negro
                  <option value="Blanco">Blanco
                  <option value="Gris claro">Gris claro
                  <option value="Gris oscuro">Gris oscuro
                  <option value="Celeste">Celeste 
                  <option value="Verde">Verde
                  <option value="Bordo">Bordo
                  <option value="Fucsia">Fucsia
                  <option value="Amarillo">Amarillo
                  <option value="Mostaza">Mostaza
                  <option value="Naranja">Naranja
                  <option value="Violeta">Violeta
                  <option value="Rosado">Rosado 
                </select>
              </div>
            <div class="col-xs-1">
                <h3><span class="label label-primary">Friza</span></h3>
                <select name="FRIZA" id="FRIZA" class="form-control" size=20>
                  <option value="NO" selected>NO
                  <option value="SI">SI
                </select>
              </div>
              <div class="col-xs-1">
                <h3><span class="label label-primary">Capucha</span></h3>
                <select name="CAPUCHA" id="CAPUCHA" class="form-control" size=20>
                  <option value="NO" selected>NO
                  <option value="SI">SI
                </select>
              </div>
           
             </div>
          <div class="row fila_btn">
            <div class="col-xs-2 col-xs-offset-9">
              <button type="submit" class="btn btn-success btn-lg btn-vender">Agregar</a>
            </div>
          </div>
          
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


          </form>
      </div>
    </div>
  </div>      


  


  <script  type="text/javascript" src="js/select_dependientes.js"></script>


  <script type="text/javascript" src="js/selects_agregar.js"></script>
 
@stop

