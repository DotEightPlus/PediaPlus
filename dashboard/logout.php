<?php
session_start();
include("../functions/init.php");


//lastseen
last_seen();

session_unset();
header("location: .././signin");

// redirect("login.php");
?>