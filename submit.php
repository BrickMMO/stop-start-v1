<?php

$env = file(__DIR__.'/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($env as $value)
{
  $value = explode('=', $value);
  define($value[0], $value[1]);
}

echo '<pre>';
print_r($_POST);
echo '</pre>';

$connect = mysqli_connect(
    HOST,
    USER,
    PASSWORD,
    DATABASE
);

// echo "Connecttion error: ".mysqli_connect_error();

$query = 'INSERT INTO results (
        stop, 
        start,
        `continue`
    ) VALUES (
        "'.$_POST['stop'].'",
        "'.$_POST['start'].'",
        "'.$_POST['continue'].'"
    )';

echo '<pre>';
print_r($query);
echo '</pre>';

mysqli_query($connect, $query);

// echo "Query error: " . mysqli_error($connect);

header('Location: thankyou.html');
