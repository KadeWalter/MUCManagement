<?php
    require_once("../db/database.php");

    $database = new Database();

    try {

        $sql = "SELECT service_asset.*, asset.Barcode FROM `Service_Asset`, `Asset` WHERE service_asset.ID = asset.ID"; // TO DO

        $database->query($sql);
        $results = $database->resultset();
    }
    catch(PDOException $e) {
        $error[] = $e->getMessage();
    }

    $return_array=array();
    foreach($results as $row) {
        $row_array = array();
        $row_array[]=$row['Barcode'];
        $row_array[]=$row['Last_Service'];
        $row_array[]=$row['Next_Service'];
        $row_array[]=$row['Cond'];
        $row_array[]=$row['Cycle_Length'];
    
        $return_array[]=$row_array;
    }

    echo '{ "data": ' . json_encode($return_array) . '}';
?>