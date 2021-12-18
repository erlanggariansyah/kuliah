const readline = require("readline");
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function hitungKurs(param) {
    const dollar = 14.650;
    
    let rawDollarToRupiah = param / dollar;
    const dollarToRupiah = rawDollarToRupiah.toFixed(0);

    console.log(param+" rupiah sama dengan "+dollarToRupiah+" dollar.");
}

console.log("Note: pakai titik (.) untuk memisahkan per-3 nilai.");
rl.question("Masukkan nilai rupiah: Rp", function(dollar) {
    hitungKurs(dollar);
    rl.close();
});

rl.on("close", function() {
    process.exit(0);
});
