<?php

/*
This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
convenience to get you started writing code faster.

Remove this comment before submitting your exercise.
*/

function distance(string $strandA, string $strandB): int
{
    if (strlen($strandA) != strlen($strandB)) {
        throw new InvalidArgumentException("DNA strands must be of equal length.");
    }
    $strandA_array = str_split($strandA);
    $strandB_array = str_split($strandB);
    $hammingDifference = 0;
    
    for ($i = 0; $i < count($strandA_array); $i++) {
        if ($strandA_array[$i] === $strandB_array[$i]) {
            $hammingDifference += 0;
        } else {
            $hammingDifference += 1;
        }
    };
    return $hammingDifference;
}
