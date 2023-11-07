#number of occurences of a given item

objects=['apple','12','orange','14','apple','12','12']
print('The list is',objects)
s=input("Enter item to be searched\n")
count=0
for i in objects:
    if i==s:
        count+=1
print("Number of occurences of",s,':',count)
    
