#AssertError for negative input

try:
    n=int(input("Enter number\n"))
    assert(n>0),'Negative Input'
    print('Number is',n)
    
except AssertionError as ae:
    print(ae)
