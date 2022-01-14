from datetime import date
import datetime

# membutuhkan package python-dateutil
from dateutil.relativedelta import relativedelta

class Orang:
    def __init__(self, nama, tgl_lahir):
        self.nama = nama
        raw = tgl_lahir.split("-")
        self.tgl_lahir = datetime.datetime(int(raw[0]), int(raw[1]), int(raw[2]))

    def umur(self):
        now = datetime.datetime.now()
        difference = relativedelta(now, self.tgl_lahir)
        print(difference.years, "tahun.")

a = Orang("Angga", "2003-09-27")
a.umur()
