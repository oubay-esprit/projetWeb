<?php

include "../controller/employerc.php";

$employeC=new EmployeC();
$employeC ->deleteemploye($_GET["id"]);

header('Location:ListEmployes.php');

?>