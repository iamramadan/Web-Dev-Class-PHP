<?php
session_start();
$_SESSION['visited-pages'][] = $_SERVER['REQUEST_URI'];
phpinfo();