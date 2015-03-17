<?php
session_start();
date_default_timezone_set('Europe/Berlin');
header('Content-Type: text/html; charset=utf-8');

//require_once $_SERVER["DOCUMENT_ROOT"].'/libphp/config.php';

function pageHeader($title){
?>
        <div data-role="header" id="header1" data-theme="b" data-position="fixed">
            <a href="<?php echo 'http://www.cloogle.de/PageTablet/mobilMainPage.php'; ?>" data-icon="back" rel="external">Zurück</a>
            <h1> <?php echo $title; ?></h1>
            <a href="<?php echo 'http://www.cloogle.de/PageLogin/logout.php'; ?>" data-role="button" rel="external" class="ui-btn-right" data-icon="arrow-r">Logout</a>
        </div>
<?php
}

function checkLoginUser(){
    switch($_SERVER['SERVER_NAME']){
        case 'cloogle.de': 
            checkCounter();
            
            if(isset($_SESSION["istangemeldet"]) && 1 != $_SESSION["istangemeldet"] || !isset($_SESSION["istangemeldet"]))
            {
////                activity_protocol();
////                storeIPGeoLocData();
////                foreignRedirect();
                
                header("Location:PageLogin/login.php"); 
            }
            
        break;
        case 'localhost':
            $_SESSION['id'] = 2;
        break;
    }    
}

function checkCounter(){
    if(isset($_SESSION["zaehler"]) && $_SESSION["zaehler"] > 5){
        exit();
    };
}

function security($var){
    
    $var = trim($var);
    $var = mysql_real_escape_string($var);
    $var = htmlspecialchars($var);
    
    return $var;
}

function setHeadLine($title){
?>
<!DOCTYPE html>
<html>
    <head> 
        <meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">
        <title><?php echo $title; ?></title>            
        <?php
        switch($_SERVER['SERVER_NAME']) 
        { 
        case 'foodgraber.de': 
            ?>
                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
                <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
            <?php
            break; 
        }
        ?>               
    </head>
    <body>
<?php
}

function setFootLine(){
?>
    </body>
</html>
<?php
}

function navigationPanel(){
    ?>
        <div data-role="panel" data-position-fixed="true" data-dismissible="true" data-theme="b" data-display="overlay" id="nav-panel">
            <ul data-role="listview" data-theme="b" data-count-theme="a" class="nav-search">
                <li data-icon="delete" data-iconpos="left"><a href="#" data-rel="close">Menü schließen</a></li>
                <li data-theme="a">
                    <div style="text-align:center; margin: 20px 20px 10px 10px">
                        <img src="systemimages/clooglepic.png" style="width:100%">
                    </div> 
                </li>
                <li data-icon="arrow-u-r" data-iconpos="left"><a href="#">Bilder hochladen</a></li>
                <li data-icon="shop" data-iconpos="left"><a href="#">Warenkorb<span class="ui-li-count">12</span></a></li>
                <li data-icon="check" data-iconpos="left"><a href="#">Bilder check <span class="ui-li-count">20</span></a></li>
                <li data-icon="eye" data-iconpos="left"><a href="#">Bilder aktiv<span class="ui-li-count">17</span></a></li>
                <li data-icon="lock" data-iconpos="left"><a href="#">Bilder inaktiv<span class="ui-li-count">34</span></a></li>
                <li data-icon="user" data-iconpos="left"><a href="#">Kundendaten</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    <?php
}