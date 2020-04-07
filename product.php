<?php

/**
 * 
 * Карточка товара
 * 
 */

$header_config = [
    'title' => 'Карточка товара',
    'style' => 'product.css'
];

include('parts/header.php');

$template = [
    'id' => '',
    'img_url' => '',
    'name' => '',
    'description' => '',
    'price' => '',
    'sizes' => []
];

if (!empty($_GET['id'])) {
    // Сходить в базу данных
    // Получить информацию о продукте
    // Сохранить информацию в $template
    // Отрисовать $template
    $sql = "SELECT * FROM products WHERE id='{$_GET['id']}'";
    $result = mysqli_query($link, $sql);
    $template = mysqli_fetch_assoc($result);

    $sql_sizes = "SELECT product_sizes FROM product_sizes WHERE product_id='{$_GET['id']}'";
    $result_sizes = mysqli_query($link, $sql_sizes);
    $row = mysqli_fetch_assoc($result_sizes);
    $template['sizes'] = json_decode($row['product_sizes']);
} else {
    header('Location: /catalog.php');


}
?>

<form action="#" class="product">
    <div class="product-img" style="background-image: url(<?= $template['img_url'] ?>)"></div>
    <div class="product-name"><?= $template['name'] ?></div>
    <div class="product-article">артикул <?= $template['id'] ?></div>
    <div class="product-price"><?= $template['price'] ?> руб.</div>
    <div class="product-description"><?= $template['description'] ?></div>

    <div class="product-size">
        <?php while (count($template['sizes']) > 0) : ?> 
        <?php $current_size = array_shift($template['sizes'])?>           
            <input id="<?= 'size'.$current_size ?>" type="checkbox" class="product-size__checkbox" value="<?= $current_size ?>">
            <label for="<?= 'size'.$current_size ?>"><?= $current_size ?></label>        
        <?php endwhile ; ?>
    </div>

    <input type="submit" class="product-btn" value="Добавить в корзину" data-product-id="<?= $template['id'] ?>">
</form>

<?php
$footer_config = [
    'script' => 'product.js'
];

include('parts/footer.php');
?>