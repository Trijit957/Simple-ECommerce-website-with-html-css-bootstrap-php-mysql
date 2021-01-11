<?php

// include common.php
require "includes/common.php"; 

if(!isset($_SESSION['name']))
    {
        header("location: login.php");
    }

session_unset();

session_destroy();

header("location: index.php");

?>