<?php
/**
 * 
 * Каталог товаров
 * 
 */

    $header_config = [
        'title' => 'Каталог товаров',
        'style' => 'catalog.css'
    ];

    include('parts/header.php');
?>

<div class="catalog">
    <div class="catalog-header">
        <h1 class="catalog-title">Мужчинам</h1>
        <div class="catalog-subtitle">Все товары</div>
    </div>

    <div class="label-wrap">
    <select class="label" name="category">
                        <option></option>
                        <option value="jacets">Куртки</option>
                        <option value="snakers">Кеды</option>
                        <option value="jeans">Джинсы</option>
                    </select>

                    <select class="label" name="size">
                        <option></option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                    </select>

                    <select class="label" name="price">
                        <option></option>
                        <option value="cheap">0-1000</option>
                        <option value="medium">1000-5000</option>
                        <option value="expensive">5000-10000</option>
                    </select>
    </div>
    

    <div class="catalog-list">

    </div>

    <div class="loader">Загрузка...</div>
</div>

<div class="page-wrap">
    <div class="page">1</div>
    <div class="page">2</div>
    <div class="page">3</div>
    <div class="page">4</div>
</div>
<?php
    $footer_config = [
        'script' => 'catalog.js'
    ];

    include('parts/footer.php');
?>
