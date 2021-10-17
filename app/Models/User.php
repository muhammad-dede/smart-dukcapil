<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pelapor';
    protected $primariKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'nik',
        'no_kk',
        'nama_lengkap',
        'tgl_lahir',
        'tempat_lahir',
        'nama_ibu',
        'telp',
        'kewarganegaraan',
        'username',
        'email',
        'password',
        'profil',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function _kewarganegaraan()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan', 'kode');
    }
}
