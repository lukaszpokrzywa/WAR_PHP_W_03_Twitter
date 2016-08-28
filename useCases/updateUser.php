<?php

require_once '../src/User.php';
require_once '../connection.php';

$user = User::loadUserById($conn, 2);
$user->setName('User 2');
var_dump($user->saveToDB($conn));
$user = User::loadUserById($conn, 2);
var_dump($user);

$conn->close();
$conn = null;