<?php
//session_start();


//phpinfo();
//exit();
//print_r(session_save_path());
//exit;
//session_start();
//require_once 'libphp/functions.php';
//print_r($_SESSION);
//exit;

//if($_SESSION['status'] != '1'){
//    header("Location:http://www.foodgraber.de/index.php"); 
//}
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" />
        <title>foodgraber</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

        <style>
             /*.ui-page{background: transparent url('img/repeat_background.png');}*/
        </style>
    </head>
    <body>         
        <div data-role="page" id="overview">
            <div data-role="header" id="headeroverview" data-theme="b" data-position="fixed"> 
                <h1>foodgraber</h1>
            </div>
            <div data-role="content">
                <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
                    
                    <!--C-->
                    <li><a href="#foo12">Chili con Carne</a></li>
                    <!--D-->   
                    <li><a href="#foo7">Dumplings</a></li>
                    
                    <!--F-->
                    <li><a href="#foo1">Flammenkuchen mit Blattspinat</a></li>
                    <li><a href="#foo8">Flammenkuchen mit Feigen</a></li>
                    
                    <!--H-->
                    <li><a href="#foo13">Haschee & Reis</a></li>
                    
                    <!--K-->
                    <li><a href="#foo3">Kokosmilchsuppe mit roten Curry und roten Linsen</a></li>                    
    
                    <!--P-->
                    <li><a href="#foo2">Pasta all'arrabbiata</a></li>
                    <li><a href="#foo11">Pfannenkuchen</a></li>
                    <li><a href="#foo10">Pilzragout</a></li>
                    
                    <!--Q-->
                    <li><a href="#foo5">Quiche Lorraine</a></li>
                    
                    <!--S-->
                    <li><a href="#foo6">Spaghetti Bolognese</a></li>
                    <li><a href="#foo14">Spaghetti mit Tomaten-Camenbert-Soße</a></li>
                    
                    <!--T-->
                    <li><a href="#foo4">Tomaten Kokossuppe</a></li>
                    <li><a href="#foo9">Thai Curry</a></li>



                </ul>
            </div>
        </div>    
