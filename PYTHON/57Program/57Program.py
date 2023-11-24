#longest word in a file

inputfile=False
try:
    inputfile=open("input.txt")
    inputf=list(set(inputfile.read().split()))
    #print(inputf)
    inputf.sort(key=len,reverse=True)
    print(inputf)
    print("\nLongest word(s)\n")
    for i in inputf:
        if len(i)==len(inputf[0]):
            print(i)
    
    
        
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()

