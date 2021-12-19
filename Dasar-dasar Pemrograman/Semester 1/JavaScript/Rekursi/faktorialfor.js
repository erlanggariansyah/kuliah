const readline = require("readline");
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

let faktor = 1;
function faktorial (param) {
    for (i = 1; i < parseInt(param) + 1; i++) {
        faktor *= i;
    }

    console.log(faktor);
}

rl.question("Masukkan nilai: ", function (nilai) {
    faktorial(nilai);
    rl.close();
});

rl.on("close", function () {
    process.exit(0);
});
