<?php
session_start();
session_destroy();
//redirectare pagina principala produse
header('Location: home.php');
?>