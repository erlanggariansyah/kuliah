# membutuhkan package requests
import requests, os

class Rest:
    base_url = "https://api.kawalcorona.com/"
    item = 10
    
    def show_data(self, arg):
        if arg == 1:
            response = requests.get(self.base_url + "/indonesia").json()

            for i in range (len(response)):
                print("Kasus di", response[i]["name"])
                print("Positif", response[i]["positif"])
                print("Sembuh", response[i]["sembuh"])
                print("Meninggal", response[i]["meninggal"])
                print("Dirawat", response[i]["dirawat"])

        if arg == 2:
            response = requests.get(self.base_url).json()

            print("\nASC / DESC: ")
            ans = input()

            if (ans == "ASC"):
                def show(item):
                    for i in range(self.item):
                        print("\nKasus di", response[i]["attributes"]["Country_Region"])
                        print("Positif", response[i]["attributes"]["Confirmed"])
                        print("Meninggal", response[i]["attributes"]["Deaths"])
                        print("Sembuh", response[i]["attributes"]["Recovered"])

                show(self.item)

                def item_f():
                    print("\n'<' untuk ke halaman berikutnya, '>' untuk ke halaman selanjutnya. Ketik apa saja untuk keluar.")
                    
                    ans = input()

                    if (ans == '>'):
                        self.item = self.item + 10
                        show(self.item)
                        item_f()

                    elif (ans == '<'):
                        self.item = self.item - 10
                        show(self.item)
                        item_f()

                    else:
                        os.system("cls")
                        print("Input tidak diterima!")

                item_f()

            elif (ans == "DESC"):
                def show(item):
                    for i in range(10):
                        print("\nKasus di", response[self.item - i - 1]["attributes"]["Country_Region"])
                        print("Positif", response[self.item - i - 1]["attributes"]["Confirmed"])
                        print("Meninggal", response[self.item - i - 1]["attributes"]["Deaths"])
                        print("Sembuh", response[self.item - i - 1]["attributes"]["Recovered"])

                show(self.item)

                def item_f():
                    print("\n'<' untuk ke halaman berikutnya, '>' untuk ke halaman selanjutnya. Ketik apa saja untuk keluar.")
                    
                    ans = input()

                    if (ans == '>'):
                        self.item = self.item + 10
                        show(self.item)
                        item_f()

                    elif (ans == '<'):
                        self.item = self.item - 10
                        show(self.item)
                        item_f()

                    else:
                        os.system("cls")
                        print("Input tidak diterima!")

                item_f()

            else:
                os.system("cls")
                print("Input tidak diterima!")

class Main:
    args = [
        "API Data Coronavirus by Kawalcorona",
        "1. Lihat jumlah kasus di Indonesia",
        "2. Lihat jumlah kasus di Dunia",
        "Masukkan input: "
    ]

    for i in range (len(args)):
        print(args[i])

    Rest().show_data(int(input()))

Main()
