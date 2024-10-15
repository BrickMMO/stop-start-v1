<?php

include('includes/connect.php');

if($_POST['password'] == '12345')
{
    $_SESSION['logged_in'] = 'yes';
    header('Location: results.php');
}
else
{
    header('Location: login.html');
}

