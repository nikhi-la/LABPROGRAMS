def num_strings(s):
    count=0
    for i in s:
        if len(i)>=2 and i[0]==i[-1]:
            count+=1
    print('The number of strings ',count)

s=input("Enter sentence\n").split()
num_strings(s)
