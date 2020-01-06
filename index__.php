<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now());


echo 'Test site LEMP222';
echo '</br>'; 

$ver = SQLite3::version();

echo $ver['versionString'] . "\n";
echo $ver['versionNumber'] . "\n";

var_dump($ver);

// if (!function_exists('getallheaders')){
//     echo "getallheaders dos not exist\n";
// }


// foreach (getallheaders() as $name => $value) {
//     echo "$name: $value\n";
// }
// var_dump($_SERVER);
// echo '</br>'; 

echo '</br>'; 
var_dump($_REQUEST);
echo '</br>'; 
echo '</br>'; 
// var_dump($_GET);
// echo '</br>'; 

// var_dump($_POST);
// echo '</br>'; 

// print_r($_REQUEST);
// print_r($_REQUEST[0]);
// print_r($_REQUEST[1]);

foreach ($_SERVER as $key => $value)  
{  
    echo $key. ' - '.$value.'</br>';  
    //print_r($key);
    //print_r($value);

// $value = mysql_real_escape_string( $value );  
// $value = addslashes($value);  
// $value = strip_tags($value);  
// if($value != ""){$requestnumber ++;}  
// echo $key. ' - '.$value.'</br>';  
}  
?>