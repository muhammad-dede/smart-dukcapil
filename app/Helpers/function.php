<?php

function get_tempat_dilahirkan()
{
    $all_data = \App\Models\_TempatDilahirkan::all();
    return $all_data;
}
function get_hari()
{
    $all_data = \App\Models\_Hari::all();
    return $all_data;
}
function get_jenis_kelahiran()
{
    $all_data = \App\Models\_JenisKelahiran::all();
    return $all_data;
}
function get_penolong_kelahiran()
{
    $all_data = \App\Models\_PenolongKelahiran::all();
    return $all_data;
}
function get_negara()
{
    $all_data = \App\Models\_Negara::all();
    return $all_data;
}
