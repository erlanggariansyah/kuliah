function balikan(param) {
    a = [];

    for (i = 0; i < param.length ; i++) {
        a.push(param[param.length - i - 1]);
    }

    console.log(a);
}

a = ['mangga', 'nanas', 'apel', 'pepaya'];

balikan(a);
