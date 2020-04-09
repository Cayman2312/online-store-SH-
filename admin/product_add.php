<?php
    include('parts/header.php');

    $sql_get_categories = "SELECT * FROM categories";
    $result_get_categories = mysqli_query($link, $sql_get_categories);

    // Сделать добавление товара в базу
    if (isset($_POST['add'])) {
        // Добавляем товар в базу
        $sql_add_product = "INSERT INTO products (id, img_url, name, description, price) 
                VALUES (null, '{$_POST['img_url']}', '{$_POST['name']}', '{$_POST['description']}', '{$_POST['price']}')";
        $result_add_product = mysqli_query($link, $sql_add_product);
        $id = mysqli_insert_id($link);

        // Привязываем товар к категории
        $sql_set_category = "INSERT INTO product_category VALUES (null, $id, '{$_POST['category']}')";
        $result_set_category = mysqli_query($link, $sql_set_category);

        if ($result_add_product && $result_set_category) {
            echo "<div class='alert alert-success' role='alert'>
                    Товар успешно добавлен! (<a href='/admin/product_edit.php?id={$id}'>Редактировать</a>)
                </div>";
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Не удалось добавить новый товар!
                </div>';
        }
    }
?>

<h1>
    Добавление нового товара
</h1>

<form method="POST">
    <input type="hidden" name="add" value="add">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Путь до картинки" name="img_url">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Название" name="name">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Описание" name="description">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Цена" name="price">
    </div>

    <div class="form-group">
        <select class="form-control" placeholder="Категория" name="category">
            <?php while($row = mysqli_fetch_assoc($result_get_categories)) : ?>
            <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

<?php include('parts/footer.php'); ?>