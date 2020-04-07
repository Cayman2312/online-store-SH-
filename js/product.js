const $addToBasket = document.forms.addToBasket;

$addToBasket.addEventListener('submit', function (e) {
    e.preventDefault();

    const productId = this.submit.dataset.productId;
    let productSizes = [];

    document.querySelectorAll('input[type="checkbox"]').forEach(item => {
        if (item.checked) {
            productSizes.push(+item.value)
        }
    })

    let newProduct = {
        productId,
        productSizes
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/handlers/handler_product.php');

    xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

    xhr.addEventListener('load', function () {
        console.log(xhr.response);
    });

    let json = JSON.stringify(newProduct);


    xhr.send(json);
});