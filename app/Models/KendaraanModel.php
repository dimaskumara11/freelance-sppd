<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KendaraanModel extends Model
{
    // use SoftDeletes;
    protected $table = 'kendaraan';
    protected $primaryKey = 'id';
    protected $fillable = ["no_pol","status_aktif"];
    public $timestamps = true;
}