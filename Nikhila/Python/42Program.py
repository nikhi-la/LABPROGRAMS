#Sum of first n whole numbers

n=int(input("Enter Numbers\n"))
sum=0
for i in range(n):
    sum=sum+i
print('Sum of first',n,'whole numbers is',sum)


#recursion

def sum_num(n):
    if n==0:return 0
    else:
        return n+sum_num(n-1)

print('Using recursion',sum_num(n-1))
