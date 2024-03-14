<?php 
$nom=$_POST['fName'];
$prenom=$_POST['lName'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

include "../controller/employerc.php";
include "../modele/employe.php";

$employe=new employe($nom,$prenom,$pass1,$phone,$email,$dob);
$emplo=new EmployeC();
$success = $emplo->addEmploye($employe);

if ($success) {
    echo "Employee added successfully!";
} else {
    echo "Failed to add employee. Please check your data and try again.";
}
?>
