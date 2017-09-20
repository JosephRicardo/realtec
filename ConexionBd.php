<?php
$bd = new mysqli("localhost", "root", "Chris2992", "realtec");
// Check connection
if ($bd->connect_error) {
    die("Connection failed: " . $bd->connect_error);
}
