number=input("Enter Numbers\n")
numberlist=number.split()
small=int(numberlist[0])
large=int(numberlist[0])
for i in numberlist:
    if(int(i)>large):
        large=int(i)
    if(int(i)<small):
        small=int(i)

print("Largest number is",large,"\nSmallest number is",small)
