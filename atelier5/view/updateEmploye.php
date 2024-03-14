<?php
include "../controller/employerc.php";

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    $employeC = new EmployeC();
    $employeC->updateEmploye($id, $firstName, $lastName, $phone, $email, $dob);

    header('Location: ListEmployes.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employe</title>
</head>
<body>
    <h1>Update Employe</h1>
    <?php
    $id = $_GET['id'];
    $employeC = new EmployeC();
    $employe = $employeC->getEmployeById($id);
    ?>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $employe['id']; ?>">
        <label for="firstName">First Name:</label><br>
        <input type="text" id="firstName" name="firstName" value="<?= $employe['firstName']; ?>"><br>
        <label for="lastName">Last Name:</label><br>
        <input type="text" id="lastName" name="lastName" value="<?= $employe['lastName']; ?>"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="<?= $employe['phone']; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?= $employe['email']; ?>"><br>
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" value="<?= $employe['dob']; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
