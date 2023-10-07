<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Traits\Uuids;
use EloquentFilter\Filterable;

class Kegiatan extends Model
{
    use HasFactory, SoftDeletes, Uuids, Filterable;
    protected $table = 'tb_kas_transaksi';
}