<!--        <div data-role="page" id="foo4">
            <div data-role="header" id="hf004" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Tomaten Kokossuppe</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Tomaten Kokossuppe</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td></td>
                            <td></td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>                        
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>                        
                    </tbody>
                </table>
            </div>            
        </div>-->
        <div data-role="page" id="foo14">
            <div data-role="header" id="hf0014" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Spaghetti mit Tomaten-Camenbert-Soße</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Spaghetti mit Tomaten-Camenbert-Soße</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>300 - 400</td>
                            <td>g</td>
                            <td>Kirsch- /Cherrytomaten</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Camenbert (Brie)</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Weißwein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Zwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Knoblauchzehen</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Olivenöl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Gemüsebrühwürfel</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Salz & Pfeffer</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>frischer Basilikum</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>200</td>
                            <td>g</td>
                            <td>Spaghetti / grüne Bandnudeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Wasser zum kochen bringen, salzen, und Nudeln dazu geben</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Camenbert vom Rand befreien</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tomaten, Zwiebel, Knoblauch, Basilikum klein schneiden</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Olivnöl in einer Pfanne erhitzen</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Zwiebel und Knoblauch andünsten</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Tomaten zugeben und verkochen</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>mit Wein ablöschen</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>4-5 Löffel Nudelwasser zugeben</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Brühwürfel zugeben und auflösen</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Camenbert zugeben und zerlaufen lassen</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Basilikum zugeben</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Soße mit Salz & Pfeffer abschmecken</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Warten bis die Nudeln fertig sind und servieren</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo13">
            <div data-role="header" id="hf0013" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Haschee & Reis</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Haschee & Reis</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>500</td>
                            <td>g</td>
                            <td>gemischtes Hackfleisch</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Zwiebel</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Fleischbrühwürfel</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1/2</td>
                            <td></td>
                            <td>Tube Tomatenmark</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>3</td>
                            <td></td>
                            <td>Tassen Langkornreis</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Lorbeerblätter</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Butter</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Sanella</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Mehl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Salz & Pfeffer</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>    
                        <tr>
                            <td>1-2 </td>
                            <td></td>
                            <td>Pepperonie</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Sambal Oelek</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>    
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody> 
                        <tr>
                            <td>1</td>
                            <td>3 Tassen Langkornreis und 3 Tassen Wasser in ein Schnellkochtopfschale geben</td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td>2 Lorbeerblätter, 3 Butterflocken zugeben</td>
                        </tr> 
                        <tr>
                            <td>3</td>
                            <td>vorsichtig salzen</td>
                        </tr> 
                        <tr>
                            <td>4</td>
                            <td>Zwiebeln und Pepperonie fein würfeln</td>
                        </tr>                        
                        <tr>
                            <td>5</td>
                            <td>Sanella in einem Schnellkochtopf erhitzen</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Fleisch anbraten und zerkleinern</td>
                        </tr>  
                        <tr>
                            <td>7</td>
                            <td>Gewürfelte Zwiebel und Pepperonie im Topf andünsten</td>
                        </tr>  
                        <tr>
                            <td>8</td>
                            <td>1/2 Tube Tomatenmark zugeben</td>
                        </tr>  
                        <tr>
                            <td>9</td>
                            <td>Topf mit Wasser auffüllen bis das Fleisch gut bedeckt ist</td>
                        </tr>  
                        <tr>
                            <td>10</td>
                            <td>mit Fleischbrühwürfel, Salz, Pfeffer abschmecken</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>die Schnellkochtopfschale mit dem Reis auf ein Gestell in den Schnellkochtopf stellen</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Schnellkochtopf schließen und solange mit starker Hitze (Stärke 9) erhitzen bis erster Ventilstrich erkennbar ist, danach auf mitllere Hitze (Stärke 4) zurückstellen</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>ca. 15 - 20 min kochen lassem</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>nachwürzen, eventl. mit einer Mehlschwitze andicken</td>
                        </tr>                        
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo12">
            <div data-role="header" id="hf0012" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Chili con Carne</h1>
            </div>
            
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Chili con Carne</h4>
            <div class="ui-grid-a">
            <div class="ui-block-a"> 
            <div data-role="content">
                
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Dose Mais</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Dose Kidney Bohnen</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Zwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>400</td>
                            <td>g</td>
                            <td>gemischtes Hackfleisch</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Dose gestückelte Tomaten</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>scharfe Pepperonie (piri piri)</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Paprika</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Pflanzenöl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Würzmischung Chili con Carne</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            <div class="ui-block-b">        
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Zwiebeln, Paprika, Pepperonie stückeln</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dosen öffnen, Mais und Bohnen zusammen in ein Sieb geben und abspühlen</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Keimöl in einem großen Topf erhitzen</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Zwiebeln, Pepperonie andünsten</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Fleisch anbraten und mit einer Gabel zerkleinern</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Würzmischung zugeben und vermischen</td>
                        </tr>   
                        <tr>
                            <td>7</td>
                            <td>100 ml Wasser, stückige Tomaten, Mais, Bohnen, Paprika zugeben und aufkochen</td>
                        </tr>   
                        <tr>
                            <td>8</td>
                            <td>Deckel auf den Topf und alles bei mittlerer Hitze (Stärke 4-5) köcheln lassen</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>in einem tiefen Teller mit Baguettescheiben servieren</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
            </div>
            </div>
        </div>
        <div data-role="page" id="foo11">
            <div data-role="header" id="hf0011" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Pfannenkuchen</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Pfannenkuchen</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>200 g</td>
                            <td>Mehl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>200 ml</td>
                            <td>Milch</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td>6</td>
                            <td>Eier</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Tl</td>
                            <td>Salz</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td>Backfett (Sanella)</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td>Konfitüre / Nutella </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Mehl, Eier, Salz, Milch in eine Schüssel geben und mit dem Quirl verrühren</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sanella in Pfanne geben und bei starker Hitze (Stärke 9) zergehen lassen</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>auf mittlere Hitze (Stärke 6-7) zurückschalten</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Eine Suppenkelle Teig in der Pfanne gleichmäßig verteilen</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Warten bis der Pfannenkuchen auf der Pfannenseite goldbraun ist, dann wenden</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pfannenkuchen aus der Pfanne nehmen, einseitig mit Konfitüre / Nutella und rollen</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Resteverwertung: Flädlesuppe
                                <br>- restlichen Pfannenkuchen sehr eng rollen
                                <br>- in sehr feine Scheiben schneiden
                                <br>- mit Gemüsebrühe servieren
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo10">
            <div data-role="header" id="hf010" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Pilzragout</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Pilzragout</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>1 El</td>
                            <td>Butter</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100 g</td>
                            <td>Schlagsahne</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2 El</td>
                            <td>frisch gehackte Petersilie</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>500g</td>
                            <td>Champignons</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>5 El</td>
                            <td>Zitronensaft</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Schuß</td>
                            <td>Weißwein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Paprika edelsüß (Ostmann)</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Chiliwürzer</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>weißer Pfeffer</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Salz</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Zweibeln in kleine Würfel schneiden</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Champignons waschen, Stumpf entfernen und in 5mm dicke Scheiben schneiden</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Butter in Pfanne erhitzen und die Zwiebeln darin bei starker Hitze andünsten</td>
                        </tr>                        
                        <tr>
                            <td>4</td>
                            <td>Champignons und 2 EL Zitronensaft zugeben</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Deckel auf die Pfanne geben und bei mittlerer Hitze 8 Min andünsten</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Petersilie klein schneiden</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Champignons mit Weißwein ablöschen und 100g Schlagsahne zugeben</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Petersilie zugeben</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Abschmecken:
                                <br>- viel Paprika edelsüß
                                <br>- wenig Chiliwürzer
                                <br>- 1/5 eines Fleischbrühwürfels
                                <br>- ewtas Salz
                                <br>- 3 EL Zitronensaft                                
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>mit Semmelknödel oder Reis servieren</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo9">
            <div data-role="header" id="hf009" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Thai Curry</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Thai Curry</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-theme="a" data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>70 g</td>
                            <td>rote Currypaste</td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>400 ml</td>
                            <td>Kokosmilch</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100 ml</td>
                            <td>Wasser</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>250 g</td>
                            <td>Hühnchenbrust</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>1</td>
                            <td>Paprika</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>1</td>
                            <td>Karotte</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1/2</td>
                            <td>Brokkoli</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>4</td>
                            <td>Kaffir-Limetten-Blätter</td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>2 Tl.</td>
                            <td>Fischsauce</td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>4 Tl.</td>
                            <td>Zucker</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>4 Tl.</td>
                            <td>Pflanzenöl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>20</td>
                            <td>frische Basilikumblätter</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>  
                        <tr>
                            <td>1</td>
                            <td>Tasse Basmatireis</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Karotte schälen und leicht schräg in dünne Scheiben schneiden</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Paprika entkernen und in Streifen schneiden</td>
                        </tr> 
                        <tr>
                            <td>3</td>
                            <td>Brokkoliköpfe freischneiden und in einem seperaten Topf im Wasser 3-4 Min. kochen</td>
                        </tr> 
                        <tr>
                            <td>4</td>
                            <td>Hähnchenbrust in Stücke schneiden</td>
                        </tr> 
                        <tr>
                            <td>5</td>
                            <td>Chili entkernen und in feine, dünne Streifen schneiden</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>1 Tasse Basmatireis und 2 Tassen Wasser in einen Topf geben und zum kochen bringen. Anschließend auf mittlere Hitze zurückschalten und den Reis solange kochen bis Wasser verdampft ist</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Pflanzenöl in einer großen Pfanne erhitzen</td>
                        </tr> 
                        <tr>
                            <td>8</td>
                            <td>200 ml Kokosmilch und die Currypaste in die Pfanne geben und unter rühren kurz anbraten bis sich ein Aroma entwickelt hat. Anschließend die Hitze reduzieren</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>restliche Kokosmilch und 100 ml Wasser zugeben, zum kochen bringen. Kaffir-Limetten-Blätter und Karotten zugeben und etwas kochen lassen</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Fischsauce, Zucker, geschnittenes Hühnchen, Paprika und Brokkoli zugeben und kochen bis alles durch ist</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>mit dem Reis servieren </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>mit den Basilikumblättern und den Chilistreifen garnieren</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo8">
            <div data-role="header" id="hf008" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Flammenkuchen mit Feigen</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Flammenkuchen mit Feigen</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>1</td>
                            <td>Flammenkuchenteig</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Scheiben Serrano Schinken</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Feigen</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Frühlingszwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Bund Thymian</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>150 g</td>
                            <td>Crème fraîche</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>30 g</td>
                            <td>Haselnusskerne</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Salz, Pfeffer, Zucker</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>                        
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Ofen auf 220°C Umluft bzw. 240°C Ober-/Unterhitze vorheizen</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Feigenstiele entfernen und Feigen in ca. 5mm dicke Scheiben schneiden</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Frühlingszwiebeln von Wurzeln und obersten Grün befreien und in feine Ringe schneiden</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Thymianblätter von den Stielen zupfen</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>In einer Schüssel Crème fraîche mit Frühlingszwiebeln und der Hälfte des Thymians vermengen. Mit 1/2 Tl. Salz und nach Geschmack mit Pfeffer würzen</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Haselnusskerne grob hacken</td>
                         </tr>
                         <tr>
                            <td>7</td>
                            <td>Flammenkuchenteig mit dem Backpapier direkt auf dem Backblech ausrollen</td>
                         </tr>
                         <tr>
                            <td>8</td>
                            <td>Flammenkuchen mit der Thymian-Frühlingszwiebel-Crème gleichmäßig bestreichen</td>
                         </tr>
                         <tr>
                            <td>9</td>
                            <td>Feigenscheiben auf der Crème verteilen und den Flammkuchen auf die mittlere Schiene ca. 12 Min. im Ofen goldbraun backen</td>
                         </tr>
                         <tr>
                            <td>10</td>
                            <td>2 El. Zucker gleichmäßig in eine Pfanne streuen und bei mittlerer Hitze verflüssigen</td>
                         </tr>
                         <tr>
                            <td>11</td>
                            <td>gehackte Haselnüsseeinstreuen und hellbraun karamellisieren</td>
                         </tr>
                         <tr>
                            <td>12</td>
                            <td>anschließend auf Backpapier geben, erkalten lassen und in kleine Stücke zerteilen</td>
                         </tr>
                         <tr>
                            <td>13</td>
                            <td>den goldbraun gebackenen Flammkuchen aus dem Ofen nehmen, halbieren und mit Serrano Schinken belegen</td>
                         </tr>
                         <tr>
                            <td>14</td>
                            <td>Flammkuchen auf einem Holzbrett oder einem flachen Teller anrichten und mit Haselnusskrokant und verbliebenen Thymianblättern garnieren</td>
                         </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo7">
            <div data-role="header" id="hf007" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Dumplings</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Dumplings</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten Dumplings</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                         
                        <tr>
                            <td>
                                300
                            </td>
                            <td>g</td>
                            <td>
                                Chinakohl
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                60
                            </td>
                            <td>g</td>
                            <td>
                                Möhre
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                10
                            </td>
                            <td>g</td>
                            <td>
                                Salz
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                300
                            </td>
                            <td>g</td>
                            <td>
                                gemischtes Hackfleisch
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td></td>
                            <td>
                                Knoblauchzehe gerieben
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                30
                            </td>
                            <td></td>
                            <td>
                                frischer Ingwer (geschält, gerieben)
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                30
                            </td>
                            <td></td>
                            <td>
                                Frühlingszwiebeln (fein gewürfelt)
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                + 1
                            </td>
                            <td></td>
                            <td>
                                Frühlingszwiebel in Scheiben geschnitten zum servieren
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                10
                            </td>
                            <td>g</td>
                            <td>
                                körnige Gemüsebrühe
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                10
                            </td>
                            <td>g</td>
                            <td>
                                Zucker
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td></td>
                            <td>
                                Prise weißer Pfeffer
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td></td>
                            <td>
                                Spritzer Reisessig
                            </td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>                        
                        <tr>
                            <td>
                                1
                            </td>
                            <td></td>
                            <td>
                                Spritzer Sesamöl
                            </td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                32
                            </td>
                            <td></td>
                            <td>
                                Wan-Tan-Blätter
                            </td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>                 
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten Sauce</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>
                                3 El.
                            </td>
                            <td>
                                Seasamöl
                            </td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                3 El.
                            </td>
                            <td>
                                Sojasoße
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                3 El.
                            </td>
                            <td>
                                Reisessig
                            </td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                1 Tl.
                            </td>
                            <td>
                                Sriracha-Sauce (scharfe Chilisauce)
                            </td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                rote Chilischote enkernt, feingehackt
                            </td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                einige Stiele Koriandergrün grob gehackt
                            </td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>                                            
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung Dumblings</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Chinakohl und Möhre fein hacken und in eine Schüssel geben
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                10 g Salz einmassieren, Schüssel abdecken und für ca. 30 Min. in den Kühlschrank stellen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Flüssigkeit abgießen und Gemüse mit den Händen ausdrücken um restliches Wasser zu entfernen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                Gemüse mit Hack, Knoblauch, Ingwer und restlichem Salz vermengen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td>
                                restliche Zutaten zugeben und alles gut vermengen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td>
                                Wan-Tan-Blätter auf einer großen Abreitsfläche auslegen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                7
                            </td>
                            <td>
                                auf jedes Blatt einige gehäufte Tl. der Masse setzen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                8
                            </td>
                            <td>
                                einen Finger in eine Schüssel Wasser tauchen, damit an den Kanten der Wan-Tan-Blätter entlang fahren
                            </td>
                        </tr>
                        <tr>
                            <td>
                                9
                            </td>
                            <td>
                                alle Blätter einmal falten und die Kanten fest zusammen drücken
                            </td>
                        </tr>
                        <tr>
                            <td>
                                10
                            </td>
                            <td>
                                Wasser in einem großen Topf zum kochen bringen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                11
                            </td>
                            <td>
                                Klößchen mit einem Sieblöffel in den Topf geben, Wasser aufkochen lassen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12
                            </td>
                            <td>
                                Temperatur reduzieren, Klößchen 3-4 Min. ziehen lassen, wenn sie an die Oberfläche steigen sind sie gar
                            </td>
                        </tr>                      
                    </tbody>
                </table>
            </div>   
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung Sauce</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>   
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                die Zutaten für die Dipsauce in einer Schüssel vermengen und bei Seite stellen
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>   
        </div>

        <div data-role="page" id="foo6">
            <div data-role="header" id="hf006" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Spaghetti Bolognese</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Spaghetti Bolognese</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>150 ml</td>
                            <td>Rotwein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>300 g</td>
                            <td>gemischtes Hackfleisch</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dosen gestückelte Tomaten (Oro di Parma)</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Zwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1/2</td>
                            <td>Gemüsebrühwürfel</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 El.</td>
                            <td>Senf</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>300 g</td>
                            <td>Penne</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Rosmarien Gewürz</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>4 El.</td>
                            <td>Olivenöl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1/2 El.</td>
                            <td>Honig</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>                        
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Nudelwasser zum kochen bringen und salzen</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Zwiebeln grob würfeln</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Olivenöl in der Pfanne erhitzen</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Zwiebeln zugeben und andünsten</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Hackfleisch zugeben und anbraten. Zu große Hackfleischstücke mit einer Gabel zerdrücken</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Penne ins Nudelwasser geben</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Hackfleisch mit Salz, Peffer und Rosmarien würzen</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>mit Rotwein ablöschen</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>gestückelte Tomaten zugeben</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>1 El. Senf und 1/2 El. Honig zugeben</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>bei mittlere Hitze 10 Min. kochen</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>eventl. mit Brühe nachwürzen</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo5">
            <div data-role="header" id="hf005" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Quiche Lorraine</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Quiche Lorraine</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>6</td>
                            <td>Eier</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>300 g</td>
                            <td>gewürfeltes Dürrfleisch/Schinken</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>300 g</td>
                            <td>geriebener Emmentaler</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>200 g</td>
                            <td>Creme Fraiche</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Blätterteig (Kühlregal)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Salz & Pfeffer</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Pri.</td>
                            <td>Muskatnuß (Ostmann)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tarteform</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>     
                        <tr>
                            <td>1</td>
                            <td>Backofen auf 180°C Umluft aufheitzen</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tarteform mit kalten Wasser ausspühlen und mit Blätterteig auslegen</td>                            
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Eiweiß und Eigelb trennen und in seperate Schüsseln geben</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Eiweiß für ca. 5 Min mit der Rührmaschine bei voller Leistung zu steifem Eischnee schlagen</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>1 EL. Wasser zum Eigelb geben und für ca. 5 Min. mit der Rührmaschine bei voller Leistung schaumig rühren</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>gute Prise Salz, Pfeffer, Muskatnuß, Dürrfleisch und Creme Fraiche zum schaumigen Eigelb geben und verrühren</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Emmentaler nach und nach zu geben und verrühren</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Eischnee nach und nach locker unterheben</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Mischung in die mit Blätterteig ausgelegte Tarte geben und gleichmäßig verteilen</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>für 30-40 Min. in den Backofen geben</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>
        <div data-role="page" id="foo4">
            <div data-role="header" id="hf004" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Tomaten Kokossuppe</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Tomaten Kokossuppe</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>2</td>
                            <td>Frühlingszwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>3 El</td>
                            <td>neutrales Pflanzenöl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>500 g</td>
                            <td>passierte Tomaten (Tetrapak)</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Kaffirlimettenblätter</td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Prs.</td>
                            <td>Salz</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Prs</td>
                            <td>Cayennepfeffer</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>250 ml</td>
                            <td>Kokosmilch</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Tl</td>
                            <td>Zucker</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100 g</td>
                            <td>Räuchertofu</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 EL + 1 Tl</td>
                            <td>Speisestärke</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td>Frühlingszwiebeln putzen. Weiße und grüne Teile getrennt in dünne Ringe schneiden</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>im Suppentopf 1 EL Öl erhitzen und das Weiße der Frühlingszweibeln darin bei mittlerer Hitze ca 3 Mi. glasig werden lassen</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>passierte Tomaten zugeben und aufkochen</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Limettenblätter waschen, trocken tupfen, mehrmals einreisen und zusammen mit den Kokosmilch in den Topf geben</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>alles mit Salz, Cayennepfeffer und Zucker würzen</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>alles einmal aufkochen und dann bei kleiner Hitze offen ca. 10 Min.kochen</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Tofu in ca. 2cm groß würfeln und in 1El. Speisestärke wenden</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>in einer Pfanne das restliche Öl erhitzen und die Tofuwürfel darin bei starker Hitze in ca. 5 Min. goldbraun und knusprig braten</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Tofuwürfel aus der Pfanne nehmen und auf Küchenpapier entfetten</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>die Limettenblätter aus dem Topf fischen</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>1 Tl. Speisestärke mit 2 El. kalten Wasser verrühren, in die Suppe geben und noch einmal aufkochen</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>die Suppe mit Salz, Cayennepfeffer und Zucker abschmecken</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>zum Servieren in tiefe Schalen füllen und mit den Tofwürfeln und den rohen grünen Frühlingszwiebelringen bestreuen</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>

        <div data-role="page" id="foo1">
            <div data-role="header" id="hf001" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Flammenkuchen mit Blattspinat</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Flammenkuchen mit Blattspinat</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>1</td>
                            <td>Flammkuchenteig</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>50 g</td>
                            <td>Tiefkühlblattspinat</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>30 g</td>
                            <td>Rucola</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Schafskäse (Salakis)</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>30 g</td>
                            <td>Oliven ohne Stein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Pck.</td>
                            <td>Schmand</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>30 g</td>
                            <td>Parmesan</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Tl.</td>
                            <td>Salz</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Backpapier</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Backofen auf 200°C Ober- und Unterhitze aufheitzen</td>
                        </tr>     
                        <tr>
                            <td>2</td>
                            <td>Backpapier auf Backblech legen und Flammkuchenteig darauf ausbreiten</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>gefrorenen Blattspinat in ein Sieb geben und mit dem Sieb in eine Schüssel mit warmen Wasser hängen</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Schmand in einer kleinen Schüssel mit einem Tl. Salz verrühren</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Schmand auf dem Flammkuchenteig gleichmäßig verteilen</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Rucola waschen und auf dem Flammkuchenteig verteilen</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>den aufgetauten Spinat aus dem Wasser holen, abtropfen lassen und auf dem Flammkuchenteig verteilen</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Schafskäse in kleine Würfel schneiden und auf dem Flammkuchenteig verteilen</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Oliven in Ringe schneiden und auf dem Flammkuchenteig verteilen</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Parmsan reiben und auf dem Flammkuchenteig verteilen</td>
                        </tr>     
                        <tr>
                            <td>10</td>
                            <td>Flammkuchenteig für ca 10 min in den Backofen geben</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Schnell servieren</td>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>


        <div data-role="page" id="foo2">
            <div data-role="header" id="hf002" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Pasta all'arrabbiata</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Pasta all'arrabbiata</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>  
                        <tr>
                            <td>400</td>
                            <td>g</td>
                            <td>Penne</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Dosenstückige Tomaten</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td> scharfe Pepperonie (Piri Piri)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>ml</td>
                            <td>Weißwein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>g</td>
                            <td>Oliven ohne Stein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>g</td>
                            <td>Parmesan</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td></td>
                            <td>Blätter frisches Basilikum</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>     
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Zwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td>Knoblauchzehen</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>El</td>
                            <td>Olivenöl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1/2</td>
                            <td></td>
                            <td>Gemüsebrühwürfel</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Prise Cayennepfeffer (Ostmann)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Prise Chiliwürzer (Ostmann)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Prise Salz</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>                                   
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Wasser aufsetzen, salzen und zum kochen bringen</td>
                        </tr>     
                        <tr>
                            <td>2</td>
                            <td>Penne ins kochende Wasser geben und 10 - 12 min bissfest kochen</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Zwiebeln würfeln</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Knoblauchzehen, Basilikumblätter kleinschneiden</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Oliven in Ringe schneiden</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Parmesan reiben</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Olivenöl in sehr großer Pfanne erhitzen und Zwiebeln, Knoblauch, Pepperonie darin anschwitzen</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>stückige Tomaten zugeben und aufkochen lassen</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>mit Weißwein ablöschen</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>halben Gemüsebrühwüfel zugeben</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Prise Cayennepfeffer, Prise Chiliwürzer zugeben und alles umrühren</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Oliven zugeben</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>alles 5 - 10 min bei mittlere Hitze köcheln lassen</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>fertige Penne in die Pfanne geben und gut mit Soße vermischen</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>im tiefen Teller servieren und mit Parmesan bestreuen</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <div data-role="page" id="foo3">
            <div data-role="header" id="hf003" data-theme="b" data-position="fixed"> 
                <a href="#"  data-rel="back" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-back">Back</a>
                <h1>Kokosmilchsuppe mit roten Curry und roten Linsen</h1>
            </div>
            <h4 class="ui-bar ui-bar-a" style="margin-bottom:0px;">Kokosmilchsuppe mit roten Curry und roten Linsen</h4>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zutaten</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">
                    <tbody>                    
                        <tr>
                            <td>1 Bund</td>
                            <td>Lauchzwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Tl</td>
                            <td>Ingwer frisch gerieben</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1/2 Tl</td>
                            <td>roter Curry</td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100 g</td>
                            <td>rote Linsen</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>400 ml</td>
                            <td>Gemüsebrühe</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>400 ml</td>
                            <td>Kokosmilch</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2 Zweige</td>
                            <td>Korinadergrün</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;">
                                <img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kaffir-Zitornenblätter</td>
                            <td><img src="asia.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>3 El</td>
                            <td>Öl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div data-role="content">
                <h3 class="ui-bar ui-bar-a ui-corner-all">Zubereitung</h3>
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle:none" class="ui-body-d ui-shadow ui-corner-all ui-responsive table-stroke table-strips">

                    <tbody>                    
                        <tr>
                            <td>1</td>
                            <td>Zwiebellauch putzen, waschen und in kleine ringe schneiden</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ingwer fein reiben</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tomaten putzen, Strunk entfernen, Kerngehäuse heraus schneiden und die Zungen würfeln</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Linsen waschen</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Koriander zupfen und klein schneiden</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Zwiebellauch in etwas Öl angehen lassen</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Curry zugeben und kurz mit anschwitzen lassen</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>mit Gemüsebrühe auffüllen</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Kokosmiclh, Linsen, Ingwer und Kaffirblätter hinzufügen und aufkochen lassen</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Suppe ca 15 min köcheln, bis die Linsen weich sind</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Erst jetzt Korinander und die Tomatenwürfel zugeben und kurz in der Suppe erwärmen</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Anschließend sofort servieren</td>
                        </tr>                    
                    </tbody>
                </table>
            </div>
    </body>
</html>