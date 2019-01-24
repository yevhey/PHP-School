<?php

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
    echo new Student();
}


class Student {
    public $firstname;
    public $lastname;
    public $gender;
    public $status;

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

$obj = new Student;

echo $obj->studyTime(50);
echo PHP_EOL;