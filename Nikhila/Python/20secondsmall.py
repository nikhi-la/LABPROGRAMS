number=input("Enter numbers\n")
numberlist=number.split(',')
numberlist=[int(i) for i in numberlist]
numberlist.sort()

print("Second smallest element is",numberlist[1])
