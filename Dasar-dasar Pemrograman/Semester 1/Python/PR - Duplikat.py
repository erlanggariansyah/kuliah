def duplikat(param):
    if (type(param) != list):
        return None

    a = param
    a.extend(param)

    print(a)

c = ['angga', 'dimas', 'riski', 'alip']

duplikat(c)
