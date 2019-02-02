<?php

namespace App;

require 'vendor/autoload.php';

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
    }
}


echo 'adfasdfasdf';
$b = new User();