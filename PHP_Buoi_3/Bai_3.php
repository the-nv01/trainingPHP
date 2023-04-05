<?php
$students = [['name' => 'A', 'school_id' => 1],
    ['name' => 'B', 'school_id' => 2],
    ['name' => 'C', 'school_id' => 2],
    ['name' => 'D', 'school_id' => 1]];

$schools = [['id' => 1, 'name' => 'Trường 1'],
    ['id' => 2, 'name' => 'Trường 2']];

foreach ($schools as $school) {
    $student_of_school = [];
    foreach ($students as $student) {
        if ($student['school_id'] === $school['id']) {
            array_push($student_of_school, $student['name']);
            break;
        }
    }
    echo $school['name'].' có học sinh '.implode(' và ', $student_of_school).'</br></br>';
}