const readline = require("readline")
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

let f1 = 1, f2 = 1, next = 0;

rl.question("Masukkan batas deret: ", function(batas) {
    for (i = 1; i <= batas; i++) {
        if (i == 1) {
            console.log(f1);
            continue;
        }

        if (i == 2) {
            console.log(f2);
            continue;
        }

        next = f1 + f2;
        f1 = f2;
        f2 = next;

        console.log(next);
    }

    rl.close();
});

rl.on("close", function() {
    process.exit(0);
});
