<?php
    require_once("../db/database.php");

    $database = new Database();

    try {

        $sql = "SELECT maintenance_request.*, room.Func_Name FROM `Maintenance_Request`, `Room` WHERE maintenance_request.Room_ID = room.ID"; // TO DO

        $database->query($sql);
        $results = $database->resultset();
    }
    catch(PDOException $e) {
        $error[] = $e->getMessage();
    }

    $return_array=array();
    foreach($results as $row) {
        $row_array = array();
        $row_array[]=$row['Func_Name'];
        $row_array[]=$row['Room_ID'];
        $row_array[]=$row['Activity'];
        $row_array[]=$row['Creation_Date'];
        $row_array[]=$row['Completion_Date'];
    
        $return_array[]=$row_array;
    }

    echo '{ "data": ' . json_encode($return_array) . '}';
?>