
import lab6
from lab6 import triType

#test case1
def test_scalene():
    #The following "3, 4, 5" is the input data for the test case.
    sides = [3,4,5]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'scalene'


#test case2
def test_equilateral():
    #The following "7, 7, 7" is the input data for the test case.
    sides = [7,7,7]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'equilateral'


    
#test case3
def test_invalid1():
    #The following "12, 14, 30" is the input data for the test case.
    sides = [12,14,30]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'


#test case4
def test_invalid2():
    #The following "14, 12, 30" is the input data for the test case.
    sides = [14,12,30]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'


    
#test case5
def test_invalid3():
    #The following "30, 12, 14" is the input data for the test case.
    sides = [30,12,14]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'


#test case6
def test_invalid4():
    #The following "2, 2, 10" is the input data for the test case.
    sides = [2,2,10]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'


#test case7
def test_invalid5():
    #The following "5, -3, 5" is the input data for the test case.
    sides = [5,-3,5]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'    


#test case8
def test_invalid6():
    #The following "8,0,0" is the input data for the test case.
    sides = [8,0,0]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'  


#test case9
def test_invalid7():
    #The following "0,0,0" is the input data for the test case.
    sides = [0,0,0]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'      


#test case10
def test_isoscelos1():
    #The following "9,9,15" is the input data for the test case.
    sides = [9,9,15]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'isosceles'  



#test case11
def test_isoscelos2():
    #The following "9,15,9" is the input data for the test case.
    sides = [9,15,9]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'isosceles'  


#test case12
def test_isoscelos3():
    #The following "15,9,9" is the input data for the test case.
    sides = [15,9,9]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'isosceles'      



#test case13
def test_invalid8():
    #The following "3,5,0" is the input data for the test case.
    sides = [3,5,0]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'    



#test case14
def test_invalid9():
    #The following "3,4,7" is the input data for the test case.
    sides = [3,4,7]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'    



#test case15
def test_invalid11():
    #The following "7,3,4" is the input data for the test case.
    sides = [7,3,4]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'    



#test case16
def test_invalid12():
    #The following "7,4,3" is the input data for the test case.
    sides = [7,4,3]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'   



#test case17
def test_invalid13():
    #The following "6.2,4.4,8.1" is the input data for the test case.
    sides = [6.2,4.4,8.1]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'   


    

#test case18
def test_invalid14():
    #The following "4,8" is the input data for the test case.
    sides = [4,8]
    #The following executes the program with the input data, and get result.
    result = triType.decideType(sides)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'    
