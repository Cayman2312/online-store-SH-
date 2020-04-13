'use strict';

document.addEventListener("DOMContentLoaded", function (e) {

  document.forms.edit.img_url.addEventListener('change', function () {
    document.querySelector('.card-img-top').src = this.value;
  })

  const $select = document.getElementById('inlineFormCustomSelect');
  const $options = $select.getElementsByTagName('option');
  for (let i = 0; i < $options.length; i++) {
    if ($select.dataset.type === $options[i].value) {
      $options[i].selected = true;
    }
  }

})