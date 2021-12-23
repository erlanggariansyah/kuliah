hasil_akhir = [
{'nama':'Reza', 'nilai':70},
{'nama':'Ciut', 'nilai':63},
{'nama':'Dian', 'nilai':80},
{'nama':'Badu', 'nilai':40}
]

def cari_nama(nama, daftar_nama):
    hasil = "Nama tidak ditemukan"

    for i in range(len(daftar_nama)):
        if (daftar_nama[i].get('nama') == nama):
            hasil = daftar_nama[i]
        else:
            continue
        
    return hasil

print(cari_nama('Dian', hasil_akhir))
