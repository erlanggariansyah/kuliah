param = input("Masukkan nilai: ")

def faktorial(param):
    if param == '':
        return None

    parameter = int(param)
    if parameter > 2:
        return parameter * faktorial(parameter - 1)

    if parameter == 2:    
        return 2
    
    return 1

faktor = faktorial(param)
print(faktor)
