<?php

session_start();
$_SESSION=array();
session_destroy();

header('Location: ../html/sea south side park.html');
exit();

?>