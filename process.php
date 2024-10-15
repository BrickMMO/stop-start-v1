<?php

include('includes/connect.php');

echo '<pre>';
print_r($_POST);
echo '</pre>';

$query = 'INSERT INTO responses (
        `stop`,
        `start`,
        `continue`,
        `course_id`
    ) VALUES (
        "'.$_POST['stop'].'",
        "'.$_POST['start'].'",
        "'.$_POST['continue'].'",
        "'.$_POST['id'].'"
    )';
mysqli_query($connect, $query);

header('Location: thankyou.html');
