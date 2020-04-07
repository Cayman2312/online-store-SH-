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

    if (productSizes.length == 0) {
        alert('Необходимо выбрать размер(-ы) для добавления в корзину');
    } else {

        let newProduct = {
            productId,
            productSizes
        }

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/handlers/handler_product.php');

        xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

        xhr.addEventListener('error', () => {
            alert('К сожалению сервер не отвечает на запрос... Попробуйте позднее.');
        })

        xhr.addEventListener('load', function () {
            if (xhr.status != 200) {
                alert('К сожалению отправка не удалась... Попробуйте позднее.');
            } else {
                alert('Товар был успешно добавлен в корзину!');
            }
            ;
        });

        let json = JSON.stringify(newProduct);

        xhr.send(json);
    }
});