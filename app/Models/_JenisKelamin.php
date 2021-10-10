<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _JenisKelamin extends Model
{
    use HasFactory;

    protected $table = 'm_jenis_kelamin';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];
}
