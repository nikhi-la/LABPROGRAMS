s=input("Enter string\n")
if(s.lower().endswith('ing')):
    s=s+'ly'
else:
    s=s+'ing'

print(s)
