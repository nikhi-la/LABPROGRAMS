s='get ready get set go go'
words={}

for i in s.split():
    words[i]=words.get(i,0)+1

print(words)
    
