<?php 
include '../config.php';
class EmployeC{
    public function showEmploye($employe) {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>Last Name</td>
                <td>First Name</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Date of Birth</td>
            </tr>
            <tr>
                <td>'. $employe->getLastName() .'</td>
                <td>'. $employe->getFirstName() .'</td>
                <td>'. $employe->getPhone() .'</td>
                <td>'. $employe->getEmail() .'</td>
                <td>'. $employe->getDOB() .'</td>
            </tr>
        </table>';
    }
    public function deleteemploye ($id)
    {
        $sql ="DELETE FROM employe WHERE id = :id"; 
        $pdo =config::getConnexion ();
    
        $query =$pdo ->prepare($sql);
        $query ->bindValue (':id',$id);
    
        try{
            $query ->execute();
            
    
        }catch (PDOException $e)
        {
            $e ->getMessage();
        }
    }
    public function listEmployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function updateEmploye($id, $firstName, $lastName, $phone, $email, $dob)
{
    $sql = "UPDATE employe SET firstName=:firstName, lastName=:lastName, phone=:phone, email=:email, dob=:dob WHERE id=:id";
    $pdo = config::getConnexion();

    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id);
    $query->bindParam(':firstName', $firstName);
    $query->bindParam(':lastName', $lastName);
    $query->bindParam(':phone', $phone);
    $query->bindParam(':email', $email);
    $query->bindParam(':dob', $dob);

    try {
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
public function getEmployeById($id)
{
    $sql = "SELECT * FROM employe WHERE id = :id";
    $pdo = config::getConnexion();

    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id);

    try {
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}
public function addEmploye($employe)
{
    $sql = "INSERT INTO employe (lastName, firstName, password, phone, email, dOB) VALUES (:lastName, :firstName, :password, :phone, :email, :dOB)";
    $pdo = config::getConnexion();

    $query = $pdo->prepare($sql);
    $query->bindValue(':lastName', $employe->getLastName());
    $query->bindValue(':firstName', $employe->getFirstName());
    $query->bindValue(':password', $employe->getPassword());
    $query->bindValue(':phone', $employe->getPhone());
    $query->bindValue(':email', $employe->getEmail());
    $query->bindValue(':dOB', $employe->getDOB());

    try {
        $query->execute();
        return true; // Successful insertion
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); // Display error message
        return false; // Failed insertion
    }
}



    
}



?>