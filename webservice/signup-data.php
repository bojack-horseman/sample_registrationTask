<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../classes/connection.php');
require_once('../classes/register_class.php');
$form_data = $_REQUEST; // REQUESTING user data from form filled
$test_data = new register(); //creating new instance of class
$login_data = $test_data->register_user($form_data); //performing the usage function of registering the user
echo json_encode($login_data); // using the return value for ajax success part.
?>
