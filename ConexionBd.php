<?php
$bd = new mysqli("localhost", "root", "bczbjsrb", "realTec");
// Check connection
if ($bd->connect_error) {
    die("Connection failed: " . $bd->connect_error);
}
