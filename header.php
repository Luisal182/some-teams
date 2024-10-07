<?php
$title = "Presentation Luis Arranz";
$section = "this is my home page information and content";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>

</head>

<body>
    <header>
        <h1><?php echo $title; ?></h1>

    </header>

    <header>


        <nav>
            <li><a href="about.php">About</a></li>
            <li><a href="start.php">Start</a></li>
            <li><a href="contact.php">Contact</a></li>
        </nav>
        <section>
            <p><?php echo $section; ?></p>
        </section>