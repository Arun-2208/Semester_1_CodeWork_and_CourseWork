
import lab9
from lab9 import getMin



 
#test case for 100 percent statement coverage for getMin1()

def test_case_statement_coverage_1():
    #The following executes the function 'getMin' with the input data "7, 5, 3"
    result = getMin.getMin1(7, 5, 3)
    #The following verifies if the execution result is consistent with expectation
    assert result == 3


#test case for 100 percent branch  coverage for getMin1()

def test_case_branch_coverage_1():
    #The following executes the function 'getMin' with the input data "7, 5, 3"
    result = getMin.getMin1(7, 5, 3)
    #The following verifies if the execution result is consistent with expectation
    assert result == 3



#test cases for 100 percent path coverage for getMin1()

def test_case_path_coverage_1():
    #The following executes the function 'getMin' with the input data "7, 5, 3"
    result = getMin.getMin1(7, 5, 3)
    #The following verifies if the execution result is consistent with expectation
    assert result == 3


def test_case_path_coverage_2():
    #The following executes the function 'getMin' with the input data "3, 5, 7"
    result = getMin.getMin1(3, 5, 7)
    #The following verifies if the execution result is consistent with expectation
    assert result == 3


def test_case_path_coverage_3():
    #The following executes the function 'getMin' with the input data "7, 3, 5"
    result = getMin.getMin1(7, 3, 5)
    #The following verifies if the execution result is consistent with expectation
    assert result == 3


def test_case_path_coverage_4():
    #The following executes the function 'getMin' with the input data "7, 5, 3"
    result = getMin.getMin1(5,7,3)
    #The following verifies if the execution result is consistent with expectation
    assert result == 3        