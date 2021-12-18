const readline = require("readline");
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function hitungLuas(param) {
    const phi = 3.14;

    let luas = param * param * phi;

    console.log("Luas lingkaran adalah: "+luas);
}

function kelilingLingkaran(param) {
    const phi = 3.14;

    let keliling = 2 * param * phi;

    console.log("Keliling lingkaran adalah: "+keliling);
}

console.log("Program yang disediakan: ");
console.log("1. Hitung luas lingkaran");
console.log("2. Hitung keliling lingkaran");

rl.question("Jawab: ", function(jawaban) {
    if (jawaban == 1) {
        rl.question("Masukkan jari-jari: ", function(jarijari) {
            hitungLuas(jarijari);
            rl.close();
        }); 
    } else if (jawaban == 2) {
        rl.question("Masukkan jari-jari: ", function(jarijari) {
            kelilingLingkaran(jarijari);
            rl.close();
        });
    } else {
        console.log("Maaf, program tidak tersedia.");
        rl.close();
    }
});

rl.on("close", function() {
    process.exit(0);
});
