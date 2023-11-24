#lengthiest line in a file

inputfile=False
try:
    inputfile=open("input.txt")
    print(inputfile.read())
    inputfile.seek(0,0)
    inputf=inputfile.readlines()
    #print(inputf)
    inputf.sort(key=len,reverse=True)
    #print(inputf)
    print("\nLengthiest line(s)\n")
    for i in inputf:
        if len(i)==len(inputf[0]):
            print(i,end="")
        
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()
