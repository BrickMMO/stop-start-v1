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

    <?php

    $query = 'SELECT *
        FROM courses
        WHERE id = "'.$_GET['id'].'"
        LIMIT 1';
    $result = mysqli_query($connect, $query);

    $course = mysqli_fetch_assoc($result);

    ?>

    <h2><?=$course['name']?></h2>

    <form method="post" action="process.php">

        <div class="w3-margin-bottom">
            <label for="stop">Stop:</label>
            <textarea name="stop" id="stop" class="w3-input w3-border"></textarea>
        </div>

        <div class="w3-margin-bottom">
            <label for="start">Start:</label>
            <textarea name="start" id="start" class="w3-input w3-border"></textarea>
        </div>

        <div class="w3-margin-bottom">
            <label for="continue">Continue:</label>
            <textarea name="continue" id="continue" class="w3-input w3-border"></textarea>
        </div>

        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <button class="w3-btn w3-green">Submit</button>

    </form>
</div>
    
</body>
</html>