<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _PenolongKelahiran extends Model
{
    use HasFactory;

    protected $table = 'm_penolong_kelahiran';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];
}
