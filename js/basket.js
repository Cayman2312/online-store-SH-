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



  let $deleteButtons = document.querySelectorAll('.basket-x');

  $deleteButtons.forEach((item) => {
    item.addEventListener('click', function () {
      if (confirm('Вы действительно хотите удалить данный товар?')) {
        //корректируем финальную цену
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








});