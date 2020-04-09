<?php

/**
 * 
 * Карточка оплаты заказа
 * 
 */
$header_config = [
  'title' => 'Оплата товара',
  'style' => 'product.css'
];

include('parts/header.php');

?>
<h1>Здесь будет прикручена онлайн касса</h1>

<?php
d($_POST);
?>


<?php
$footer_config = [
  'script' => 'product.js'
];

include('parts/footer.php');
?>