<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormulirAnak extends Model
{
    protected $table = 'formulir_anak';

protected $fillable = [
    'id_user', 'nama', 'tempat_lahir', 'tanggal_lahir',
    'gender', 'agama', 'hobi',
    'nama_ayah', 'nama_ibu', 'jarak_rumah',
    'foto_akte', 'foto_kk'
];

// Relasi ke user
public function user()
{
    return $this->belongsTo(User::class, 'id_user');
}
}