<?php
    $name = $_POST['userName'] ?? 'no name';
    $computedString = "Hi, " . $name . "!";
    $array = ['userName' => $name, 'computedString' => $computedString];
    echo json_encode($array);    
?>