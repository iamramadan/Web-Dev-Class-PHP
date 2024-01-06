<?php
session_start();
$_SESSION['visited-pages'][] = $_SERVER['REQUEST_URI'];
echo $_SESSION['userId']."<br>";
echo "<div>Visited Pages: " .implode(' | ',$_SESSION['visited-pages'])."</div>";