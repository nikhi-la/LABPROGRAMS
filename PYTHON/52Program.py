#lambda funtcions to find area
import math #To use sqrt()

#Square
a=int(input("Enter side of the square\n"))
areaS=lambda a:a*a
print('Area of the square : ',areaS(a))

#Rectangle
a,b=int(input("Enter length of the rectangle\n")),int(input("Enter breadth of the rectangle\n"))
areaR=lambda a,b:a*b
print('Area of the rectangle : ',areaR(a,b))

#Triangle
a=list(map(int,input("Enter length of 3 sides of triangle\n").split()))
s=(a[0]+a[1]+a[2])/2
areaT=lambda a,s:math.sqrt(s*(s-a[0])*(s-a[1])*(s-a[2]))
print('Area of the triangle : ',areaT(a,s))
