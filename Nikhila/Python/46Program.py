#Factors of a number
def factors(n):
    for i in range(1,n):
        if not n%i:
            print(i,end=' ')

n=int(input('Enter number\n'))
print('Factors of',n,'is')
factors(n)
