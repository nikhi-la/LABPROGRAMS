numberslist=[9,-2,8,3,-3,4]

positive=[i for i in numberslist if i>0]
print("a.List of positive numbers from list\n\t",numberslist,"is",positive)

square=[i*i for i in numberslist]
print("b.Square of numbers in list\n\t",numberslist,"is",square)

word='Aristotle'
wordlist=list(word)

vowels=[i for i in wordlist if i=='a' or i=='e' or i=='i' or i=='o' or i=='u'
        or i=='A' or i=='E' or i=='I' or i=='O' or i=='U']
print("c.List of vowels in",word,"is",vowels)

oddnum=[i for i in numberslist if i%2!=0]
print("d.List of odd numbers from list\n\t",numberslist,'is',oddnum)

year=int(input("Enter an year greater than 2023\n"))
leap=[i for i in range(2023,year) if (i%400==0 or (i%100!=0 and i%4==0))]
print("e.List of leap years between 2023 and ",year,"is\n\t",leap)
