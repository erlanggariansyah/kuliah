def hanya_konsonan(param):
    if (type(param) != str):
        return None

    a = ['a', 'i', 'u', 'e', 'o', ' ']

    for i in range(len(a)):
        param = param.replace(a[i], '')

    print(param)

hanya_konsonan('Nurul Fikri')
