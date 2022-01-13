import datetime
from dateutil.relativedelta import relativedelta

class Orang:
    def __init__(self, nama, tgl_lahir):
        self.nama = nama
        self.tgl_lahir = tgl_lahir.split("-")

    def umur(self):
        now = datetime.datetime.now()
        difference = relativedelta(now, self.tgl_lahir)
        print("a")


orang = Orang("Angga", "2003-09-27")
orang.umur
