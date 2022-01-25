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

// Menambah folder app pada root
// code block mail sudah dihapus
// Hasil Resovle conflick

?>