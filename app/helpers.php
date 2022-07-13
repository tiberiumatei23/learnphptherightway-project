<?php

declare(strict_types = 1);

function formatDollarAmount(float $amount):string
{

    $isNegative = ($amount < 0) == true;

//    if($isNegative === true) {
//        return ('-' . '$' . number_format(abs($amount), 2));
//    } else  return ('' . '$' . number_format(abs($amount), 2));

    return $isNegative ? '-'.'$'.number_format(abs($amount),2) : '' . '$' . number_format(abs($amount),2);
}

function formatDate(string $date):string
{
    return date('M j, Y',strtotime($date));
}