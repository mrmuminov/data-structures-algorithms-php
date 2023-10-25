<?php

declare(strict_types=1);

function linearSearch(array $numbersList, int $numberToFind): int
{
    foreach ($numbersList as $index => $number) {
        if ($number === $numberToFind) {
            return $index;
        }
    }
    return -1;
}

function binarySearch(array $numbersList, int $numberToFind): int
{
    $leftIndex = 0;
    $rightIndex = count($numbersList) - 1;
    $midIndex = 0;
    while ($leftIndex <= $rightIndex) {
        $midIndex = ($leftIndex + $rightIndex) / 2;
        $midNumber = $numbersList[$midIndex];
        if ($midNumber == $numberToFind) {
            return $midIndex;
        }
        if ($midNumber < $numberToFind) {
            $leftIndex = $midIndex + 1;
        } else {
            $rightIndex = $midIndex - 1;
        }
    }
    return -1;
}

function binarySearchRecursive(array $numbersList, int $numberToFind, int $leftIndex, int $rightIndex): int
{
    if ($rightIndex < $leftIndex) {
        return -1;
    }
    $midIndex = ($leftIndex + $rightIndex) / 2;
    if ($midIndex >= count($numbersList) || $midIndex < 0) {
        return -1;
    }
    $midNumber = $numbersList[$midIndex];
    if ($midNumber == $numberToFind) {
        return $midIndex;
    }
    if ($midNumber < $numberToFind) {
        $leftIndex = $midIndex + 1;
    } else {
        $rightIndex = $midIndex - 1;
    }
    return binarySearchRecursive($numbersList, $numberToFind, $leftIndex, $rightIndex);
}
