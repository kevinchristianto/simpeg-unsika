<?php
function format_date($dateParam)
{
    $months = [
        1 => 'Januari',
        2 => 'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    $date = str_replace('/', '-', $dateParam);
    $date = new DateTime($dateParam);

    return $dateParam ? $date->format('d') . ' ' . $months[$date->format('n')] . ' ' . $date->format('Y') : null;
}
