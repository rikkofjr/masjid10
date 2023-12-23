<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

use App\Models\Zis;

class ZisStandarisasi extends Model
{
    use HasFactory, Uuids;
    protected $table ='tb_zis_standarisasi';
    protected $fillable = [
        'penginput',
        'uang_standarisasi',
        'beras_standarisasi'
    ];
}
