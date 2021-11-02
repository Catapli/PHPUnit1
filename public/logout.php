<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['intentsValids']);
unset($_SESSION['ofegat']);
session_destroy();
header('location:/login.php');


