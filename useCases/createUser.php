<?php

require_once '../src/User.php';
require_once '../connection.php';

$user1 = new User();
$user1->setName('Łukasz');
$user1->setEmail('lukasz.pokrzywa@gmail.com');
$user1->setPassword('password1');

var_dump($user1->saveToDB($conn));

$conn->close();
$conn = null;
