#sum of elements in a list

#normal method

numbers=input("Enter numbers\n").split()
numbers=list(map(int,numbers))
sum=0;
for i in numbers:
    sum=sum+i
print('Sum is',sum)

#recursion

def recursion(numbers):
    if len(numbers)==1:
        return numbers[0]
    else:
        return numbers[0]+recursion(numbers[1:])

print("Sum using recursion",recursion(numbers))
