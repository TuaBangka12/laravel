<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuatSuratModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "datasurat";
    protected $primaryKey = "id";
protected $fillable = [
    'nomor',
    'jenis',
    'dari',
    'kota',
    'tanggal', 
    'kepada',
    'sifat',
    'lampiran',
    'hal',
    'ringkasan',
    'nip',
    'nama',
    'jabatan',
    'file',
];
}
