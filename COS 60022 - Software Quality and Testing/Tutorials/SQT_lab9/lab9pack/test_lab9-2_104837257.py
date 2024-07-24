
import lab9
from lab9 import getMin


 

#test case for 100 percent statement coverage for getMin2()


def test_case_statement_coverage_1():
    #The following executes the function 'getMin' with the input data "2, 5, 9"
    result = getMin.getMin2(2, 5, 9)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_statement_coverage_2():
    #The following executes the function 'getMin' with the input data "5, 9, 2"
    result = getMin.getMin2(5, 9, 2)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_statement_coverage_3():
    #The following executes the function 'getMin' with the input data "5, 2, 9"
    result = getMin.getMin2(5, 2, 9)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_statement_coverage_4():
    #The following executes the function 'getMin' with the input data "9, 5, 2"
    result = getMin.getMin2(9 ,5 ,2)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2



#test case for 100 percent branch  coverage for getMin2()

def test_case_branch_coverage_1():
    #The following executes the function 'getMin' with the input data "2, 5, 9"
    result = getMin.getMin2(2, 5, 9)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_branch_coverage_2():
    #The following executes the function 'getMin' with the input data "5, 9, 2"
    result = getMin.getMin2(5, 9, 2)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_branch_coverage_3():
    #The following executes the function 'getMin' with the input data "5, 2, 9"
    result = getMin.getMin2(5, 2, 9)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_branch_coverage_4():
    #The following executes the function 'getMin' with the input data "9, 5, 2"
    result = getMin.getMin2(9 ,5 ,2)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2



#test cases for 100 percent path coverage for getMin2()

def test_case_path_coverage_1():
    #The following executes the function 'getMin' with the input data "2, 5, 9"
    result = getMin.getMin2(2, 5, 9)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_path_coverage_2():
    #The following executes the function 'getMin' with the input data "5, 9, 2"
    result = getMin.getMin2(5, 9, 2)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_path_coverage_3():
    #The following executes the function 'getMin' with the input data "5, 2, 9"
    result = getMin.getMin2(5, 2, 9)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2


def test_case_path_coverage_4():
    #The following executes the function 'getMin' with the input data "9, 5, 2"
    result = getMin.getMin2(9 ,5 ,2)
    #The following verifies if the execution result is consistent with expectation
    assert result == 2