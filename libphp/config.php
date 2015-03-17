<?php

define("PASSWORD_SALT","Salz in der Suppe");

switch($_SERVER['SERVER_NAME']){ 
    case 'localhost': 
        if(!mysql_connect('localhost','root','phpkurs')) 
        {
            echo "DB: Fehler beim Verbindungsaufbau<br>";
            exit;
        } 
        if(!mysql_query("SET CHARACTER SET 'utf8'"))
        {
            echo "DB: Fehler beim Setzen des Zeichensatzes<br>";
            exit;
        }
        if(!mysql_select_db('localstylehunter'))
        {
            echo "DB: Fehler beim Auswählen der Datenbank<br>";
            exit;
        }
        break; 

    case 'cloogle.de': 
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

function DBConnect($DB){
    switch($DB){ 
        case 3:
            if(!mysql_connect('localhost', 'web221', '20cloogle14')) 
            {
                echo "DB: Fehler beim Verbindungsaufbau<br>";
                exit;
            }
            if(!mysql_query("SET CHARACTER SET 'utf8'"))
            {
                echo "DB: Fehler beim Setzen des Zeichensatzes<br>";
                exit;
            }
            if(!mysql_select_db('usr_web221_3'))  
            {
                echo "DB: Fehler beim Auswählen der Datenbank.<br>";
                exit;
            }
        break;
            
        case 4:
            if(!mysql_connect('localhost', 'web221', '20cloogle14')) 
            {
                echo "DB: Fehler beim Verbindungsaufbau<br>";
                exit;
            }
            if(!mysql_query("SET CHARACTER SET 'utf8'"))
            {
                echo "DB: Fehler beim Setzen des Zeichensatzes<br>";
                exit;
            }
            if(!mysql_select_db('usr_web221_4'))  
            {
                echo "DB: Fehler beim Auswählen der Datenbank.<br>";
                exit;
            }
        break;
    }
}





