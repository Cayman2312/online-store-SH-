<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');

    $response = [
        'products' => [],
        'pagination' => [
            'count' => 0,
            'active' => 0
        ]
    ];


    // Логика рассчета данных для пагинации
    $limit_products = 8;
    $pagination_active = (int) $_GET['active'];

    if ($_GET['category_id'] != 4) {
        $sql_all_products = "SELECT products.* FROM products
        INNER JOIN product_category ON products.id = product_category.product_id 
        WHERE product_category.category_id={$_GET['category_id']}";
    } else {
        $sql_all_products = "SELECT * FROM products WHERE TIMESTAMPDIFF (HOUR, add_date, NOW()) < $product_remain_new ORDER BY add_date";
    }

    $result_all_products = mysqli_query($link, $sql_all_products);
    $count_products = mysqli_num_rows($result_all_products);
    $pagination_count = ceil($count_products / $limit_products); // ceil - округление числа в большую сторону

    $response['pagination']['count'] = $pagination_count;
    $response['pagination']['active'] = $pagination_active;

    $start_limit = ($pagination_active - 1) * $limit_products;

    if ($_GET['category_id'] != 4) {
        $sql_products = "SELECT products.* FROM products
        INNER JOIN product_category ON products.id = product_category.product_id 
        WHERE product_category.category_id={$_GET['category_id']}
        LIMIT {$start_limit}, {$limit_products}";
    } else {
        $sql_products = "SELECT * FROM products WHERE TIMESTAMPDIFF (HOUR, add_date, NOW()) < $product_remain_new ORDER BY add_date DESC LIMIT {$start_limit}, {$limit_products}";
    }


    $result_products = mysqli_query($link, $sql_products);

    while($row = mysqli_fetch_assoc($result_products)) {
        $response['products'][] = $row;
    }

    sleep(1);
    echo json_encode($response);
