def reverse_name(name):
    for i in name[::-1]:
        print(i,end=' ')


name=input("Enter full name\n").split()
reverse_name(name)


