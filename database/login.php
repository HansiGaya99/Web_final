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
<div class=" mx-auto text-center" style="color:rgb(121, 91, 47); width:100%;position: absolute;z-index: 1;font-size: 40px;margin-top: 10vh ;width: 100%;opacity: 0.9;">
<?php

include_once 'connection.php';


$mail = $_POST['logmail'];
$pw = $_POST['logpw'];


if(isset($_POST["log"]))
{
$qry="SELECT * FROM Sign_up_data WHERE Email = '$mail';";

$res=$con->query($qry);

$row = $res->fetch_assoc();

$umail=$row["Email"];
$upw = $row["Password"];

$fname = $row["FirstName"];
$lname = $row["LastName"];
$nic =$row["NICNumber"];

$qry2="SELECT * FROM reservations WHERE Email = '$mail';";

$res2=$con->query($qry2);

$row2 = $res2->fetch_assoc();

$fname2= $row2["FirstName"];
$lname2=$row2["LastName"];
$umail2=$row2["Email"];
$phone2=$row2["Phone"];
$arrive2=$row2["ArrivalDate"];
$depart2=$row2["DepartureDate"];
$adult2=$row2["Adult"];
$child2=$row2["Children"];
$category2=$row2["Category"];

if($pw == $upw)
{

    if($umail==$umail2)
    {
    session_start();
    $_SESSION['logcheck']=TRUE;
    $_SESSION['NameFirst']= $fname;
    $_SESSION['NameLast']=$lname;
    $_SESSION['NICno']=$nic;
    $_SESSION['Email']=$mail;

    $_SESSION['NameFirst2']=$fname2;
    $_SESSION["NameLast2"]=$lname2;
    $_SESSION["Email2"]=$umail2;
    $_SESSION["Phone2"]=$phone2;
    $_SESSION["Arrive2"]=$arrive2;
    $_SESSION["Depart2"]=$depart2;
    $_SESSION["Adult2"]=$adult2;
    $_SESSION["Child2"]=$child2;
    $_SESSION["category2"]=$category2;
    

    header('Location: accounts.php');

    exit();
    }
    else
    {
    session_start();
    $_SESSION['logcheck']=TRUE;
    $_SESSION['NameFirst']= $fname;
    $_SESSION['NameLast']=$lname;
    $_SESSION['NICno']=$nic;
    $_SESSION['Email']=$mail;

    header('Location: accounts2.php');

    exit();

    }

    /*echo "<span style='font-family: lobster;'>Login Succesfull..<br> Thank You for Join With Us..</span><br><br>";
    echo "<span style='font-size: 20px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;'><table>
    <caption style='margin:50px;'><b>Your Details..</b></caption>
    <tr><td>Name :</td><td> $fname $lname </td>
    <tr><td> Email : </td><td>$umail </td> 
    <tr><td>NIC Number : </td><td>$nic </td> 
    <tr><td>Password : </td><td>$upw </td>
    </table>
    </span>";
    echo "<button class='buttongallery' style='padding: 2px;width: 180px;'>Cancel Reservation</button>";*/
}
else
  {
      echo "<script > alert ('Email Or Password Is Incorrect !'); window.location.href='../html/sea south side park.html';</script>";
  }  
}
$con->close();   
?>

</div>
</center>

</body>
</html>