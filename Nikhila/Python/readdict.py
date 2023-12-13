import csv

file=open('birthday.csv','r')
read=csv.DictReader(file)
for lines in read:
    if lines:print(lines['Name'],lines['Birth Month'])
