const readline = require("readline");
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function parkir(param1, param2) {
    const harga = 3000;
    let rawSelisih = param2 - param1;
    let selisih = rawSelisih  * -1;

    let totalHarga = selisih > 2 ? (selisih - 2) * 1000 + 3000 : 3000;

    console.log("Biaya parkir "+totalHarga);
}

console.log("Program parkir. (Format 24 Jam)");
rl.question("Jam masuk: ", function (jamMasuk) {
    rl.question("Jam keluar: ", function(jamKeluar) {
        parkir(jamMasuk, jamKeluar);
        rl.close();
    });
});

rl.on("close", function() {
    process.exit(0);
})
