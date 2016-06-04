
var makeModel = new DynamicOptionList("CAT","ART","TELA");
     
      makeModel.forValue("Niños").addOptionsTextValue
      ("Remera m/c","Remera m/c",
       "Remera m/l","Remera m/l",
       "Buzo","Buzo",
       "Campera","Campera",
       "Short","Short",
       "Jogging","Jogging",
       "Jean TAlto/Chupin","Jean TAlto/Chupin",
       "Jean TAlto/Recto","Jean TAlto/Recto",
       "Jean TMedio/Chupin","Jean TMedio/Chupin",
       "Jean TMedio/Recto","Jean TMedio/Recto",
       "Jean TBajo/Chupin","Jean TBajo/Chupin",
       "Jean TBajo/Recto","Jean TBajo/Recto"
       );

      makeModel.forValue("Niños").forValue("Remera m/c").addOptions("Algodon","Piqué","Set");
      makeModel.forValue("Niños").forValue("Remera m/l").addOptions("Algodon","Piqué","Set");
      makeModel.forValue("Niños").forValue("Buzo").addOptions("Algodon","Micropolar","Acetato");
      makeModel.forValue("Niños").forValue("Campera").addOptions("Algodon","Micropolar","Acetato","Rompeviento");
      makeModel.forValue("Niños").forValue("Short").addOptions("Algodon","Acetato","Jean");
      makeModel.forValue("Niños").forValue("Jogging").addOptions("Algodon","Acetato");
      makeModel.forValue("Niños").forValue("Jean TAlto/Chupin").addOptions("Jean");
      makeModel.forValue("Niños").forValue("Jean TAlto/Recto").addOptions("Jean");
      makeModel.forValue("Niños").forValue("Jean TMedio/Chupin").addOptions("Jean");
      makeModel.forValue("Niños").forValue("Jean TMedio/Recto").addOptions("Jean");
      makeModel.forValue("Niños").forValue("Jean TBajo/Chupin").addOptions("Jean");
      makeModel.forValue("Niños").forValue("Jean TBajo/Recto").addOptions("Jean");


      makeModel.forValue("Niñas").addOptionsTextValue
      ("Remera m/c","Remera m/c",
       "Remera m/l","Remera m/l",
       "Buzo","Buzo",
       "Campera","Campera",
       "Pollera","Pollera",
       "Torera","Torera",
       "Short","Short",
       "Vestido","Vestido",
       "Jogging","Jogging",
       "Calsa","Calsa",
       "Jean TAlto/Chupin","Jean TAlto/Chupin",
       "Jean TAlto/Recto","Jean TAlto/Recto",
       "Jean TMedio/Chupin","Jean TMedio/Chupin",
       "Jean TMedio/Recto","Jean TMedio/Recto",
       "Jean TBajo/Chupin","Jean TBajo/Chupin",
       "Jean TBajo/Recto","Jean TBajo/Recto"
       ); 

      makeModel.forValue("Niñas").forValue("Remera m/c").addOptions("Algodon","Piqué","Set");
      makeModel.forValue("Niñas").forValue("Remera m/l").addOptions("Algodon","Piqué","Set");
      makeModel.forValue("Niñas").forValue("Buzo").addOptions("Algodon","Micropolar","Acetato","Piel de mono");
      makeModel.forValue("Niñas").forValue("Campera").addOptions("Algodon","Micropolar","Acetato","Piel de mono","Towel");
      makeModel.forValue("Niñas").forValue("Pollera").addOptions("Fibrana","Encaje","Tul","Fibrana","Algodon");
      makeModel.forValue("Niñas").forValue("Torera").addOptions("-");
      makeModel.forValue("Niñas").forValue("Short").addOptions("Modal","Jean","Gabardina","Algodon","Fibrana");
      makeModel.forValue("Niñas").forValue("Vestido").addOptions("Algodon","Encaje","Fibrana","Gasa");
      makeModel.forValue("Niñas").forValue("Jogging").addOptions("Algodon","Acetato");
      makeModel.forValue("Niñas").forValue("Calsa").addOptions("-");
      makeModel.forValue("Niñas").forValue("Jean TAlto/Chupin").addOptions("Jean");
      makeModel.forValue("Niñas").forValue("Jean TAlto/Recto").addOptions("Jean");
      makeModel.forValue("Niñas").forValue("Jean TMedio/Chupin").addOptions("Jean");
      makeModel.forValue("Niñas").forValue("Jean TMedio/Recto").addOptions("Jean");
      makeModel.forValue("Niñas").forValue("Jean TBajo/Chupin").addOptions("Jean");
      makeModel.forValue("Niñas").forValue("Jean TBajo/Recto").addOptions("Jean");


      makeModel.forValue("Hombre").addOptionsTextValue
      ("Remera m/c","Remera m/c",
        "Remera m/l","Remera m/l",
        "Musculosa","Musculosa",
        "Sudadera","Sudadera",
        "Chomba m/c","Chomba m/c",
        "Chomba m/l","Chomba m/l",
        "Buzo","Buzo",
        "Campera","Campera",
        "Sweater","Sweater",
        "Chaleco","Chaleco",
        "Camisa m/c","Camisa m/c",
        "Camisa m/l","Camisa m/l",
        "Bermuda","Bermuda",
        "Short de baño","Short de baño",
        "Jean","Jean",
        "Corbata","Corbata",
        "Cinto","Cinto",
        "Boxer","Boxer",
        "Slip","Slip",
        "Medias","Medias",
        "Bufandas","Bufandas",
        "Jean TAlto/Chupin","Jean TAlto/Chupin",
       "Jean TAlto/Recto","Jean TAlto/Recto",
       "Jean TMedio/Chupin","Jean TMedio/Chupin",
       "Jean TMedio/Recto","Jean TMedio/Recto",
       "Jean TBajo/Chupin","Jean TBajo/Chupin",
       "Jean TBajo/Recto","Jean TBajo/Recto"

        );

      makeModel.forValue("Hombre").forValue("Remera m/c").addOptions("-");
      makeModel.forValue("Hombre").forValue("Remera m/l").addOptions("Algodon","Piqué");
      makeModel.forValue("Hombre").forValue("Musculosa").addOptions("-");
      makeModel.forValue("Hombre").forValue("Sudadera").addOptions("-");
      makeModel.forValue("Hombre").forValue("Chomba m/c").addOptions("Algodon","Piqué");
      makeModel.forValue("Hombre").forValue("Chomba m/l").addOptions("Algodon","Piqué");
      makeModel.forValue("Hombre").forValue("Buzo").addOptions("Algodon","Micropolar","Canelon","C/Cierre");
      makeModel.forValue("Hombre").forValue("Campera").addOptions("Algodon","Acetato","Rompeviento","Inflable","Hilo","Lana");
      makeModel.forValue("Hombre").forValue("Sweater").addOptions("Hilo","Bremer","Lana");
      makeModel.forValue("Hombre").forValue("Chaleco").addOptions("Inflable","Acetato","Hilo","Lana");
      makeModel.forValue("Hombre").forValue("Camisa m/c").addOptions("-");
      makeModel.forValue("Hombre").forValue("Camisa m/l").addOptions("-");
      makeModel.forValue("Hombre").forValue("Bermuda").addOptions("Jean","Gabardina","De baño","Cargo");
      makeModel.forValue("Hombre").forValue("Short de baño").addOptions("-");
      makeModel.forValue("Hombre").forValue("Jean").addOptions("Denim","Gabardina");
      makeModel.forValue("Hombre").forValue("Corbata").addOptions("-");
      makeModel.forValue("Hombre").forValue("Cinto").addOptions("-");
      makeModel.forValue("Hombre").forValue("Boxer").addOptions("Algodon","Lycra");
      makeModel.forValue("Hombre").forValue("Slip").addOptions("Algodon","Lycra");
      makeModel.forValue("Hombre").forValue("Medias").addOptions("Cancan","3/4","Zoquete","Larga","De vestir");
      makeModel.forValue("Hombre").forValue("Bufandas").addOptions("-");
      makeModel.forValue("Hombre").forValue("Jean TAlto/Chupin").addOptions("Jean");
      makeModel.forValue("Hombre").forValue("Jean TAlto/Recto").addOptions("Jean");
      makeModel.forValue("Hombre").forValue("Jean TMedio/Chupin").addOptions("Jean");
      makeModel.forValue("Hombre").forValue("Jean TMedio/Recto").addOptions("Jean");
      makeModel.forValue("Hombre").forValue("Jean TBajo/Chupin").addOptions("Jean");
      makeModel.forValue("Hombre").forValue("Jean TBajo/Recto").addOptions("Jean");

      makeModel.forValue("Mujer").addOptionsTextValue
      ("Musculosa dep/bf","Musculosa dep/bf",
       "Musculosa dep/bg","Musculosa dep/bg",
       "Musculosa salir/bf","Musculosa salir/bf",
       "Musculosa salir/bg","Musculosa salir/bg",
       "Remera m/c","Remera m/c",
       "Remerones 3/4","Remerones 3/4",
       "Remerones m/c","Remerones m/c",
       "Remerones m/l","Remerones m/l",
       "Remera m/l","Remera m/l",
       "Camisa m/c","Camisa m/c",
       "Camisa m/l","Camisa m/l",
       "Buzo","Buzo",
       "Campera","Campera",
       "Seda fria","Seda fria",
       "Vestido c/diario","Vestido c/diario",
       "Vestido l/diario","Vestido l/diario",
       "Vestido c/noche","Vestido c/noche",
       "Vestido l/noche","Vestido l/noche",
       "Mono c/diario","Mono c/diario",
       "Mono l/diario","Mono l/diario",
       "Mono c/noche","Mono c/noche",
       "Mono l/noche","Mono l/noche",
       "Sweater","Sweater",
       "Calsa corta","Calsa corta",
       "Calsa pescadora","Calsa pescadora",
       "Calsa larga","Calsa larga",
       "Top deportivo","Top deportivo",
       "Top de vestir","Top de vestir",
       "Pantalon","Pantalon",
       "Short","Short",
       "Capri","Capri",
       "Bermuda","Bermuda",
       "Pollera larga","Pollera larga",
       "Pollera corta","Pollera corta",
       "Pollera 3/4","Pollera 3/4",
       "Pañuelo","Pañuelo",
       "Polera","Polera",
       "Chaleco","Chaleco",
       "Spolverino","Spolverino",
       "Jean TAlto/Chupin","Jean TAlto/Chupin",
       "Jean TAlto/Recto","Jean TAlto/Recto",
       "Jean TMedio/Chupin","Jean TMedio/Chupin",
       "Jean TMedio/Recto","Jean TMedio/Recto",
       "Jean TBajo/Chupin","Jean TBajo/Chupin",
       "Jean TBajo/Recto","Jean TBajo/Recto"

        );



      makeModel.forValue("Mujer").forValue("Musculosa dep/bf").addOptions("Encaje","Lycra","Fibrana","Gamuza","Gasa","Lanilla","C/brillo");
      makeModel.forValue("Mujer").forValue("Musculosa dep/bg").addOptions("Encaje","Lycra","Fibrana","Gamuza","Gasa","Lanilla","C/brillo");
      makeModel.forValue("Mujer").forValue("Musculosa salir/bf").addOptions("Encaje","Lycra","Fibrana","Gamuza","Gasa","Lanilla","C/brillo");
      makeModel.forValue("Mujer").forValue("Musculosa salir/bg").addOptions("Encaje","Lycra","Fibrana","Gamuza","Gasa","Lanilla","C/brillo");
      makeModel.forValue("Mujer").forValue("Remera m/c").addOptions("Algodon","Encaje","Gasa","Gamuza","Fibrana","Lycra","Lanilla","C/brillo");
      makeModel.forValue("Mujer").forValue("Remerones 3/4").addOptions("-");
      makeModel.forValue("Mujer").forValue("Remerones m/c").addOptions("-");
      makeModel.forValue("Mujer").forValue("Remerones m/l").addOptions("-");
      makeModel.forValue("Mujer").forValue("Remera m/l").addOptions("Algodon","Encaje","Seda");
      makeModel.forValue("Mujer").forValue("Camisa m/c").addOptions("Gasa","Gabardina","Jean","Fibrana");
      makeModel.forValue("Mujer").forValue("Camisa m/l").addOptions("Gasa","Gabardina","Jean","Fibrana");
      makeModel.forValue("Mujer").forValue("Buzo").addOptions("Algodon");
      makeModel.forValue("Mujer").forValue("Campera").addOptions("Rompeviento","Algodon","Inflable","Gamuza","Modal","Cuero","De Salir","Hilo","Lana");
      makeModel.forValue("Mujer").forValue("Seda fria").addOptions("Manga corta","Manga larga","Twinset","Musculosa");
      makeModel.forValue("Mujer").forValue("Vestido c/diario").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Vestido l/diario").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Vestido c/noche").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Vestido l/noche").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Mono c/diario").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Mono l/diario").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Mono c/noche").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Mono l/noche").addOptions("Seda fria","Gasa","Algodon","Fibrana","Encaje","Lanilla","Gamuza");
      makeModel.forValue("Mujer").forValue("Sweater").addOptions("Hilo","Lana","Piel de mono","C/lentejuelas");
      makeModel.forValue("Mujer").forValue("Calsa corta").addOptions("Algodon","Lycra","Simil cuero","Tejida");
      makeModel.forValue("Mujer").forValue("Calsa pescadora").addOptions("Algodon","Lycra","Simil cuero","Tejida");
      makeModel.forValue("Mujer").forValue("Calsa larga").addOptions("Algodon","Lycra","Simil cuero","Tejida");
      makeModel.forValue("Mujer").forValue("Top deportivo").addOptions("-");
      makeModel.forValue("Mujer").forValue("Top de vestir").addOptions("-");
      makeModel.forValue("Mujer").forValue("Pantalon").addOptions("Jean","Gabardina","Tipo calsa","De vestir","Gasa","Jogging","Babucha");
      makeModel.forValue("Mujer").forValue("Short").addOptions("Encaje","Modal","Algodon","Fibrana","Lentejuelas","Jean","Gabardina");
      makeModel.forValue("Mujer").forValue("Capri").addOptions("Jean","Gabardina");
      makeModel.forValue("Mujer").forValue("Bermuda").addOptions("Jean","Gabardina");
      makeModel.forValue("Mujer").forValue("Pollera larga").addOptions("Encaje","Gamuza","Lentejuelas","Fibrana","Modal","Gasa","Lycra","Lanilla");
      makeModel.forValue("Mujer").forValue("Pollera corta").addOptions("Encaje","Gamuza","Lentejuelas","Fibrana","Modal","Gasa","Lycra","Lanilla");
      makeModel.forValue("Mujer").forValue("Pollera 3/4").addOptions("Encaje","Gamuza","Lentejuelas","Fibrana","Modal","Gasa","Lycra","Lanilla");
      makeModel.forValue("Mujer").forValue("Pañuelo").addOptions("Pashmina","Gasa");
      makeModel.forValue("Mujer").forValue("Polera").addOptions("Algodon","Lanilla");
      makeModel.forValue("Mujer").forValue("Chaleco").addOptions("Gamuza","Tejido","Algodon","Inflable","Gabardina","Salir","Gasa");
      makeModel.forValue("Mujer").forValue("Spolverino").addOptions("Modal","Lanilla","Tejido");
      makeModel.forValue("Mujer").forValue("Jean TAlto/Chupin").addOptions("Jean");
      makeModel.forValue("Mujer").forValue("Jean TAlto/Recto").addOptions("Jean");
      makeModel.forValue("Mujer").forValue("Jean TMedio/Chupin").addOptions("Jean");
      makeModel.forValue("Mujer").forValue("Jean TMedio/Recto").addOptions("Jean");
      makeModel.forValue("Mujer").forValue("Jean TBajo/Chupin").addOptions("Jean");
      makeModel.forValue("Mujer").forValue("Jean TBajo/Recto").addOptions("Jean");