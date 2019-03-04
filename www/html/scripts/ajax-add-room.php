<?php
    require_once("../db/database.php");

    $database = new Database();

    try {
        $sql = "INSERT INTO `User` (`Username`, `Password`, `First`, `Last`) VALUES (:username, :pass, :firstname, :lastname)"; 
        $database->query($sql);

        $database->bind(':user', $username);
        $database->bind(':pass', $password);
        $database->bind(':firstname', $firstname);
        $database->bind(':lastname', $lastname);

        $execute = $database->execute();
    }
    catch(PDOException $e) {
        $error[] = $e->getMessage();
    }

    // Status of Insert: echo 1 for success, 0 for fail
    echo "1";
?>