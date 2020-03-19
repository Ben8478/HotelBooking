<?php
class User {
public $email , $name;
function __construct($email,$name){
$_SESSION['email'] = $this->email=$email;
$_SESSION['name'] = $this ->name=$name;






}
function display_name(){
    echo $this->name;
}




}











?>