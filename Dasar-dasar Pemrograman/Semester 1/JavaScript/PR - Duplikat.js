function duplikat(param) {
    let final = param;
    final.push(...param);

    console.log(final);
}

let parameter = ['a', 'b', 'c'];

duplikat(parameter);
