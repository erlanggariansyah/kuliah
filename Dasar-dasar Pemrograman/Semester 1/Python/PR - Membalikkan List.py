def balikan(param):
    if(type(param) != list):
        return None
        
    a = []
    for i in range(len(param)):
        length = len(param) - i - 1
        a.append(param[length])

    print(a)

a = ['mangga', 'nanas', 'pepaya', 'apel']

balikan(a)
