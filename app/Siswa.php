<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tabel';
    protected $primaryKey = 'nis';
    protected $fillable = [
        'nis', 'nama', 'jns_kelamin', 'tempat_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];
}
