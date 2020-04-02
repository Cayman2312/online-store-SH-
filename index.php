<?php
/**
 * 
 * Главная страница
 * 
 */

    $header_config = [
        'title' => 'Главная страница',
        'style' => 'index.css'
    ];

    include('parts/header.php');
?>

<div>Главная страница</div>

<?php
    $footer_config = [
        'script' => 'index.js'
    ];

    include('parts/footer.php');
?>
