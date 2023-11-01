<?php
// zapocni session
session_start();

setlocale(LC_ALL, "Croatian"); // za windows
setlocale(LC_ALL, "hr_HR"); // za unix

// ukljuci/iskljuci error reporting
// turn on / off error reporting
$error_reporting = 0;
if ($error_reporting){
    ini_set('display_errors','1');
    ini_set('display_startup_errors','1');
    error_reporting (E_ALL ^ E_NOTICE);
} else {
    ini_set('display_errors','0');
    ini_set('display_startup_errors','0');
    error_reporting (E_ALL ^ E_NOTICE);  
}

// odredi varijable iz url-a (umjesto .httaccessa)
$url = $_SERVER['REQUEST_URI'];
$urlArr = explode('/', $url);

//prazan zahtjev ide na home
if ($_SERVER['REQUEST_URI'] == '/') {
    header('Location: /home');
    die();
}


switch ($urlArr[1]) {

    case 'home':
    $stranica = 'home';
    break;
    
    case 'about':
    $stranica = 'about';
    break;

    case 'contact':
    $stranica = 'contact';
    break;
    
    case 'rent-a-boat':
    $stranica = 'rent-a-boat';
    break;
    
    case 'fishing':
    $stranica = 'fishing';
    break;
    
    case 'transfers-and-excursions':
    $stranica = 'transfers-and-excursions';
    break;
    
    case 'destinations':
    $stranica = 'destinations';
    break;
    
    case 'pricing':
    $stranica = 'pricing';
    break;
    

}

// ako se doslo sa nekog starog linka pokazi 404 stranicu
if ($stranica =="") {
	$stranica='404';
    http_response_code(404);
}
