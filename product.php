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
    ];

    if (!empty($_GET['id'])) {
        // Сходить в базу данных
        // Получить информацию о продукте
        // Сохранить информацию в $template
        // Отрисовать $template
        $sql = "SELECT * FROM products WHERE id='{$_GET['id']}'";
        $result = mysqli_query($link, $sql);
        $template = mysqli_fetch_assoc($result);
    } else {
       header('Location: /catalog.php');
    }
?>

<div class="product">
    <div class="product-img" style="background-image: url(<?= $template['img_url'] ?>)"></div>
    <div class="product-name"><?= $template['name'] ?></div>
    <div class="product-article">артикул <?= $template['id'] ?></div>
    <div class="product-price"><?= $template['price'] ?> руб.</div>
    <div class="product-description"><?= $template['description'] ?></div>

    <div class="product-size">
        <a href="#/">32</a>
        <a href="#/">32</a>
        <a href="#/">32</a>
        <a href="#/">32</a>
        <a href="#/">32</a>
        <a href="#/">32</a>
    </div>

    <div class="product-btn" data-product-id="<?= $template['id'] ?>">Добавить в корзину</div>
</div>

<?php
    $footer_config = [
        'script' => 'product.js'
    ];

    include('parts/footer.php');
?>
