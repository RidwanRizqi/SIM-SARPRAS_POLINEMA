<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';

    protected $fillable = [
        'name',
        'file',
        'keterangan',
    ];

    public function peminjaman(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Peminjaman::class, 'id_dokumen');
    }
}
