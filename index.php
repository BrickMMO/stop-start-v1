<?php

include('includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop, Start, Continue</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container" style="max-width: 800px; margin: auto;">
    <h1 class="w3-red w3-padding">Stop, Start, Continue</h1>

    <h2>Welcome, Please Choose a Course:</h2>

    <?php

    $query = 'SELECT * 
        FROM courses
        ORDER BY name';
    $result = mysqli_query($connect, $query);

    ?>

    <ul>
        <?php while($record = mysqli_fetch_assoc($result)): ?>

            <li>
                <a href="survey.php?id=<?=$record['id']?>">
                    <?=$record['name']?>
                </a>
            </li>

        <?php endwhile;?>
    </ul>
    
</div>

</body>
</html>