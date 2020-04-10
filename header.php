<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Hotels App - <?php echo $title; ?></title>
</head>
<body>
<main>

    <!--connect and get number of hotels-->
    <?php
    $numOfHotels = null;
    require_once 'db.php';

    $db = null;
    ?>

    <a href="hotels.php">Hotels</a>
    <p>Number Of Hotels: <?php echo $numOfHotels?></p>
    <a href="api/hotels.php">API</a>

