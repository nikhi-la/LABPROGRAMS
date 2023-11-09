#Sum of digits of a number
#Normal Function
def sum_digits(num):
    sumn=0
    while(num>0):
        sumn=sumn+num%10
        num=num//10
    return sumn

num=int(input("Enter number\n"))
x=num
print('Sum of digits :',sum_digits(num))

#Recursion
def sum_rec(n):
    if not n//10:return n
    else:
        return n%10+sum_rec(n//10)

print('Sum of digits using recursion:',sum_rec(x))
