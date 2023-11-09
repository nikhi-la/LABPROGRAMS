name=input("Enter firstname\n")
namelist=name.split(',')
count=0;
for i in namelist:
    if i[0]=='a' or i[0]=='A':
        count=count+1

print("The count of name starting with a is",count)
