<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php objeto</title>
</head>
<body>
    <?php

    /*
        public: hace que la variable/funcion se pueda acceder desde cualquier lugar , como por ejemplo otras clases y otras instancias de esa misma clase. 



        private : hace que la variable/funcion se pueda utilizar desde la misma clase que la misma clase que las define.


        protected: hace que la variable/funcion se pueda utilizar desde la misma clase que la misma clase que las define y tambien desde cualquier otra clase que herede de ella 
    */ 


    // en otras palabras : "private" = solo tu, "protected" = tu y tus dependientes, public = cualquiera.


      Class Carro {
        public $color;
        public $modelo;
        protected $anio;

        public function __construct($color, $modelo) {
            $this -> color = $color; 
            $this -> modelo = $modelo;
            
        }
        public function mensaje() {
            return 'Mi carro es un ' . $this -> color . ' ' . $this -> aino . '!';
        }
      } 
       class Modelo extends Carro {
        public function __construct($nombre) {
            $this -> nombre = $nombre; 
        }

        public function mensaje2() {
            return 'Mi carro es color ' . $this -> color . 'es modelo ' . $this -> nombre . '!';
        }
       }

      

      $miCarro = new Carro("plateado", 2015);
      //echo $miCarro -> modelo;
      echo $miCarro -> color();

      echo '<br>';


      $miCarro = new Carro("plateado", 2015);
      //echo $miCarro -> modelo;
      echo $miCarro -> color();


      $miCarro = new Carro("rojo" , "chevrolettttt"); 
      echo $miCarro -> mensaje(); 
    
      echo '<br>';

      $miCarro = new Carro("blanco" , "twingo"); 
      echo $miCarro -> mensaje(); 
       
       


    ?>
    
    
    <script eu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>