<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('day_from_id')) {
    function day_from_id($id)
    {
        $days = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
        return array_key_exists($id, $days) ? $days[$id] : '-';
    }
}

function days_str($array, $key)
{
    foreach ($array as $n => $item) {
        $item[$key] = day_from_id($item[$key]);
        $array[$n] = $item;
    }

    return $array;
}
