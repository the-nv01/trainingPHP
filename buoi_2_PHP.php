<?php
    echo 'Bai 1'.'<br>';
    $myName = "Nguyen Van The";
    $greeting = "Ten toi la $myName";
    echo $greeting.'<br>';
    echo strlen($greeting).'<br>';
    echo str_replace($myName, "Vu Duy", $greeting).'<br>';

    echo '<br>'.'Bai 2'.'<br>';
    // 2.1
    $project = [
            'name' => 'Project Template',
            'project manager' => 'Project Manager',
            'develop' => [
                    'First Developer',
                    'Second Developer',
                    'Third Developer'],
            'tester' => 'Tester'];

    // 2.2
    $project['comtor'] = 'Comtor';

    // 2.3
    echo $project['name'].'<br>';

    // 2.4
    array_shift($project['develop']);
    array_push($project['develop'], 'New Developer');

    //2.5
    echo implode('; ', $project['develop']).'<br>';
    ?>