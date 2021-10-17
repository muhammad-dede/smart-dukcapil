<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLahirMati extends Model
{
    use HasFactory;

    protected $table = 'data_lahir_mati';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }
}
