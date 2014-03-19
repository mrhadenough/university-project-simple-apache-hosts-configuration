<?
session_start();
error_reporting(E_ALL);
chdir(__DIR__); // make your life easy :)

function dbg($obj) {
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
}