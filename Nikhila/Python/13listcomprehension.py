numberslist=[10,2,-3,7,-22,-7,1]

positive=[i for i in numberslist if i>0]
print("a.List of positive numbers in\n\t",numberslist,"is",positive)

square=[i*i for i in numberslist]
print("b.Square of numbers in\n\t",numberslist,"is",square)

word='Aristotle'
wordlist=list(word)

vowels=[i for i in wordlist if i[0]=='a' or i[0] =='e' or i[0] =='i' or i[0] =='o' or i[0] =='u' or
i[0]=='A' or i[0] =='E' or i[0] =='I' or i[0] =='O' or i[0] =='U']
print("c.Vowels in",wordlist,"is\n\t",vowels)

odd=[i for i in numberslist if i%2!=0]
print("d.Odd numbers in\n\t",numberslist,"is",odd)

year=int(input("Enter year greater than 2023\n"))
leap=[i for i in range(2023,year) if(i%400==0 or (i%100!=0 and i%4==0))]
print("e.List of leap years between 2023 and",year,"is\n\t",leap)
