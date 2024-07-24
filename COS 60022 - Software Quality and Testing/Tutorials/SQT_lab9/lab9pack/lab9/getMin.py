def getMin1(a, b, c):
    minValue = a
    if minValue > b:
        minValue = b
    if minValue > c:
        minValue = c
    return minValue

def getMin2(a, b, c):                                
    if a < b:
        if a < c:
            return a
        else:
            return c
    else:
        if b < c:
            return b
        else:
            return c