#reverse a string using recursion
#normal method

s=input('Enter string\n')
rev=s[::-1]
print("Without recursion :",rev)


#using recursion

def string_rev(s):
    if not len(s):return ''
    else:
        return s[-1]+string_rev(s[:-1])

print('Using recursion :',string_rev(s))
