<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class register
{
  function __construct()
  {
    $connect = new connect();
    $this->connect = $connect->connection();
    $this->date_added = date('Y-m-d-H-i-s');
  }
  public function register_user($user_data){
    if(isset($user_data) && !is_null($user_data)){
      // print_r($user_data); die;
      $user_register= $this->connect->users->insertOne([
        'username' => $user_data['username'],
        'email' => $user_data['email'],
        'phone' => $user_data['phone'],
        'address' => $user_data['address'],
        'date_added' => $this->date_added,
      ]);
      return $user_register->getInsertedId();
    }
  }
}
?>
