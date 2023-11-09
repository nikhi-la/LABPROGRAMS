s1=input("Enter Elements of first set\n")
s1=set(map(int,s1))
s2=input("Enter Elements of second set\n")
s2=set(map(int,s2))

print("The lengths are equal :",bool(len(s1)==len(s2)))
