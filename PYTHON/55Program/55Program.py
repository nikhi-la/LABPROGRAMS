#remove a line from a file

inputfile=False
try:
    inputfile=open("input.txt","r+")
    print(inputfile.read())
    
    inputfile.seek(0,0)
    inputf=inputfile.readlines()
    #print(inputf)

    n=int(input("Enter the line number to be deleted\n"))
    inputf.pop(n-1)
    #print(inputf)
    inputfile.truncate(0)
    inputfile.seek(0,0)
    
    inputfile.writelines(inputf)
    inputfile.seek(0,0)
    
    print("File after removal\n")
    print(inputfile.read())
  
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()
