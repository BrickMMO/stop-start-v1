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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <div class="container" style="max-width: 800px; margin: auto;">

        <div class="row headerRow">

            <h1>Stop, Start, Continue</h1>

        </div>

        <div class="row">
            <h2>Classes</h2>
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