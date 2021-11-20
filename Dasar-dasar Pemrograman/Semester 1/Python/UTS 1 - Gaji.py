daftar_pegawai = [
    {
        "nama": "budi",
        "gaji": 1500000
    },
    {
        "nama": "Cici",
        "gaji": 2000000
    }
]

budi = daftar_pegawai[0]
cici = daftar_pegawai[1]

print("| Nama || Gaji |")
for key, value in budi.items():
    print ("|",value,"|",end="")

print('\r')

for key, value in cici.items():
    print ("|",value,"|",end="")
