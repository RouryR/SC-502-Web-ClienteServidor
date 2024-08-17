<?php
session_start();
session_unset();
session_destroy();
header("Location: /SC-502-Web-ClienteServidor/static/routes/signin.php");
exit();
