<?php
function get_client_ip(){
    
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}

function activity_protocol()
{
    $traceip = get_client_ip();
    $location = json_decode(file_get_contents('http://freegeoip.net/json/'.$traceip));    
    $time = date("Y-m-d H:i:s");
    $text =       " time: $time \n";  
    $text .= " ip: $location->ip \n";    
    $betreff = 'foodgraber --- LOAD ---';    
    $text .= "\n";
    $text .= "--- GeoLoc Data ---\n";
    $text .= " land: $location->country_name \n";
    $text .= " region: $location->region_name \n";
    $text .= " city: $location->city \n";
    $text .= " zipcode: $location->zipcode \n";
    $text .= " latitude: $location->latitude \n";
    $text .= " longitude: $location->longitude \n";
    
    $email = 'stephan.hoepfl@gmail.com';
    $kopfzeilen = "From:tracking@foodgraber.de";
    mail($email, $betreff, $text, $kopfzeilen);
}