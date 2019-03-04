<?php
    require_once("../db/database.php");

    $database = new Database();

    try {
        $sql = "SELECT * FROM Asset WHERE ROOM_ID=:room_id"; 
        $database->query($sql);
        $database->bind(':room_id', '1');
        $results = $database->resultset();
    }
    catch(PDOException $e) {
        $error[] = $e->getMessage();
    }

    $return_array=array();
    foreach($results as $row) {
        $row_array = array();
        $row_array[]=$row['Barcode'];
        $row_array[]=$row['Cost'];
        $row_array[]=$row['Description'];
        $row_array[]=$row['Purchase_Date'];
        $row_array[]=$row['Vendor'];
        $row_array[]=$row['Last_Update'];
    
        $return_array[]=$row_array;
    }

    echo '{ "data": ' . json_encode($return_array) . '}';
?>
