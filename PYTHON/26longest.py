s=input("Enter a sentence\n")
s=s.split()

m=[len(x) for x in s ]  #length of every element is in m - [6,2,3,5,1]
m=max(m)                #length of the longest element is in m - 6
length=[x for x in s if(len(x)==m) ] 

if(len(length)>1):
    print("BINGO")
