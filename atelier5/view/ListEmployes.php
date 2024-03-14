<?php
include '../controller/employerc.php';
$employeC = new EmployeC();
$list = $employeC->listEmployes();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of employes</h1>
        <h2>
            <a href="inscription.php">Add Employe</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $employe) {
        ?>
            <tr>
            <td><?= $employe['id']; ?></td>
                <td><?= $employe['FirstName']; ?></td>
                <td><?= $employe['LastName']; ?></td>
                <td><?= $employe['Password']; ?></td>
                <td><?= $employe['Phone']; ?></td>
                <td><?= $employe['Email']; ?></td>
                <td><?= $employe['Date of birth']; ?></td>
                <td align="center">
                    <form method="POST" action="updateEmploye.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $employe['id']; ?> name="id">
                    </form>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $employe['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>