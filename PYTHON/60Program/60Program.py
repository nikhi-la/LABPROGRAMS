#append an existing file with contents accepted from user

inputfile=False

try:
    inputfile=open("input.txt",'r+')
    print("Before appending")
    print(inputfile.read())

    line=input("\nEnter text to be appended\n")
    inputfile.write('\n'+line)
    inputfile.seek(0,0)
    print("\nAfter appending")
    print(inputfile.read())
    
except Exception as e:
    print(e)
finally:
    if inputfile:inputfile.close()
    
