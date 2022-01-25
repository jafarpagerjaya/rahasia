<?php

require ('../vendor/autoload.php');

$Browser = new foroco\BrowserDetection();

$useragent = $_SERVER['HTTP_USER_AGENT'];

// Get all possible environment data (array):
$result = $Browser->getAll($useragent);

$device = array(
    'os' => $result['os_title'],
    'bit_os' => ($result['64bits_mode'] == 1 ? '64 bit (x64)' : '32 bit (x86)'),
    'browser' => $result['browser_title'],
    'device_type' => $result['device_type']
);

echo '<pre>';
print_r($device);


// // Test Kirim email
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );    
// $from = "testing@rahasia.dev.id";
// $to = "jafarpager@gmail.com";
// $subject = "Checking PHP mail";    
// $message = "<strong>PHP</strong> mail berjalan dengan baik"; 
// $headers = "From:" . $from;    
// mail($to,$subject,$message, $headers);    
// echo "Pesan email sudah terkirim.";

?>