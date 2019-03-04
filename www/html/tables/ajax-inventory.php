<?php
    require_once("../db/database.php");

    $database = new Database();

    try {

        $sql = "SELECT * FROM Room;"; // TO DO

        $database->query($sql);
        $results = $database->resultset();
    }
    catch(PDOException $e) {
        $error[] = $e->getMessage();
    }

    $return_array=array();
    foreach($results as $row) {
        $row_array = array();
        $row_array[]=$row['Number'];
        $row_array[]=$row['Func_Name'];
        $row_array[]='<a href="index.php?template=roomDetail&id='. $row['ID'] .'" class="w3-border w3-button">View Room Detail</a></td>';

        $return_array[]=$row_array;
    }

    echo '{ "data": ' . json_encode($return_array) . '}';
?>