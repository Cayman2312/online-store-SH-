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
        this.$catalogList = this.$catalog.querySelector('.catalog-list');
        this.$pagination = this.$catalog.querySelector('.page-wrap');
        this.products = [];
        this.$loader = this.$catalog.querySelector('.loader');
        // Один из вариантов получения значения атрибута
        // this.categoryId = this.$catalog.getAttribute('data-category-id');
        this.categoryId = this.$catalog.dataset.categoryId;
    }

    load(active = 1) {
        // Будет загружать данные по ajax
        // После загрузки будет вызывать метод render
        /**
         * Задача: написать запрос ajax и получить данные из handler_catalog.php
         * и вывести их в консоль
         */

        this.removeCatalogData();

        this.showLoader();

        const xhr = new XMLHttpRequest();
        xhr.open('GET', `/handlers/handler_catalog.php?category_id=${this.categoryId}&active=${active}`);
        xhr.send();

        xhr.addEventListener('load', () => {
            const response = JSON.parse(xhr.response);

            //дополнительное условие, если в каталоге нет товара (например, в новинках)
            if (response.products.length == 0) {
                let $headerEmpty = document.createElement('h1');
                $headerEmpty.classList.add('catalog-title');
                $headerEmpty.style.gridColumn = '1/5';
                $headerEmpty.style.textAlign = 'center';
                $headerEmpty.textContent = 'К сожалению в данной категории нет товаров';
                this.$catalogList.append($headerEmpty);
                this.hideLoader();
            } else {

                response.products.forEach((item) => {
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
                this.renderPagination(response.pagination);
            }
        });
    }

    showLoader() {
        this.$loader.classList.add('show');
    }

    hideLoader() {
        this.$loader.classList.remove('show');
    }

    removeCatalogData() {
        /**
         * Методы очистки элементов
         *
         * числовая переменная count = 0;
         * строковая переменная text = '';
         * переменная с массивом arr = [];
         *
         */

        this.$catalogList.innerHTML = '';
        this.$pagination.innerHTML = '';
        this.products = [];
    }

    renderPagination(pagination) {
        for (let i = 1; i <= pagination.count; i++) {
            let $paginationItem = document.createElement('div');
            $paginationItem.classList.add('page');
            $paginationItem.innerHTML = i;
            $paginationItem.dataset.page = i;

            // Добавляем класс active для текущей страницы
            if (i === pagination.active) {
                $paginationItem.classList.add('active');
            }

            this.$pagination.append($paginationItem);

            $paginationItem.addEventListener('click', (e) => {
                // Получили элемент, по которому кликнули
                const target = e.target;

                // Удаляем класс active у всех элементов пагинации
                this.$pagination.querySelectorAll('.page').forEach(item => {
                    item.classList.remove('active');
                });

                // Добавить класс active
                target.classList.add('active');

                // Вызываем загрузку каталога
                this.load(target.dataset.page);
            });
        }
    }

    render() {
        // отрисовывает карточку товара
        this.products.forEach((item) => {
            this.$catalogList.append(item.getElement());
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
            <div class="catalog-item__price">${this.price} руб.</div>
        `;

        return $cataloItem;
    }
}

const catalog = new Catalog();

// Вызываем загрузку данных
catalog.load();


// Loader ----------------------------------

const $loader = document.querySelector('.loader__coub');
let count = 0;

setInterval(function () {
    $loader.style.transform = `rotate(${count}deg)`;
    count++;
    if (count == 180) {
        count = 0;
    }
}, 20);

//------------------------------------------
