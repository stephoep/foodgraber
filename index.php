
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

        </style>
    </head>
    <body>         
        <div data-role="page" id="overview">
            <div data-role="header" id="headeroverview" data-theme="b" data-position="fixed"> 
                <h1>foodgraber</h1>
            </div>
            <div data-role="content">
                <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">

                    <!--F-->
                    <li><a href="#foo1">Flammenkuchen mit Blattspinat</a></li>

                    <!--K-->

                    <li><a href="#foo3">Kokosmilchsuppe mit roten Curry und roten Linsen</a></li>                    
    
                    <!--P-->
                    <li><a href="#foo2">Pasta all'arrabbiata</a></li>
                    
                    <!--Q-->
                    <li><a href="#foo5">Quiche Lorraine</a></li>
                    
                    <!--T-->
                    <li><a href="#foo4">Tomaten Kokossuppe</a></li>



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
                            <td>400 g</td>
                            <td>Penne</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2 Dosen</td>
                            <td>stückige Tomaten</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td> scharfe Pepperonie (Piri Piri)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100 ml</td>
                            <td>Weißwein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>100 g</td>
                            <td>Oliven ohne Stein</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>50 g</td>
                            <td>Parmesan</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>6 Blätter</td>
                            <td>frisches Basilikum</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>     
                        <tr>
                            <td>2</td>
                            <td>Zwiebeln</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Knoblauchzehen</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>4 El</td>
                            <td>Olivenöl</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1/2</td>
                            <td>Gemüsebrühwürfel</td>
                            <td><img src="penny.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Prise</td>
                            <td>Cayennepfeffer (Ostmann)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Prise</td>
                            <td>Chiliwürzer (Ostmann)</td>
                            <td><img src="rewe.png" style="width:25px; height:25px;"></td>
                        </tr>
                        <tr>
                            <td>1 Prise</td>
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
