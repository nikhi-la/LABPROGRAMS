s1=input("Enter first set\n")
s1=set(map(int,s1.split(',')))

s2=input("Enter second set\n")
s2=set(map(int,s2.split(',')))


print("a.Both sets are of same length :",len(s1)==len(s2))

print("b.Sum of both sets are equal :",sum(s1)==sum(s2))

print("c.Both set has atleast one common value :",bool(s1.intersection(s2)))
