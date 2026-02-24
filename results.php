<?php

$connect = mysqli_connect(
    'sql208.infinityfree.com',
    'if0_39847005',
    'JDFe8wafkYR',
    'if0_39847005_feedback'
);

// echo "Connecttion error: ".mysqli_connect_error();

$query = 'SELECT * FROM results';
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    
    <h1>Results</h1>

    <?php while($record = mysqli_fetch_assoc($result)): ?>

        Stop:
        <?=$record['stop']?>
        <br>
        Start:
        <?=$record['start']?>
        <br>
        Continue:
        <?=$record['continue']?>
        <hr>

    <?php endwhile; ?>

</body>
</html>