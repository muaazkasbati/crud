<?php


if(isset($_GET['id'])){


    $id = $_GET['id'];

    $con = mysqli_connect("localhost","root","","school");

    $Delete = $con->query("DELETE FROM `student` WHERE `id`='$id'");
  
    header("location:student.php");

}


?>