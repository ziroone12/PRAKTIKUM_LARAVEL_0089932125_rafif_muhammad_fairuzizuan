<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class tb_pasien extends Authenticatable
{
    protected $fillable = [
        'id_pasien',
        'nama_lengkap',
        'email',
        'no_telepon',
        'alamat',
        'password',
        'status_pasien',
        'create_at'


    ];
}
