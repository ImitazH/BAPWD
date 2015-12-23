<?php
session_start();

$_SESSION['login'] = "False";
echo("<script>location.href='login.php'</script>");
?>