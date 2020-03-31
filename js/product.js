const $productBtn = document.querySelector('.product-btn');

$productBtn.addEventListener('click', function () {
    const productId = this.dataset.productId;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `/handlers/handler_product.php?product_id=${productId}`);
    xhr.send();

    xhr.addEventListener('load', function () {
        console.log(xhr.response);
    });
});