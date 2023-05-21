<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'id_user',
        'id_sarana_prasarana',
        'id_dokumen',
        'kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    public function saranaPrasarana(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SaranaPrasarana::class, 'id_sarana_prasarana');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function dokumen()
    {
        return $this->belongsTo(Dokumen::class, 'id_dokumen');
    }




}