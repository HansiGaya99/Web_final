
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

ini_set( "display_errors", 0);
session_start();
$logcheck=htmlspecialchars($_SESSION['logcheck']);
$logmailcheck= htmlspecialchars($_SESSION['Email']);
$resmailcheck =htmlspecialchars($_SESSION["Email2"]);
if($logcheck==TRUE)
{
    if($logmailcheck==$resmailcheck)
    
    {
        header('Location: ../database/accounts.php');
        exit();
    }
    else
    {
        header('Location: ../database/accounts2.php');
        exit();

    }
}
else{

    echo "<script > alert ('Please login First !'); window.location.href='../html/sea south side park.html';</script>";
    

}

?>
</body>
</html>