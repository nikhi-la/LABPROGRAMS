#Reverse a string
def reverse(s):
    return s[::-1]

s=input("Enter the string\n")
print('Reverse of',s,'is',reverse(s))

#recursion
def reverse_rec(s):
    if len(s)==1:return s
    else:
        return s[-1]+reverse(s[:-1])

print('Reverse of',s,'using recursion is',reverse_rec(s))
