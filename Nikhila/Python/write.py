import csv

try:
    fields=['sl.no','name','age']
    rows=[
      [1,'nikhila',22],
      [2,'akhila',24], 
      [3,'Maglin',22]
      ]
    file=open('abc.csv','w')
    writer=csv.writer(file)
    writer.writerow(fields)
    writer.writerows(rows)
    print("Success")
except Exception as e:
    print(e)
finally:
    file.close()
