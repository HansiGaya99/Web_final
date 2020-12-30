<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reservations</title>
    <link rel="stylesheet" href="../css/css.css">
  

  </head>
<body class="pback container">

<?php

include_once "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$arrive = $_POST["arrive"];
$depart = $_POST["depart"];
$adult = $_POST["adult"];
$child =$_POST["child"];
$category=$_POST["category"];
$flag=TRUE;


if($fname=="")
{
    echo "<script> alert ('Please Enter the First Name ');</script>";
    $flag = FALSE;
}
if($lname=="")
{
    echo "<script> alert ('Please Enter the Last Name ');</script>";
    $flag = FALSE;
}
if($mail=="")
{
    echo "<script> alert ('Please Enter the E-mail ');</script>";
    $flag = FALSE;
}
if($phone=="")
{
    echo "<script> alert ('Please Enter the Phone Number ');</script>";
    $flag = FALSE;
}
if($arrive == "" || $depart == ""){
    echo "<script> alert('Both Arrival & Departing dates Are Required');</script>";
    $flag = FALSE;
}
if($adult == "Choose" || $child == "Choose"){
    echo "<script> alert('Please Select The Number of Adults & Children');</script>";
    $flag = FALSE;
}
if($category == "Choose"){
    echo "<script> alert('Please Select A Category');</script>";
    $flag = FALSE;
}

if($flag!=FALSE)
{
    if(isset($_POST["resbut"]))
    {
    $qry1 ="SELECT * FROM $category WHERE Statuss='Yes';";

    $res = $con->query($qry1);
    if($res->num_rows > 0)
    {
        $row = $res -> fetch_assoc();
        $RoomNo =$row["RoomNo"];
        $Status =$row["Statuss"];

        $qry2= "UPDATE $category SET Statuss ='No' WHERE RoomNo =$RoomNo;";
        $con->query($qry2);

        $qry3 = "INSERT INTO reservations (FirstName,LastName,Email,Phone,ArrivalDate,DepartureDate,Adult,Children,Category) VALUES ('$fname','$lname','$mail',$phone,'$arrive','$depart',$adult,$child,'$category');";

        if($con->query($qry3))
        {
            echo "<script > alert ('Reserved Succsessfuly'); window.location.href='../database/logout.php';</script>";
        }
        else
        {
            echo "<script > alert ('Some Thing Not Right !, Please Try Again..'); window.location.href='../html/reservation.html';</script>";
        }

    }
    else
    {
        echo "<script > alert ('This Category is already Full ! , Please choose another category..'); window.location.href='../html/reservation.html';</script>";
    }
}


}
else
{
    
  echo "<script> window.location='../html/reservation.html';</script>";
}




$con->close();
?>

</body>
</html>