<?php

include('includes/connect.php');
include('includes/config.php');
include('includes/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Results | Stop, Start, Continue</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

    <div class="w3-container w3-section" style="max-width: 800px; margin: auto;">

        <div class="w3-container w3-teal">

            <h1>Stop, Start, Continue</h1>

        </div>

        <div class="w3-container">

            <?php

            $query = 'SELECT *
                FROM classes
                WHERE id = "'.$_GET['id'].'"
                LIMIT 1';
            $result = mysqli_query($connect, $query);

            $record = mysqli_fetch_assoc($result);

            ?>

            <h2><?=$record['name']?></h2>
            <h3><?=$record['semester']?> <?=$record['year']?></h3>

        </div>

        <?php

        $query = 'SELECT *
            FROM feedback
            WHERE class_id = "'.$_GET['id'].'"';
        $result = mysqli_query($connect, $query);
        
        ?>

        <div class="w3-container">

            <ul class="w3-ul w3-border">

                <?php while($record = mysqli_fetch_assoc($result)): ?>

                    <li>

                        <p>
                            <strong>Stop:</strong>
                            <?=$record['stop']?>
                        </p>

                        <hr>

                        <p>
                            <strong>Start:</strong>
                            <?=$record['start']?>
                        </p>

                        <hr>

                        <p>
                            <strong>Continue:</strong>
                            <?=$record['continue']?>
                        </p>

                    </li>

                <?php endwhile; ?>

            </ul>

        </div>
        
    </div>

</body>
</html>