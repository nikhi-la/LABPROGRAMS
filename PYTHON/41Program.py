#generate n fibonacci number

#normal method

n=int(input("Enter number\n"))
a,b=0,1
for i in range(1,n):
    a,b=b,a+b
print(n,'th element',a)
    
#recursion

def fibonacci(n):
    if n==0:return 0
    if n==1:return 1
    else:
        return fibonacci(n-1)+fibonacci(n-2)

print('Using recursion',fibonacci(n-1))
