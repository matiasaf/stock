<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CODIGO |  Control de Stock</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/tablefilter.css" media="screen" />


   <script  type="text/javascript" src="js/select_dependientes.js"></script>


  <script type="text/javascript" src="js/selects_agregar.js"></script>
    <!-- Fuentes -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:900,900italic,300' rel='stylesheet' type='text/css'> -->
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    @include('includes.header')

    @include('partials.flash')


    @yield('content')


    <!-- JavaScripts -->

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    @yield('scripts')

    <script>

      $('ul.alert').not('alert-info').delay(3000).slideUp(300);
      $('.alert').delay(3000).slideUp(300);
    
    </script>



    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
