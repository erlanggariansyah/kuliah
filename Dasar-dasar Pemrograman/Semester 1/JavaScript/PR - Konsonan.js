function justKonsonan(parameter) {
    testChar = ['a', 'i', 'u', 'e', 'o', ' '];

    for (i = 0; i < 6; i++) {
        parameter = parameter.replaceAll(testChar[i], '');
    }

    console.log(parameter);
}

param = 'Nurul Fikri';

justKonsonan(param);
