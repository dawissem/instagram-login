<?php

$sername="localhost";
$username="root";
$password= "AAA";
$dbname="ajout";

try {

    $conn= new PDO("$mysql:host=$servername,$dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // echo"la connexion a ete bien etablie";
}
catch (PDOException $e){
    echo"la connexion a echoue: " .$e->getMessage();
}
if(isset($_POST['Envoyer']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = ("INSERT INTO `users`(`email`, `password`) VALUES(:email, :password)");
    $stmt->$conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam('', $password);
    $stmt->execute();

}
?>