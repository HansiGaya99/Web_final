<?php
$con = mysqli_connect("localhost","root","");
if($con)
{
    
}
else{
    echo "Something went wrong!!";
}

$db=mysqli_select_db($con,"SSSP");
?>