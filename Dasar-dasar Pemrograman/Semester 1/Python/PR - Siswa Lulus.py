hasil_akhir = [
{'nama':'Reza', 'nilai':70},
{'nama':'Ciut', 'nilai':63},
{'nama':'Dian', 'nilai':80},
{'nama':'Badu', 'nilai':40}
]

def lulus_saja(param):
    for i in range(len(param)):
        if (param[i].get('nilai') > 65):
            print(param[i].get('nama'))

lulus_saja(hasil_akhir)
