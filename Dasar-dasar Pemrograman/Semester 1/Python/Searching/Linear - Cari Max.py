seq = [10, 20, 15, 75, 90, 65, 100]

def cari_max(param):
    max = 0
    posisi = 0

    for i in range(0, len(param)):
        if param[i] > max:
            max = param[i]
            posisi = i

        else:
            continue
            
    return posisi

print("Posisi dengan nilai terbesar:", cari_max(seq))
        