#a.To find large of two numbers
large=lambda a,b:a if a>b else b

n1=int(input("Enter number 1\n"))
n2=int(input("Enter number 2\n"))
print('a.Largest number is ',large(n1,n2))


#b.To check the input number is divisible by 5
divisible=lambda a: not a%5

n=int(input("Enter number\n"))
print('b.The',n,'is divisible by 5 :',divisible(n))


#c.To remove strings with length<5 from a list of strings
s=input("Enter a sentence\n").split()
newlist=list(filter(lambda x:len(x)<5,s))
print('c.New list after removing is',newlist)


#d.To increment list of integers by 10% if the number is greater than 1000 else by 5%


number=input("Enter numbers\n").split()
numberlist=map(int,number)
newlist=list(map(lambda x: x+x*0.10 if x>1000 else x+x*0.05,numberlist))
print(newlist)
