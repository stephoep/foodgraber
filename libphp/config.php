<?php

define("PASSWORD_SALT","Salz in der Suppe");

switch($_SERVER['SERVER_NAME']){         
    case 'foodgraber.de': 
        if(!mysql_connect('localhost', 'web221', '20cloogle14')) 
        {
            echo 'Datei gefunden';
            echo "DB: Fehler beim Verbindungsaufbau<br>";
            exit;
        }
        if(!mysql_query("SET CHARACTER SET 'utf8'"))
        {
            echo "DB: Fehler beim Setzen des Zeichensatzes<br>";
            exit;
        }
        if(!mysql_select_db('usr_web221_1'))  
        {
            echo "DB: Fehler beim Auswählen der Datenbank.<br>";
            exit;
        }
        break; 
} 





