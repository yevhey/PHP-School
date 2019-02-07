<?php

require __DIR__ . '/vendor/autoload.php';

use App\User;
use App\Employee;

class Wrapper
{
    protected $user;
    protected $employee;

    public function __construct(User $user, Employee $employee)
    {
        $this->user = $user;
        $this->employee = $employee;

        echo 'Working!' . PHP_EOL;
    }
}

$userObj = new User();
$employeeObj = new Employee();
$wrapperObj = new Wrapper($userObj, $employeeObj);