<?php
     define('_HOST_NAME','localhost');
     define('_DATABASE_NAME','highway to up');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');
     $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
 
     if($MySQLiconn->connect_errno)
     {
       die("ERROR : -> ".$MySQLiconn->connect_error);
     }