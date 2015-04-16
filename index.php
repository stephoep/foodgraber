<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/libphp/functions.php';
activity_protocol();
header("Location:http://www.foodgraber.de/recipes.php"); 
session_start();

//require_once $_SERVER["DOCUMENT_ROOT"].'/libphp/config.php';
//require_once $_SERVER["DOCUMENT_ROOT"].'/libphp/functions.php';
//activity_protocol();

if(!isset($_SESSION['counter']))
    $_SESSION['counter'] = 0;

if($_SESSION['counter']>5)
    exit;

if(!isset($_SESSION['status']))
    $_SESSION['status'] = 0;

if($_SESSION['status'] == 1){
    header("Location:http://www.foodgraber.de/recipes.php"); 
}

if(isset($_POST['name']) && isset($_POST['password'])){
        
        $_SESSION['counter']++;
        
        $name = security($_POST['name']);
        $password = security($_POST['password']);
        
        $password = md5($password.PASSWORD_SALT);
        
        $query = "  SELECT * FROM user WHERE name = '$name' AND password = '$password' AND activated = 1";
        $result = mysql_query($query);
        

        if(mysql_affected_rows()){
            $datensatz = mysql_fetch_assoc($result);

            $_SESSION["status"] = 1;
            $_SESSION["id"] = $datensatz["id"];
            $_SESSION["name"] = $datensatz["name"];
            $_SESSION["email"] = $datensatz["email"];
            $_SESSION["usergroup"] = $datensatz["usergroup"];
            $_SESSION["counter"] = 1;
            session_regenerate_id();   
           
//            print_r(session_save_path());
//            print_r($_SESSION);
//            exit;
            header("Location:http://www.foodgraber.de/recipes.php"); 
            session_write_close();
            die();
        }
}

?>
<html> 
    <head> 
        <meta charset="utf-8" />
        <title>foodgraber</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
        <!--<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>        

        <style>
             .ui-page {background: transparent url('/img/repeat_background.png');}
        </style>
    </head>
    <body>         
        <div data-role="page" id="overview">
            <div data-role="header" id="headeroverview" data-theme="b" data-position="fixed"> 
                <h1>foodgraber</h1>
            </div>
            <div data-role="content">
                <form action="index.php" method="post" data-ajax="false"> 
                    <input name="name" id="nickname" placeholder="Nickname eingeben..." value="" data-clear-btn="true"  type="text">
                    <input name="password" id="loginpassword" placeholder="Passwort eingeben..." data-clear-btn="true" value="" autocomplete="off" type="password">   
                    <input value="senden" type="submit">
                </form>
                
            </div>
        </div>
    </body>
</html>
