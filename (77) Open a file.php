<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$file = fopen("Welcome.txt", "r");
if ($file) {
    echo "<br>This Program is Written by Sarvesh Bhardwaj 0221BCA062";
    fclose($file);
} else {
    echo "<br>Failed to open file.";
}
?>