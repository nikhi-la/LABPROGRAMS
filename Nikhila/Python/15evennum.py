number=input("Enter numbers\n")
numberlist=number.split(",")
even=[i for i in numberlist if int(i)%2==0]
print("Even numbers are",even)
