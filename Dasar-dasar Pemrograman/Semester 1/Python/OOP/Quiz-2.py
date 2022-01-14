class Pegawai:
    honor_per_jam = 30000
    def __init__(self, nama, jam_kerja):
        self.nama = nama
        self.jam_kerja = jam_kerja

    def honor(self):
        print(self.honor_per_jam * self.jam_kerja)

angga = Pegawai("angga", 8)
angga.honor()
