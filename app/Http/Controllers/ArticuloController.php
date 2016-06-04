<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articulo;

use App\VentaArticuloLog;

use App\Http\Requests;

class ArticuloController extends Controller
{

  public function getIndex()
  {

    return view('index');
  }

  public function postBuscarArticulo(Request $request)
  {

       $this->validate($request , [

          'codigo' => 'required | exists:articulos,codigo'
         
          ]);


    $codigo=$request['codigo'];
    
    $articulo= Articulo::where('codigo',$codigo)->first();


    return view('articulos.ver_articulo', compact('articulo'));

  }

  public function verVistaAgregarArticulo()
  {

    return view('articulos.form_agregar_articulo');

  }



  public function formAgregar(){

    return view('articulos.form_agregar_articulo');
  
  }


	public function postAgregarArticulo(Request $request)
	{

        $this->validate($request,[
            
            'codigo' => 'required',
            'precio' => 'required'
          ]);


        $articulo = new Articulo();
        
        $articulo->codigo=$request['codigo'];

      	
        $articulo->tipo_articulo = ucfirst(strtolower($request['ART']));
          
        $articulo->tela = ucfirst(strtolower($request['TELA']));
         
        $articulo->motivo =  ucfirst(strtolower($request['MOTIVO']));  
             
        $articulo->marca = ucfirst(strtolower($request['MARCA']));

        $articulo->categoria = ucfirst(strtolower($request['CAT']));
              
        $articulo->talle= ucfirst(strtolower($request['TALLE']));
              
        $articulo->color = ucfirst(strtolower($request['COLOR']));
             
        $articulo->friza =  ucfirst(strtolower($request['FRIZA']));
             
        $articulo->capucha = ucfirst(strtolower($request['CAPUCHA']));

        $articulo->precio =  floatval($request['precio']);


        $articulo->save();

        

      	return redirect()->route('index');

	}

  public function postVenderArticulo(Request $request)
  {

      $id = $request['id'];
      $forma_pago=$request['forma_pago'];


      $articulo = Articulo::find($id);  

      $venta_articulo_log= new VentaArticuloLog();


      $venta_articulo_log->tipo_articulo=$articulo->tipo_articulo;
      $venta_articulo_log->codigo=$articulo->codigo;
      $venta_articulo_log->marca=$articulo->marca;
      $venta_articulo_log->categoria=$articulo->categoria;
      $venta_articulo_log->talle=$articulo->talle;
      $venta_articulo_log->color=$articulo->color;
      $venta_articulo_log->precio=$articulo->precio;

      $venta_articulo_log->forma_pago=$forma_pago;

      
      $venta_articulo_log->save();

      $articulo->delete();



      return redirect()->route('index')->with([

        'mensaje_flash' =>'Articulo vendido  con exito!'

        ]);


  }


 

  public function postEditarPrecio(Request $request)
  {
   
    $lista = explode(',',$request['lista_id']);

    $articulos = Articulo::find($lista);
    
    foreach($articulos as $articulo){

        $articulo->precio = $request['precio_edit'];
        $articulo->save();

    }


    return route('ver_stock');
  }




  public function getMostrarArticulos()
  {

    $articulos = Articulo::all();

    return view('articulos.ver_stock', compact('articulos'));


  }


  public function getEliminarArticuloAjax($id)
  {



    $articulo = Articulo::find($id);

    $articulo->delete();

		return route('ver_stock');


	}


  public function getMostrarVentas(){

    $venta_articulo_log = VentaArticuloLog::all();

    return view('articulos.ver_ventas', compact('venta_articulo_log'));
  }



	}
