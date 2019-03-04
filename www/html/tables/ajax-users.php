<?php
    require_once("../db/database.php");

    $database = new Database();

    try {

        $sql = "SELECT * FROM User;"; // TO DO

        $database->query($sql);
        $results = $database->resultset();
    }
    catch(PDOException $e) {
        $error[] = $e->getMessage();
    }

    $return_array=array();
    foreach($results as $row) {
    
       $row_array = array();
       $row_array[]=$row['First'];
       $row_array[]=$row['Last'];
       $row_array[]=$row['Username'];
       $row_array[]='<a class="w3-border w3-button">Edit Password</td>';
    }

    $return_array[]=$row_array;

    echo '{ "data": ' . json_encode($return_array) . '}';
?>