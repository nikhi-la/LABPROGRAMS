#Separate odd and even numbers in separate filess

inputfile=False
outputodd=False
outputeven=False
try:
    inputfile=open("input.txt")
    inputf=list(map(int,inputfile.read().split()))
    print(inputf)
    outputeven=open("outputeven.txt",'w+')
    outputodd=open("outputodd.txt",'w+')
    for i in inputf:
        if not i%2:
            outputeven.write(str(i)+' ')
        else:
            outputodd.write(str(i)+' ')
    outputeven.seek(0,0)
    outputodd.seek(0,0)
    print("Output Even =>",end=" ")
    print(outputeven.read())
    print("Output Odd =>",end=" ")
    print(outputodd.read())  
        
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()
    if outputeven:outputeven.close()
    if outputodd:outputodd.close()


