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

$category_id = 1;
if (!empty($_GET['category_id'])) {
    $category_id = (int)$_GET['category_id'];
}

$sql_category = "SELECT * FROM categories WHERE id='{$category_id}'";
$result = mysqli_query($link, $sql_category);

$category = mysqli_fetch_assoc($result);

?>

    <div class="catalog" data-category-id="<?= $category['id'] ?>">
        <div class="catalog-header">
            <h1 class="catalog-title"><?= $category['name'] ?></h1>
            <div class="catalog-subtitle">Все товары</div>
        </div>

        <div class="catalog-list">

        </div>

        <div class="loader">Загрузка...</div>
    </div>

<?php
$footer_config = [
    'script' => 'catalog.js'
];

include('parts/footer.php');
?>