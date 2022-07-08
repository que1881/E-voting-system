<?php
//logout user
//start session
session_start();
//destroy session
session_destroy();
//redirect user to the index page
header('location:index.php');

?>