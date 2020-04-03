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
    // (int) '10' - переведет из строки '10' в число 10
    $category_id = (int) $_GET['category_id'];
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

    <div class="catalog-list"></div>

    <div class="loader">Загрузка...</div>

    <div class="page-wrap"></div>
</div>

<?php
$footer_config = [
    'script' => 'catalog.js'
];

include('parts/footer.php');
?>
