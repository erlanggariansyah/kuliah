up = 7
limit = up;

for bintang in range (0, up):
    for pola in range (0, limit*2):
        print(".",end="")
    for bentuk in range (0,bintang*2):
        print("* ",end="")
    for pola in range (0, limit*2):
        print(".",end="")
    limit-=1
    print("")
