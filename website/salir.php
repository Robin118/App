<?php
session_start();
session_destroy();
echo "<script> alert('ESTAS CERRANDO SESSION');window.location= '../login/index.html' </script>";
die();
?>