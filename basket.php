<?php
/**
 * 
 * Корзина
 * 
 */

    $header_config = [
        'title' => 'Корзина',
        'style' => 'basket.css'
    ];

    include('parts/header.php');
?>

<div>Корзина</div>
<!-- Делает Саша -->

<?php
    $footer_config = [
        'script' => 'basket.js'
    ];

    include('parts/footer.php');
?>
