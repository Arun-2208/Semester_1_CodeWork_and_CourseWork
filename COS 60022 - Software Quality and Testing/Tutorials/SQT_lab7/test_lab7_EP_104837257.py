
import lab7
from lab7 import loyalty

def test_invalid():
    #The following "-45" is the input data for the test case
    points = -45
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'invalid'


def test_no_reward():
    #The following "300" is the input data for the test case
    points = 300
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'no reward'    


def test_appetizer():
    #The following "800" is the input data for the test case
    points = 800
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'appetizer'    


def test_maincourse():
    #The following "3500" is the input data for the test case
    points = 3500
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'main course'            


def test_fine_dining_set():
    #The following "8000" is the input data for the test case
    points = 8000
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'fine dining set' 


def test_unable_to_earn():
    #The following "12000" is the input data for the test case
    points = 12000
    #The following executes the program with the input data, and get result.
    result = loyalty.decideReward(points)
    #The following verifies if the result is consistent with the expectation.
    assert result == 'unable to earn > 10000'                 


