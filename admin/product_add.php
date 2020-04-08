<?php 
    include('parts/header.php');

    // Сделать добавление товара в базу
    if (isset($_POST['add'])) {
        $sql = "INSERT INTO products (id, img_url, name, description, price) 
                VALUES (null, '{$_POST['img_url']})', '{$_POST['name']}', '{$_POST['description']}', '{$_POST['price']}')";
        $result = mysqli_query($link, $sql);
        $id = mysqli_insert_id($link);

        if ($result) {
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

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

<?php include('parts/footer.php'); ?>