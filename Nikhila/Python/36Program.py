
def even_num(numbers):
    for i in numbers:
        if i==237:
            break
        elif not i%2:
            print(i,end=' ')


numbers=[1,2,3,4,5,237,6]
print('The even numbers are',end=' ')
even_num(numbers)
