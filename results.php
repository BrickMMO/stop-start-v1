<?php

include('includes/connect.php');

if(!$_SESSION['logged_in'])
{
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop, Start, Continue | Admin</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
</head>
<body>
    
<div class="w3-container" style="max-width: 800px; margin: auto">
      <h1 class="w3-red w3-padding">Stop, Start, Continue</h1>

      <h2>Survey Results</h2>

      <?php

      $query = 'SELECT *
        FROM responses
        LEFT JOIN courses
        ON courses.id = responses.course_id
        ORDER BY created_at DESC';
      $result = mysqli_query($connect, $query);

      ?>

      <?php while($record = mysqli_fetch_assoc($result)): ?>

        <div class="w3-border w3-padding w3-margin-bottom">
        <p class="w3-padding w3-black">
            Course: <?=$record['name']?>
            <br>
            Submitted: <?=$record['created_at']?>
      </p>

      <hr>

      <p class="w3-text-gray">What is something your instructor should STOP doing?</p>
      <p><?=$record['stop']?></p>
      <hr>
      <p class="w3-text-gray">What is something your instructor should START doing?</p>
      <p><?=$record['start']?></p>
      <hr>
      <p class="w3-text-gray">What is something your instructor should CONTINUE doing?</p>
      <p><?=$record['continue']?></p>
      </div>

      <?php endwhile; ?>

      <hr>

      <a href="login.php">Log Out</a>
</div>
</body>
</html>
