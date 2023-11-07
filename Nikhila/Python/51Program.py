#starts with 'ls'

def changedString(s):
    if s.startswith('ls'):
        return s
    else:
        return 'ls'+s

s=input("Enter a string\n")
print("Changed String :",changedString(s))
