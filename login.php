<?php

?>
<html> 
    <head> 
        <meta charset="utf-8" />
        <title>foodgraber</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

        <style>

        </style>
    </head>
    <body>         
        <div data-role="page" id="overview">
            <div data-role="header" id="headeroverview" data-theme="b" data-position="fixed"> 
                <h1>foodgraber</h1>
            </div>
            <div data-role="content" height="300px;">
                <form class="userform" method="post"> 
                    <input name="name" id="nickname" placeholder="Nickname eingeben..." value="" data-clear-btn="true"  type="text">
                    <input name="password" id="loginpassword" placeholder="Passwort eingeben..." data-clear-btn="true" value="" autocomplete="off" type="password">   
                    <a data-role="button" data-theme="b" onclick="validateLogin();">Senden</a>
                </form>
            </div>
        </div>
    </body>
</html>


