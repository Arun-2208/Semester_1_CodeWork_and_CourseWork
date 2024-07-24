
import lab7
from lab7 import loyalty

def test_invalid1():
    #The following "0" is the input data for the test case
    points = -1
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'

def test_no_reward1():
    #The following "-45" is the input data for the test case
    points = 0
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'no reward'


def test_no_reward2():
    #The following "-45" is the input data for the test case
    points = 1
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'no reward'    


def test_no_reward3():
    #The following "300" is the input data for the test case
    points = 499
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'no reward'    


def test_appetizer1():
    #The following "800" is the input data for the test case
    points = 500
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'appetizer'    


def test_appetizer2():
    #The following "800" is the input data for the test case
    points = 501
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'appetizer' 


def test_appetizer3():
    #The following "800" is the input data for the test case
    points = 1499
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'appetizer'     


def test_maincourse1():
    #The following "3500" is the input data for the test case
    points = 1500
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'main course'   


def test_maincourse2():
    #The following "3500" is the input data for the test case
    points = 1501
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'main course'  


def test_maincourse3():
    #The following "3500" is the input data for the test case
    points = 5000
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'main course'            



def test_fine_dining_set1():
    #The following "8000" is the input data for the test case
    points = 5001
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'fine dining set' 


def test_fine_dining_set2():
    #The following "8000" is the input data for the test case
    points = 5002
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'fine dining set'     

def test_fine_dining_set3():
    #The following "8000" is the input data for the test case
    points = 10000
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'fine dining set'     

def test_unable_to_earn1():
    #The following "8000" is the input data for the test case
    points = 10001
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'unable to earn > 10000'     


def test_unable_to_earn2():
    #The following "12000" is the input data for the test case
    points = 10002
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'unable to earn > 10000'                 



