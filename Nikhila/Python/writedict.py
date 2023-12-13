import csv


fields=['Name','Birth Month']

rows=[
        {'Name':'Nikhila','Birth Month':'November'},
        {'Name':'Akhila','Birth Month':'November'},
        {'Name':'Maglin','Birth Month':'June'},
        {'Name':'Merin','Birth Month':'December'},
        {'Name':'Annmol','Birth Month':'December'}
    ]

with open('birthday.csv','w') as file:
    writer=csv.DictWriter(file,fieldnames=fields)
    writer.writeheader()
    writer.writerows(rows)
    file.close()
