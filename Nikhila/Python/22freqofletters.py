s=input("Enter a word\n")
letters={}
for i in s:
    letters[i]=letters.get(i,0)+1
print(letters)
    
