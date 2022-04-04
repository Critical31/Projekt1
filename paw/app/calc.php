<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x){
	$x = isset($_REQUEST['liczba']) ? $_REQUEST['liczba'] : null;	
}

function validate(&$x,&$messages){
	if ( ! (isset($x))) {
		return false;
	}




if ( ! (isset($x))) {

	$messages [] = 'Błędne wywołanie aplikacji. Brak parametru.';
}

if ( $x == "") {
	$messages [] = 'Nie podano liczby';
}
    
$liczby = explode(",", $x);
$ilosc = count($liczby);


for($i=0; $i<$ilosc; $i++){
    
    $j = $i+1;
    
    if (! is_numeric( $liczby[$i] )) {
		$messages [] = 'wartość ' . $j . ' nie jest prawidłowa';
	}
        
    }
    
if (count ( $messages ) != 0) return false;
	else return true;    

}

function process(&$x,&$messages,&$wynik){
	global $role;
    
    $liczby = explode(",", $x);
    $ilosc = count($liczby);
    
    if($role == 'admin' || $role == 'user' && $ilosc<=5){
    
    $dodaj = 0;
    for($i=0; $i<$ilosc; $i++){

        $dodaj = $dodaj + $liczby[$i];
        
    }
    
    $wynik = $dodaj/($ilosc);
    }
    else{ 
        $messages [] = 'Tylko administrator może wyliczyć średnią z więcej niż 5 liczb';}

}

$x = null;
$wynik = null;
$messages = array();

getParams($x);
if ( validate($x,$messages) ) { 
	process($x,$messages,$wynik);
}

include 'calc_view.php';