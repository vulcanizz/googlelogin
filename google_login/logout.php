<?php
session_start();
session_destroy();
echo "<a href='index.php' ";
header('Location: index.php');
?>