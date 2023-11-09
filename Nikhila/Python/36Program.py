def even_numbers(numbers):
    for i in numbers:
        if(i==237):
            break
        elif not i%2:
            print(i)

            
number=input("Enter numbers\n").split()
numbers=map(int,number)
even_numbers(numbers)
