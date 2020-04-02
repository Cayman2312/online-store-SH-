/**
 * 
 * 2 класса
 * Catalog - будет заниматься задачами управления
 * Product - будет отрисовывать карточку товара в каталог
 * 
 */

class Catalog {
    constructor() {
        this.$catalog = document.querySelector('.catalog');
        this.products = [];
        this.$loader = this.$catalog.querySelector('.loader');
    }

    load() {
        // Будет загружать данные по ajax
        // После загрузки будет вызывать метод render
        /**
         * Задача: написать запрос ajax и получить данные из handler_catalog.php
         * и вывести их в консоль
         */

        this.showLoader();

        const xhr = new XMLHttpRequest();
        xhr.open('GET', '/handlers/handler_catalog.php');
        xhr.send();

        xhr.addEventListener('load', () => {
            const response = JSON.parse(xhr.response);

            // console.log(response);

            response.forEach((item) => {
                // console.log(item);

                this.products.push(
                    new Product(
                        item.id,
                        item.img_url,
                        item.name,
                        item.description,
                        item.price
                    )
                );
            });

            this.render();
        });
    }

    showLoader() {
        this.$loader.classList.add('show');
    }

    hideLoader() {
        this.$loader.classList.remove('show');
    }

    render() {
        // отрисовывает карточку товара
        const $catalogList = this.$catalog.querySelector('.catalog-list');

        this.products.forEach((item) => {
            $catalogList.append(item.getElement());
        });

        this.hideLoader();
    }
}

class Product {
    constructor(id, img_url, name, description, price) {
        this.id = id;
        this.img_url = img_url;
        this.name = name;
        this.description = description;
        this.price = price;
    }

    getElement() {
        let $cataloItem = document.createElement('a');
        $cataloItem.href = `/product.php?id=${this.id}`;
        $cataloItem.classList.add('catalog-item');
        $cataloItem.innerHTML = `
            <div class="catalog-item__img" style="background-image: url(${this.img_url})"></div>
            <div class="catalog-item__name">${this.name}</div>
            <div class="catalog-item__price" style=margin-bottom:60px;>${this.price} руб.</div>
        `;

        return $cataloItem;
    }
}

const catalog = new Catalog();

// Вызываем загрузку данных
catalog.load();