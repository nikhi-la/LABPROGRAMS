#factorial of nth number
def factorial_normal(n):
    fact=1
    if n==0:fact=1
    else:
        for i in range(n,0,-1):
            fact=fact*i
    return fact
    
n=int(input("Enter number\n"))
print('Factorial of',n,'is',factorial_normal(n))

#using recursion
def factorial(n):
    if n==0: return 1
    if n==1:return 1
    else:
        return n*factorial(n-1)

print('Factorial of',n,'using recursion is',factorial(n))
