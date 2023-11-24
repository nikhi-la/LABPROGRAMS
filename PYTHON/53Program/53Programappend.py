#Append one file to another

inputfile=False
outputfile=False
try:
    inputfile=open("input.txt")
    #print(inputfile.read())

    outputfile=open("output.txt",'a+')
    output=outputfile.write('\n'+inputfile.read())
    outputfile.seek(0,0)
    print(outputfile.read())
    
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()
    if outputfile:outputfile.close()

##Result ==> output file will be rewritted
