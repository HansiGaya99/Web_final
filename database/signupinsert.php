<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sea side south park</title>
    <link rel="stylesheet" href="../css/css.css">
  

</head>
<body class="pback container">
    <center>
<div class=" mx-auto text-center" style="color:rgb(121, 91, 47); width:100%;position: absolute;z-index: 1;font-size: 40px;font-family: lobster;margin-top: 40vh ;width: 100%;opacity: 0.9;">
<?php

include_once 'connection.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$nic = $_POST['nic'];
$pw = $_POST['pw'];

$qry1="insert into Sign_up_data (FirstName,LastName,Email,NICNumber,Password) values ('$fname','$lname','$mail','$nic','$pw');";

$res=mysqli_query($con,$qry1);

    if($res)
    {
        echo "<script > alert ('Registration Succesfull.. Please Login To See Your Details..'); window.location.href='../html/sea south side park.html';</script>";
    }
    else{
        echo "<script > alert ('Some Thing Not Right !, Please Try Again..'); window.location.href='../html/sea south side park.html';</script>";
    }

    $con->close();
?>

</div>
</center>

</body>
</html>