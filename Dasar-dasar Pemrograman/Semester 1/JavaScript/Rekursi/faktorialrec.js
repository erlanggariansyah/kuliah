const readline = require("readline");
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function faktorial (param) {
    if (param == 2) {
        return 2;
    }

    if (param > 2) {
        return param * faktorial(param - 1);
    }

    return 1;
}

rl.question("Masukkan nilai: ", function(nilai) {
    let faktor = faktorial(nilai);
    console.log(faktor);
    rl.close();
});

rl.on("close", function() {
    process.exit(0);
});
