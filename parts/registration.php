<div class="registration">
    <form action="#" class="registration__popup" method="POST"
          onsubmit="return chekFormReg(this.elements)"
          onkeyup="return checkKeyupFormReg(this.elements)">
        <div class="registration__close"></div>
        <h2 class="registration__title">Регистрация</h2>
        <div class="flex-box">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="surname" placeholder="Ваша фамилия">
        </div>

        <input type="email" name="email" placeholder="Ваш E-mail">

        <div class="registration__error">
            <img src="/images/icons/warning.png">
            <span>не все поля заполнены</span>
        </div>

        <input type="password" name="pass" placeholder="Придумайте пароль">
        <input type="password" name="pass-check" placeholder="Повторите пароль">
        <label>
            <input type="checkbox" name="agree" value="yes">
            <span>Вы согласны выйти за меня!? ;D</span>
        </label>
        <input type="submit" value="зарегистрироваться">
    </form>

    <form action="#" class="forgot-popup" method="GET"
    onsubmit="return checkFormForgot(this.elements)"
    onkeyup="return checkKeyupFormForgot(this.elements)">
        <div class="forgot-popup__close"></div>
        <p class="forgot-popup__text">Укажите свою почту при регистрации и мы направим Вам инструкцию, как восстановить
            пароль от личного кабинета</p>
        <div class="flex-box">
            <input type="email" name="email" placeholder="e-mail">
            <input type="submit" value="-->">
        </div>
        <p class="forgot-popup__error">Некорректный e-mail. Попробуйте еще раз.</p>
    </form>
</div>


<?php

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $sql_newUser = "INSERT INTO users(`id`, `name`, `surname`, `email`, `pass`) 
                    VALUES (null, '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['email']}', '{$_POST['pass']}')";
    $result_newUser = mysqli_query($link, $sql_newUser);

    exit("<meta http-equiv='refresh' content='0; url= /'>");
}

?>