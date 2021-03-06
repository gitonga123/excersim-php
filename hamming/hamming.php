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
    $hammingDifferenceArray = array_diff_assoc($strandA_array, $strandB_array);
    return count($hammingDifferenceArray);
}
