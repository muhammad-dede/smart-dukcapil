<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function data_pengajuan()
    {
        return $this->morphTo(__FUNCTION__, 'data_pengajuan_type', 'data_pengajuan_id');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }
}
