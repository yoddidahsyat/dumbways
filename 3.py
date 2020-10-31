dataKey = ['dumb','ways','the','best']
word = 'dumbways'

def cek(dataKey, word):
    for x in dataKey:
        if x in word:
            y = "true"
        else:
            y = "false"
        print(x, "=>", y)

cek(dataKey,word)