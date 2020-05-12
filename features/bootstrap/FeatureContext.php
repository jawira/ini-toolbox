<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class FeatureContext implements Context
{
    protected $myInstance;
    protected $result;

    /**
     * @Given /^I have an instance of "([^"]*)"$/
     */
    public function iHaveAnInstanceOfJawiraPhpIniSettingsSettings($myClass)
    {
        $this->myInstance = new $myClass();
    }

    /**
     * @When /^I call "([^"]*)" method with "([^"]*)" param$/
     */
    public function iCallMethodWithParam($methodName, $argumentValue)
    {
        $this->result = $this->myInstance->$methodName($argumentValue);
    }

    /**
     * @Then /^The method must not return null$/
     */
    public function theMethodMustNotReturnNull()
    {
        if (is_null($this->result)) {
            throw new LogicException('Invalid return value');
        }
        printf('Returned value is: %s', $this->result);
    }

    /**
     * @Then /^The method must return null$/
     */
    public function theMethodMustReturnNull()
    {
        if (!is_null($this->result)) {
            throw new LogicException('Invalid return value');
        }
    }

    /**
     * @When I call :arg1 method with :arg2 and :arg3 params
     */
    public function iCallMethodWithAndParams($methodName, $firstArgument, $secondArgument)
    {
        $this->result = $this->myInstance->$methodName($firstArgument, $secondArgument);
    }

    /**
     * @Then The method must return value :arg1
     */
    public function theMethodMustReturn($arg1)
    {
        if ($this->result !== $arg1) {
            throw new LogicException('Unexpected return value');
        }
    }

    /**
     * @Then The default timezone must be :arg1
     */
    public function theDefaultTimezoneMustBe($expectedTz)
    {
        $date = date_create();
        $tz = date_timezone_get($date);
        if (timezone_name_get($tz) !== $expectedTz) {
            throw new LogicException('Unexpected timezone');
        }
    }
}
