<?php

 session_start();
unset($_SESSION["log_id"]);
header("location:../home.html");
?>