<?php
 // Traego las clases 
 require_once "src/logistica/paquete.php";
 require_once "src/logistica/sensorphp";

 //crear 2 objetos (paquete A y B)
 $paqueteA = new Paquete() ;
 $paqueteB =  new Paquete() ;

 //dare valor a PaqueteA
 $paqueteA -> $codigoSeguimiento = "ABC123";
 $paqueteA -> $pesoKilogramos = 3.5;
 $paqueteA -> $esFragil = True;

 //Crear un sensor
 $sensor -> = 1;
 $sensor->marca = "Samsung";
 $sensor->ultimaLectura = new DateTime(); 
 $sensor->rangoMaximo = 100;
 
 //comprobar que todo vaya bien :))
 echo "Todo esta en orden " 