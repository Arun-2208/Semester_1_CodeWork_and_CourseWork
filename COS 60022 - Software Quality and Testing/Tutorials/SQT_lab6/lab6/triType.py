def decideType(sides):
    if len(sides) != 3:
        shape = "invalid"
        print("Invalid input! You should provide three numbers!")
        return shape
    a = sides[0]
    b = sides[1]
    c = sides[2]
    if not(isinstance(a, int) and isinstance(b, int) and isinstance(c, int)):
        shape = "invalid"
        print("Invalid input! You should provide integers!")
        return shape
    if a <= 0 or b <= 0 or c <= 0:
        shape = "invalid"
        print("Invalid input! You should provide positive integers!")
        return shape
    if a+b <= c or a+c <= b or b+c <= a:
        shape = "invalid"
        print("Not a triangle! the sum of two sides should be larger than the third!")
        return shape
    if a != b:
        if b == c:
            shape = "isosceles"
        else:
            if a == c:
                shape = "isosceles"
            else:
                shape = "scalene"
    else:
        if b == c:
            shape = "equilateral"
        else:
            shape = "isosceles"
            
    print("The shape of this triangle is " + shape + ".")
    return shape