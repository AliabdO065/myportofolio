<?php

//insert

function addNewPortofolio($img,$desc,$userid){
    $con = mysqli_connect("localhost","root","","portofolio");
    $sql = "INSERT INTO `portofolio`(`img`, `description`,`user_id`)
            VALUES ('$img','$desc','$userid')";
    mysqli_query($con,$sql);
    $res = mysqli_affected_rows($con);
    if($res == 1) return true;
    else return false;
    }


//getportofolioes
function getPortofolioes(){
    $con = mysqli_connect("localhost","root","","portofolio");
    $sql = "SELECT * FROM `portofolio`";
    $q = mysqli_query($con,$sql);
    $projects=[];
    while($res = mysqli_fetch_assoc($q)){
    $projects[]=$res;
    }
    return $projects;
}



//getportofolioes
function getPortofolio($id){
    $con = mysqli_connect("localhost","root","","portofolio");
    $sql = "SELECT * FROM `portofolio` WHERE `id` = $id";
    $q = mysqli_query($con,$sql);
    $res = mysqli_fetch_assoc($q); 
    return $res;
}


//delete
function deletePortofolio($id){
    $con = mysqli_connect("localhost","root","","portofolio");
    $sql = "DELETE FROM `portofolio` WHERE `id` = $id";
    $q = mysqli_query($con,$sql);
    if($q == true) return true;
    else return false;
}
//uptade
function uptadePortofolio($id,$desc,$img){
    $con = mysqli_connect("localhost","root","","portofolio");
    $sql = "UPDATE `portofolio` SET
            `description`= '$desc' ";
    if(!empty($img)){
        $sql .= ", `img` = '$img' ";
    }
    $sql.="WHERE `id` = $id";

    mysqli_query($con,$sql);
    $res = mysqli_affected_rows($con);
    if($res == 1) return true;
    else return false;
    }

