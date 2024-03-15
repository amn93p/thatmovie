<?php
require_once(__DIR__ . '/../../config/function.php');
require_once(__DIR__ . '/../Models/User.php');

$users = new User;

$myListUsers = $users->getUserList();


require_once(__DIR__ . '/../Views/home.view.php');
