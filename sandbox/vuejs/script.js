// const root = new Vue({
//     el: '#root',
//     data: {
//         message: 'Hello world!',
//         user: 'Борунов Михаил'
//     }
// });

const game = new Vue({
    el: '#game',
    data: {
        result: 'Давай дружище, кликни на "Начать игру"',
        count: 0,
        seconds: 10,
        isStart: false,
        win: 0,
        intervalId: null
    },
    methods: {
        onClick() {
            this.count++;
        },
        startGame() {
            this.isStart = true;
            this.result = 'Игра началась!';
            this.win = this.seconds * 6;

            this.intervalId = setInterval(() => {
                if (this.seconds === 0) {
                    if (this.count >= this.win) {
                        this.result = `Ураааа! Вы выиграли!!! Вы кликнули больше чем ${this.win} раз`;
                    } else {
                        this.result = `Вы проиграли! You are looser! Вам не удалось кликнуть хотя бы ${this.win} раз`;
                    }

                    // Очищаем наш setInterval
                    clearInterval(this.intervalId);
                } else {
                    this.seconds--;
                }
            }, 1000);
        },
        restartGame() {
            this.result = 'Давай дружище, кликни на "Начать игру"';
            this.count = 0;
            this.seconds = 10;
            this.isStart = false;

            // Очищаем наш setInterval
            clearInterval(this.intervalId);
        }
    }
});
