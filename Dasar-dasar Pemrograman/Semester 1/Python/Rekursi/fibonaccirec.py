def fibonacci(param):
    if param == 0 or param == 1:
        return param
        
    else:
        return (fibonacci(int(param) - 1) + fibonacci(int(param) - 2))


parameter = int(input("Masukkan batas deret: "))
n = 1

print("Deret fibonacci: ")
for i in range(1, int(parameter) + 1):
    print(fibonacci(n)," ", end="")
    n += 1
