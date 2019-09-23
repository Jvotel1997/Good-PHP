<?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i:s");
    $greeting = "";
    if ($time < "12:00") {
        $greeting = "Good morning!";
        $image = "backgrounds/morning.png";
    } elseif ($time < "18:00") {
        $greeting = "Good afternoon!";
        $image = "backgrounds/afternoon.png";
    } elseif ($time < "24:00") {
        $greeting = "Good evening!";
        $image = "backgrounds/evening.png";
    } else {
        $greeting = "Good night!";
        $image = "backgrounds/night.png";
    }
    header("Refresh: 1;");
?>

<html lang="eng">
<head>
    <title>Goede-PHP</title>
    <link rel="stylesheet" href="custom.css">
</head>
<style>
    body {
        background-image: url(<?php echo $image;?>);
    }
</style>
    <body>
        <p><?php echo $greeting; ?></p>
        <p>The time is <?php echo $time; ?></p>
    </body>
</html>
