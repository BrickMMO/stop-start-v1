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

    <title>Feedback | Stop, Start, Continue</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

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

        <form class="w3-container" method="post" action="process.php?id=<?=$_GET['id']?>">

            <p> 
                <label class="w3-text-grey">Start</label>
                <textarea class="w3-input w3-border" style="resize:none" name="start"></textarea>
            </p>

            <p> 
                <label class="w3-text-grey">Stop</label>
                <textarea class="w3-input w3-border" style="resize:none" name="stop"></textarea>
            </p>

            <p> 
                <label class="w3-text-grey">Continue</label>
                <textarea class="w3-input w3-border" style="resize:none" name="continue"></textarea>
            </p>

            <p>
                <button type="submit" class="w3-btn w3-padding w3-teal">
                    Submit
                </button>
            </p>

        </form>
        
    </div>

</body>
</html>