<?php
session_start();
$name = $_SESSION['SESS_NAME'];
$pname = $_POST['pname'];
$type = $_POST['type'];
$tenure = $_POST['tenure'];
echo $pname.$type.$tenure.$name;
?>