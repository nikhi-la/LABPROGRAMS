
#generate list of four digit numbers

def digits_even(num):
    flag=0
    while num>0:
        d=num%10
        if d%2!=0:
            flag=1
            break
        num=num//10
    if(flag==1):return False
    else:return True


def perfect_square(num):
    flag=0
    for i in range(1,num//2):
        if i*i==num:
            flag=1
            break
    if(flag==1):return True
    else:return False
    
    

lower=int(input('Enter lower limit\n'))
upper=int(input('Enter upper limit\n'))
for i in range(lower,upper+1):
    if digits_even(i) and perfect_square(i):
        print(i)
