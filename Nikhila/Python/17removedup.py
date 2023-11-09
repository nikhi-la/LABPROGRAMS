s=['ab','cd',12,12,'cd',13]
snew=[]
for i in s:
    if(i not in snew):
        snew.append(i)
print("After removing duplicate elements\n",snew)
