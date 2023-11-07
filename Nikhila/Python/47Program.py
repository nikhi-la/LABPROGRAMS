#from alist of integers all value above 100 relaced as over

numbers=list(map(int,input('Enter numbers\n').split()))
count=0
for i in numbers:
    if i>100:
        numbers[count]='Over'
    count+=1

print(numbers)
        
