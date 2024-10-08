<?php
$title = "Some-teams Football Clubs";
$section = "this is my home page information and content";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <nav>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Start</a></li>
            <li><a href="contact.php">Contact</a></li>
        </nav>
    </header>