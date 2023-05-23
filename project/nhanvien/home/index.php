<?php
    $date_array = getdate();
    $mDayVal;
    $monVal;
    $yearVal;
    $hoursVal;
    $minutesVal;
    $secondsVal;
    foreach ($date_array as $key => $val) {
        //echo "$key = $val<br />";

        switch ($key) {
            case "mday":
                $mDayVal = $val; //save day of today
                break;
            case "mon":
                $monVal = $val; //save month of today
                break;
            case "year":
                $yearVal = $val; //save year of today
                break;
            case "hours":
                $hoursVal = $val; //save day of today
                break;
            case "minutes":
                $minutesVal = $val; //save month of today
                break;
            case "seconds":
                $secondsVal = $val; //save year of today
                break;
            default:
                
        }
    }
    //The number of days in month
    $numDaysOfMon = cal_days_in_month(CAL_GREGORIAN, $monVal, $yearVal);
    //The number of remaining days in month
    $numDaysConLaiOfMon = $numDaysOfMon - $mDayVal;

    $formated_date = $date_array['mday'] . "/";
    $formated_date .= $date_array['mon'] . "/";
    $formated_date .= $date_array['year'];

    $date = date($yearVal.'-'.$monVal.'-'.$numDaysOfMon);
    $time= date('07:00:00');
    $date_today= $date.' '.$time;
    
?>