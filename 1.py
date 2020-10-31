def urutKata(kalimat):
    list1 = kalimat.split()
    list2 = []
    for i in range(1, 10):
        for x in range(len(list1)):
            if str(i) in list1[x]:
                list2.append(list1[x])
    kalimatnew = ' '.join(list2)
    return kalimatnew
kalimat = input()
kalimatnew = urutKata(kalimat)
print (kalimatnew)