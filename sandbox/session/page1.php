<?php
session_start();

// $_SESSION['count'] = 1;
if (!empty($_SESSION['count'])) {
    
}
$_SESSION['count']++;

print_r($_SESSION);
?>