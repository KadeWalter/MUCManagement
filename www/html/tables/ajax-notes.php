<?php
    require_once("../db/database.php");

    $database = new Database();

    try {

        $sql = "SELECT * FROM Room_Note;"; // TO DO

        $database->query($sql);
        $results = $database->resultset();
    }
    catch(PDOException $e) {
        $error[] = $e->getMessage();
    }

    $return_array=array();
    foreach($results as $row) {
        $row_array = array();
        $row_array[]=$row['Timestamp'];
        $row_array[]=$row['Text'];
    
        $return_array[]=$row_array;
    }

    echo '{ "data": ' . json_encode($return_array) . '}';
?>