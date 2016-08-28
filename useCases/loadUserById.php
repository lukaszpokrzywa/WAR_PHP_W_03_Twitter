<?php

require_once '../src/User.php';
require_once '../connection.php';

$user = User::loadUserById($conn, 2);
var_dump($user);

$user2 = User::loadUserById($conn, 435);
var_dump($user2);

$conn->close();
$conn = null;