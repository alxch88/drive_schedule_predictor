<?php

/**
 * Description of Car
 *
 * @author Alex Chavez
 */
class Car {

    public $plate;

    public function __construct($plate) {
        $this->plate = $plate;
    }

    public function validateDrivingSchedule($date, $time) {
        //Get Plate Last digit
        $last_digit = substr($this->plate, -1);

        //Day of the week, 1(monday), 2(tuesday), 3(wednesday), 4(thursday), 5(friday), 6(saturday), 7(sunday)
        $dayofweek = date('w', strtotime($date));

        //Exclude Weekends from validation
        if ($dayofweek == '6' || $dayofweek == '7') {
            return true;
        } else {
            switch ($dayofweek) {
                //Monday
                case 1:
                    if ($last_digit == 1 || $last_digit == 2) {

                        if ((strtotime($time) > strtotime('07:00:00') && strtotime($time) < strtotime('09:30:00')) || (strtotime($time) > strtotime('16:00:00') && strtotime($time) < strtotime('19:30:00'))) {
                            return false;
                        } else {
                            return true;
                        }
                    } else {
                        //Other Last Digit, No validation
                        return true;
                    }
                //Tuesday
                case 2:
                    if ($last_digit == 3 || $last_digit == 4) {
                        if ((strtotime($time) > strtotime('07:00:00') && strtotime($time) < strtotime('09:30:00')) || (strtotime($time) > strtotime('16:00:00') && strtotime($time) < strtotime('19:30:00'))) {
                            return false;
                        } else {
                            return true;
                        }
                    } else {
                        //Other Last Digit, No validation
                        return true;
                    }
                //Wednesday
                case 3:
                    if ($last_digit == 5 || $last_digit == 6) {
                        if ((strtotime($time) > strtotime('07:00:00') && strtotime($time) < strtotime('09:30:00')) || (strtotime($time) > strtotime('16:00:00') && strtotime($time) < strtotime('19:30:00'))) {
                            return false;
                        } else {
                            return true;
                        }
                    } else {
                        //Other Last Digit, No validation
                        return true;
                    }
                //Thursday
                case 4:
                    if ($last_digit == 7 || $last_digit == 8) {
                        if ((strtotime($time) > strtotime('07:00:00') && strtotime($time) < strtotime('09:30:00')) || (strtotime($time) > strtotime('16:00:00') && strtotime($time) < strtotime('19:30:00'))) {
                            return false;
                        } else {
                            return true;
                        }
                    } else {
                        //Other Last Digit, No validation
                        return true;
                    }
                //Friday
                case 5:
                    if ($last_digit == 9 || $last_digit == 0) {
                        if ((strtotime($time) > strtotime('07:00:00') && strtotime($time) < strtotime('09:30:00')) || (strtotime($time) > strtotime('16:00:00') && strtotime($time) < strtotime('19:30:00'))) {
                            return false;
                        } else {
                            return true;
                        }
                    } else {
                        //Other Last Digit, No validation
                        return true;
                    }
            }
        }
    }

}
