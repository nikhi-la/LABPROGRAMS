#count number of vowels

s=input("Enter the sentence\n")
count=0
for i in s:
    if i.lower()=='a' or i.lower()=='e' or i.lower()=='i' or i.lower()=='o' or i.lower()=='u':
        count+=1

print('Number vowels :',count)
