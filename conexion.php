<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bnsandqzvsistxrjqrs3-mysql.services.clever-cloud.com","uo3e2lgsjfgavxei","DsfR3zp9t8IdiB0Z60Dg","bnsandqzvsistxrjqrs3");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }