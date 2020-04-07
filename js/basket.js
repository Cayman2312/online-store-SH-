'use strict';

document.addEventListener("DOMContentLoaded", function (e) {
  //общая функция XML запросов
  function requestGet(action, id, size, sizeAmount) {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', `/handlers/handler_basket.php?action=${action}&id=${id}&size=${size}&sizeAmount=${sizeAmount}`);
    xhr.addEventListener('load', () => {
      console.log(xhr.response);
    });
    xhr.addEventListener('error', () => { console.error('ошибка!') });
    xhr.send();
  }

  //программируем кнопку "удалить" у товара
  let $deleteButtons = document.querySelectorAll('.basket-x');

  $deleteButtons.forEach((item) => {
    item.addEventListener('click', function () {
      if (confirm('Вы действительно хотите удалить данный товар?')) {
        //корректируем цену за товар и финальную цену
        let sum = +document.querySelector('.centre.orange').textContent.slice(0, -5);
        let priceDeleted = +item.parentNode.querySelector('.price.centre').textContent.slice(0, -5);
        sum -= priceDeleted;
        document.querySelector('.centre.orange').textContent = `${sum} руб.`;

        //удаляем товар из $_SESSION
        requestGet('remove', item.parentNode.dataset.productId, item.parentNode.dataset.productSize, item.parentNode.dataset.productSizeAmount);

        //удаляем элемент со страницы
        item.parentNode.remove();
      }
    })
  })

  //программируем кнопку "плюс" у товара
  let $plusButtons = document.querySelectorAll('.btn-plus');

  $plusButtons.forEach((item) => {
    item.addEventListener('click', function () {
      let $item = item.parentNode.parentNode;

      //корректируем количество на странице +1
      $item.querySelector('.count.centre span').textContent -= -1;

      //корректируем цену за товар и финальную цену
      let finalSum = +document.querySelector('.centre.orange').textContent.slice(0, -5);
      let amount = $item.querySelector('.count.centre span').textContent - 1;
      let sum = $item.querySelector('.price.centre').textContent.slice(0, -5);
      let cost = sum / amount;

      finalSum += cost;
      document.querySelector('.centre.orange').textContent = `${finalSum} руб.`;
      sum = +sum + cost;
      $item.querySelector('.price.centre').textContent = `${sum} руб.`;

      //добавляем товар в $_SESSION
      requestGet('plus', $item.dataset.productId, $item.dataset.productSize, $item.dataset.productSizeAmount);
    })
  })

  //программируем кнопку "минус" у товара
  let $minusButtons = document.querySelectorAll('.btn-minus');

  $minusButtons.forEach((item) => {
    item.addEventListener('click', function () {
      let $item = item.parentNode.parentNode;

      //проверим, не является ли товар единственным
      if ($item.querySelector('.count.centre span').textContent == 1) {
        $item.querySelector('.basket-x').click();
      } else {
        //корректируем количество на странице +1
        $item.querySelector('.count.centre span').textContent -= 1;

        //корректируем финальную цену
        let finalSum = +document.querySelector('.centre.orange').textContent.slice(0, -5);
        let amount = +$item.querySelector('.count.centre span').textContent + 1;
        let sum = $item.querySelector('.price.centre').textContent.slice(0, -5);
        let cost = sum / amount;

        finalSum -= cost;
        document.querySelector('.centre.orange').textContent = `${finalSum} руб.`;
        sum -= cost;
        $item.querySelector('.price.centre').textContent = `${sum} руб.`;

        //добавляем товар в $_SESSION
        requestGet('minus', $item.dataset.productId, $item.dataset.productSize, $item.dataset.productSizeAmount);
      }
    })
  })




});