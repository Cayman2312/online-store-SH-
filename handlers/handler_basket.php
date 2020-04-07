<?php
  include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');

$action = $_GET['action'];
$id = $_GET['id'];
$size = $_GET['size'];
$sizeAmount = $_GET['sizeAmount'];


if ($action == 'remove') {
  for ($i=1 ; $i <= $sizeAmount ; $i++) {
    $key = array_search ($size , $_SESSION['basket'][$id]);
    unset($_SESSION['basket'][$id][$key]);
  }

  echo 'Успешно!';
}

