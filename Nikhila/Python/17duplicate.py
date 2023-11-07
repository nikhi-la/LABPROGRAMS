s=['a',1,3,'b','a',3,5]
#s=set(s)
snew=[]
for i in s:
    if (i not in snew):
        snew.append(i)
print("After removing duplicate elements",snew)
