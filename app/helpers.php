<?php

use Carbon\Carbon;

function presentPrice($price)
{
    return money_format('$%i', $price / 100);
}

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}

function getNumbers()
{
    $newTotal = Cart::subtotal();

    return collect([
        'newTotal' => $newTotal,
    ]);
}