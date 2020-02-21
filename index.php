<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

//model file
require 'model/Post.php';
require 'model/Guestbook.php';

//include_once 'model/Post.php';
//include_once 'model/Guestbook.php';

// controller file
include_once 'controller/HomepageController.php';

// make object of class HomepageController
$controller = new HomepageController();
// call function render it check submit
$controller->render($_POST);


