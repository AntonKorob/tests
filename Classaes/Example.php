<?php
require __DIR__ . ("/../vendor/autoload.php");

use Webmozart\Assert\Assert;
class Employee
{
    public function __construct($id)
    {
        Assert::integer($id, 'The employee ID must be an integer. Got: %s');
        Assert::greaterThan($id, 0, 'The employee ID must be a positive integer. Got: %s');
    }
}

// new Employee('foobar');
// => Webmozart\Assert\InvalidArgumentException:
//    The employee ID must be an integer. Got: string

// new Employee(-10);
// => Webmozart\Assert\InvalidArgumentException:
//    The employee ID must be a positive integer. Got: -10
new Employee(10);
// => Webmozart\Assert\InvalidArgumentException:
//    The employee ID must be a positive integer. Got: 10