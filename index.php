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

    <title>Home | Stop, Start, Continue</title>

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
                ORDER BY year DESC, semester, name';
            $result = mysqli_query($connect, $query);

            ?>

            <ul class="w3-ul w3-border">

                <?php while($record = mysqli_fetch_assoc($result)): ?>

                    <?php // print_r($record); ?>

                    <li>
                        <?php // echo $record['name']; ?>

                        <?=$record['name']?>
                        <br>
                        <?=$record['semester']?>
                        <?=$record['year']?>
                        <br>
                        <a href="feedback.php?id=<?=$record['id']?>">
                            Complete Feedback
                        </a>
                    </li>

                <?php endwhile; ?>

            </ul>

        </div>
        
    </div>

</body>
</html>