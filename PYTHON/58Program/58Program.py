#Remove comment lines in a file

inputfile=False
outputfile=False
try:
    inputfile=open("input.txt")
    print("Input File")
    print(inputfile.read())
    inputfile.seek(0,0)
    inputf=inputfile.readlines()
    #print(inputf)
    
    new=list(filter(lambda i: i if not i.startswith("#") else "",inputf))
    #print(new)
    
    outputfile=open("output.txt",'w+')
    outputfile.writelines(new)
    outputfile.seek(0,0)
    
    print("\nOutput file")
    print(outputfile.read())
        
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()
    if outputfile:outputfile.close()

