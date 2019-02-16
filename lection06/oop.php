<?php


$studentList = [
    (object) [
        'firstname'     => 'Mike',
        'lastname'      => 'Barnes',
        'gender'        => 'male',
        'status'        => 'freshman',
        'gpa'           => 4,
        'study_time'    => 60,
    ],
    (object) [
        'firstname'     => 'Jim',
        'lastname'      => 'Nickerson',
        'gender'        => 'male',
        'status'        => 'sophomore',
        'gpa'           => 3,
        'study_time'    => 100,
    ],
    (object) [
        'firstname'     => 'Jack',
        'lastname'      => 'Indabox',
        'gender'        => 'male',
        'status'        => 'junior',
        'gpa'           => 2.5,
        'study_time'    => 40,
    ],
    (object) [
        'firstname'     => 'Jane',
        'lastname'      => 'Miller',
        'gender'        => 'female',
        'status'        => 'senior',
        'gpa'           => 3.6,
        'study_time'    => 300,
    ],
    (object) [
        'firstname'     => 'Mary',
        'lastname'      => 'Scott',
        'gender'        => 'female',
        'status'        => 'senior',
        'gpa'           => 2.7,
        'study_time'    => 1000,
    ],
];



class Student {
    private $firstname;
    private $lastname;
    private $gender;
    public $status;

    public function __construct($a1) 
    {
        $this->firstname = $a1->firstname;
        $this->lastname = $a1->lastname;
        $this->gender = $a1->gender;
        $this->gpa = $a1->gpa;
        $this->status = $a1->status;
    }
    
    public function showMyself()
    {
        return $this->firstname . ' ' .
            $this->lastname . ', ' .
            $this->gender . ', ' .
            $this->gpa . ', ' .
            $this->status;
    }

    public function studyTime($study_time)
    {
        $this->gpa += round(log($study_time, 1000), 1);

        if ($this->gpa > 4) {
            $this->gpa = 4;

            return $this->gpa;
        } else {
            return $this->gpa;
        }
    }
}


foreach ($studentList as $student) {
    echo '-----------------------------------------------------------------------' . PHP_EOL;

    ${'student' . $student->firstname} = new Student($student);

    echo ${'student' . $student->firstname}->showMyself() . PHP_EOL;

    ${'student' . $student->firstname}->studyTime($student->study_time);

    echo '----------------------------- after study -----------------------------' . PHP_EOL;

    echo ${'student' . $student->firstname}->showMyself() . PHP_EOL;

    echo '-----------------------------------------------------------------------' . PHP_EOL;
}
