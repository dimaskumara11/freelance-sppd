<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlamatSkpdModel extends Model
{
    use SoftDeletes;
    protected $table = 'alamat_skpd';
    protected $primaryKey = 'id';
    protected $fillable = ["nama_skpd","alamat","kode_pos"];
    public $timestamps = true;
}