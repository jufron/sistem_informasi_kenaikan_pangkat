<?php

use Illuminate\Support\Str;

if (!function_exists('stringLimit')) {
    function stringLimit($value, $limit) {
        return Str::limit($value, $limit, '...');
    }
}
