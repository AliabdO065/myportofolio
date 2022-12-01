<?php  

// register
function addNewUser($name,$email,$password){
$con = mysqli_connect("localhost","root","","portofolio");
$sql = "INSERT INTO `user` (`name`, `email`, `password`)
         VALUES ('$name','$email','$password')";
mysqli_query($con,$sql);
$res = mysqli_affected_rows($con);
}



// login
function login($email,$password){
    $con = mysqli_connect("localhost","root","","portofolio");
    $sql = "SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'";
    $q = mysqli_query($con,$sql);
    $res = mysqli_fetch_assoc($q);
     return $res;
    }