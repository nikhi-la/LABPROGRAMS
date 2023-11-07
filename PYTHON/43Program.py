num=int(input('Enter number\n'))
x=num

#normal method
sum_n=0
while num>0:
    sum_n=sum_n+num%10
    num=num//10
print('Sum without recursion :',sum_n)
    
#recursion
def sum_digits(x):
    if not x//10:return x
    else:
        return x%10+sum_digits(x//10)

print('Sum using recursion :',sum_digits(x))
