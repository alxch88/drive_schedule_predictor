<?php

include_once './Classes/Car.php';
include_once './Classes/Date_Time.php';

$newCar = new Car($_POST['car_plate']);
$newDateTime = new Date_Time($_POST['date'], $_POST['time']);

$validation = $newCar->validateDrivingSchedule($newDateTime->date, $newDateTime->time);

if ($validation) {
    $data['success'] = true;
} else {
    $data['success'] = false;
}

echo json_encode($data);

