<?php

/**
 * Create the From Date
 * 
 * @param string $date // date
 * 
 * @return string
 */
function from($date)
{
    $duration = 10 ** 9;
    
    $from_date = $date->add(
        new DateInterval("PT" . $duration. "S")
    );

    return $from_date;
}
