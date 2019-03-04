<?php 

session_start();

if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    //session_unset();
    //session_destroy();

}
//$user_id = trim($_SESSION['user_id']);
//$role = trim($_SESSION['role']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-html5-1.5.4/b-print-1.5.4/fh-3.1.4/datatables.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/muc.png" type="image/x-icon" />

    <title>MUC Management</title>
</head>
<body>
<div class="container-fluid bgimg-1"> <!-- page -->

