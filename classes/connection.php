<?php
require_once ('/Applications/MAMP/htdocs/sample_registrationTask/vendor/autoload.php');
class connect {
    public $connection;
    function connection(){
        $connection = new MongoDB\Client("mongodb://localhost:27017");
        return $connection->companydb;
    }
}
?>
