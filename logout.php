<?php

include('includes/connect.php');

session_destroy();

header('Location: login.php');
