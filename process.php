<?php

include('includes/connect.php');
include('includes/config.php');
include('includes/functions.php');

// print_r($_POST);

$query = 'INSERT INTO feedback (
        class_id,
        start,
        stop,
        `continue`
    ) VALUES (
        "'.$_GET['id'].'",
        "'.$_POST['start'].'",
        "'.$_POST['stop'].'",
        "'.$_POST['continue'].'"
    )';
mysqli_query($connect, $query);

header("Location: thankyou.php");

