#copy odd lines in a file to another

inputfile=False
outputfile=False
try:
    inputfile=open("input.txt")
    print("Input File")
    print(inputfile.read())
    inputfile.seek(0,0)
    inputf=inputfile.readlines()
    #print(inputf)
    
    outputfile=open("output.txt",'w+')
    outputfile.writelines(inputf[0::2])
    outputfile.seek(0,0)
    
    print("\nOutput file")
    print(outputfile.read())
        
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()
    if outputfile:outputfile.close()

