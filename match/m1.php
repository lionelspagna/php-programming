<?php
//match expression, better than switch

function get_symbol($iso) 
{
    return match($iso) {
        'EU' => '€',
        'EGP', 'GBP' => '£',
        'default' => '$'
    };
}

echo get_symbol('EU')."\n";