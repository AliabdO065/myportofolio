<?php
require_once('./lib/portofolio.php');
session_start();
$id = $_GET['proid'];
$result = deletePortofolio($id);
if($result == 1){
    header('LOCATION:modify.php');
} 
else {
   header('LOCATION:modify.php'); 
}
