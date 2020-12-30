<?php

include_once "connection.php";

$que = $_POST['que'];

$qry4 = "INSERT INTO question (question) VALUES ('$que');";

        if($con->query($qry4))
        {
            echo "<script > alert ('Thank You for your response ..'); window.location.href='../html/Help.html';</script>";
        }
        else
        {
            echo "<script > alert ('Some Thing Not Right !, Please Try Again..'); window.location.href='../html/Help.html';</script>";
        }

?>
