const { index, update, store, destroy } = require("./FruitController");

const main = () => {
    index();
    store("Leechy");
    update(1, "AppleTV");
    destroy(1);
}

main();