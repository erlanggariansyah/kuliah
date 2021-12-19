const readline = require("readline")
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function fibonacci (param) {
    if (param == 0 || param == 1){
        return param;
    } else {
        return (fibonacci(param - 1) + fibonacci(param - 2));
    }
}

let n = 1;

rl.question("Masukkan batas deret: ", function(batas) {
    for (i = 1; i <= batas; i++) {
        console.log(fibonacci(n));
        n++;
    }
    
    rl.close();
});

rl.on("close", function() {
    process.exit(0)
});
