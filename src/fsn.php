<?php

if (!function_exists('fsn')) {
    function fsn($number): string
    {
        return number_format($number, 2, ',', ' ');
    }
}
