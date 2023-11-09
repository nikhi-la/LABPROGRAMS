s=input("Enter a sentence\n")
s=s.split()
words={}
for i in s:
    words[i]=words.get(i,0)+1
print(words)
    
