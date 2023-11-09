number=input("Enter numbers\n")
numberlist=number.split()
small=int(numberlist[0])
large=int(numberlist[0])

for i in numberlist:
    if(int(i)>large):
        large=int(i)
    elif(int(i)<small):
        small=int(i)

print("The list is\n",numberlist)
print("Maximum number is",large,'\nMininum number is',small)


    
print("Maximum number is",max(numberlist),'\nMininum number is',min(numberlist))
