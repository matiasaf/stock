  
var value="niño";
//var lista_producto=document.getElementById("lista_producto");

var div_niños=document.getElementById('niños');
var div_niñas=document.getElementById('niñas');

//cargar_lista_producto();

function detectar_rb(){
  //Detecto el radio button seteado
  var formulario = document.forms[0];
  for (var i = 0; i < formulario.cat.length; i++) {
    if (formulario.cat[i].checked) 
      break;
  }

  //Tenemos en value entonces el valor del radio
  value= formulario.cat[i].value; 
  console.log(value);   
  //llamo a la funcion cargar_listas
  //cargar_lista_producto();

if (value=="niño"){

div_niños.style.display='block';
div_niñas.style.display='none';
}

if (value=="niña"){
div_niños.style.display='none';
div_niñas.style.display='block';
}

}



  

 
   
  //Filtrado sobre las listas
  $("#filtro").on("input",function(){
    $('#lista_producto option').each(function(){
        if($(this).text().indexOf($("#filtro").val()) == -1){
            $(this).prop("selected", false);
            $(this).fadeOut();
          }else{
            $(this).prop("selected", false);
          $(this).fadeIn();
            }
      });
    });
  

  function cargar_lista_producto(){

  //Vaciado de la lista
  lista_producto.options.length=0;

  var option=new Array();
  var texto =new Array();

  //Recordar que en value tenemos el valor del radioB
  switch(value){
    case "niño":
      texto=[document.createTextNode("Remera manga corta"),
              document.createTextNode("Remera manga larga"),
              document.createTextNode("Buzo"),
              document.createTextNode("Campera"),
              document.createTextNode("Short"),
              document.createTextNode("Pantalón jogging")
      ];
    break;
    case "niña":
      texto=[document.createTextNode("Remera manga corta"),
              document.createTextNode("Remera manga larga"),
              document.createTextNode("Buzo"),
              document.createTextNode("Campera"),
              document.createTextNode("Pollera"),
              document.createTextNode("Torera"),
              document.createTextNode("Short"),
              document.createTextNode("Vestido"),
              document.createTextNode("Pantalón jogging"),
              document.createTextNode("Calza")
      ];
    break;
  }
  

  for (var i=0;i<texto.length;i++){
    option[i]=document.createElement("OPTION");
    option[i].appendChild(texto[i]);
    lista_producto.appendChild(option[i]);
  }
}



 

       

        


  


