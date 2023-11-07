#Factorial of a number


#Normal Method

num=int(input("Enter Number\n"))
fact=1
if(num==0):
    fact=1
for i in range(num,0,-1):
    fact=fact*i

print("Factorial of",num,'is',fact)

#Using Recursion

def fact(num):
    if num==0:return 1
    if num==1:return 1
    else:
        return num*fact(num-1)

print("Factorial of",num,'using recursion is',fact(num))
