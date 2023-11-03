<?php

/**
 * Ce fichier permet de faire une connexion à la base de données.
 */

$host = 'localhost';
$dbname = 'books';
$username = 'root';
$password = '';

$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
