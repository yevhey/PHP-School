<?php

class Student {
    private $firstname;
    private $lastname;
    private $gender;
    public $status;

    public function __construct($a1) 
    {
        $this->$firstname = $a1->firstname;
        $this->$lastname = $a1->lastname;
        $this->$gender = $a1->gender;
        $this->$status = $a1->status;
    }
    
    public function showMyself()
    {
        return $this->firstname . PHP_EOL .
            $this->lastname . PHP_EOL .
            $this->gender . PHP_EOL .
            $this->status;
    }

    public function studyTime($study_time)
    {
        $gpa += log($study_time);

        if ($gpa > 4) {
            return 4;
        } else {
            return $gpa;
        }
    }
}

$studentList = [
    (object) [
        'firstname' => 'Mike',
        'lastname' => 'Barnes',
        'gender'   => 'male',
        'status'   => 'freshman',
        'gpa'      => 4
    ],
];

foreach ($studentList as $student) {
    $obj = new Student($student);
    var_dump($obj->showMyself());
}

echo PHP_EOL;