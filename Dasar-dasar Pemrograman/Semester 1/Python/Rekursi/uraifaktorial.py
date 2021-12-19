param = input("Input nilai: ")
faktor = 1

desc = "faktorial("+param+") = 1*"
for i in range(1, int(param) + 1):
    if i == int(param):
        desc += str(i)+" = "
    
    else:
        desc += str(i)+"*"

    faktor *= i

print(desc+str(faktor))
