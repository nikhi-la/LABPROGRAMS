#accept integer from user and raise valueError with with argument "Abnormal Condition" if reading is not within 90-120

try:
    n=int(input("Enter value\n"))
    if n<90 or n>120:
        raise ValueError
    else:
        print("Valid Number")
except ValueError:
    print("Abnormal Condition")
