<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    
    protected $table = 'alternatives';

    protected $fillable = [      
        'kode_alternatif',
        'nama_destinasi',
        'C1',
        'C2',
        'C3',
        'C4',
        'C5'
    ];
}
