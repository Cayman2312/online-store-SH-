<?php

include($_SERVER['DOCUMENT_ROOT'] . '/parts/header_conf.php');


// Подписота ---------------------------


if (isset($_GET['subscriber']) && !empty($_GET['subscriber'])) {

    $sql_get_sub = "SELECT * FROM subscribers WHERE subscriber='{$_GET['subscriber']}'";
    $result_get_sub = mysqli_query($link, $sql_get_sub);

    $subber = mysqli_fetch_assoc($result_get_sub);

    if ($subber) {
        echo "Ты уже подписан!";
    } else {
        $sql_subscriber = "INSERT INTO subscribers VALUES (null, '{$_GET['subscriber']}')";
        $result_sub = mysqli_query($link, $sql_subscriber);
        echo "Поздравляю тебя, подписота!";
    }

//    echo json_encode(["message" => $sub_message]);
}

//--------------------------------------