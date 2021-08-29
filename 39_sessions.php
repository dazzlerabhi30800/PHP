<?php

// What is a session?
// Used to manage information across multiple pages

// verify user login info
session_start();
$_SESSION['username'] = "Abhi";
$_SESSION['favCat'] = "Games";
echo "We have saved your session";

?>