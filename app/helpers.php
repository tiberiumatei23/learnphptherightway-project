<?php

declare(strict_types = 1);

function formatDollarAmount(float $amount):string
{

    $isNegative = $amount < 0;

    if($isNegative === true) {
        return ('-' . '$' . number_format(abs($amount), 2));
    } else  return ('' . '$' . number_format(abs($amount), 2));
}