<?php
include_once "config_database.php";
const hostname = 'localhost';
const username = 'root';
const password = '';
const database = 'peridzinan_santri';
?>

$db = koneksi($hostname, $username, $password, $database);

function base_url()
{
    $base_url = "http://" . $_SERVER['HTTP_HOSTNAME'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
    return $base_url;
}