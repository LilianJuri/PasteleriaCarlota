<?php

session_start();
unset($_SESSION['logueado']);
header("Location: ../controllers/inicioSesion.php");
