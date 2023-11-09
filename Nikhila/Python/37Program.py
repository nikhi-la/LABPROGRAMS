def num_strings(s):
    count=0
    for i in s:
        if (len(i)>=2) and (i[0]==i[-1]):
            count+=1
    return count


s=input('Enter the sentence\n').split()
c=num_strings(s)
print("The number of strings : ",c)

