<?php
$bd = new mysqli("localhost", "user", "pass", "database");
// Check connection
if ($bd->connect_error) {
    die("Connection failed: " . $bd->connect_error);
}
