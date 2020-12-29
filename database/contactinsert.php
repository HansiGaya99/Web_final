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
<?php

include_once 'connection.php';

$fname = $_POST["cfname"];
$lname = $_POST["clname"];
$mail =$_POST["cmail"];
$com = $_POST["com"];



if(isset($_POST["cont"]))
{
    $cont ="INSERT INTO feedback (FirstName,LastName,Email,Feedback) VALUES ('$fname','$lname','$mail','$com');";

    if($con->query($cont))
    {
        echo "<script> alert ('Thank you for your FeedBack');window.location.href='../html/sea south side park.html';</script>";
    }
    else
    {
        echo "<script> alert ('Some Thing Not Right ! Please Try Again..');window.location.href='../html/sea south side park.html';</script>";
    }
}

$con->close();
?>
</body>
</html>