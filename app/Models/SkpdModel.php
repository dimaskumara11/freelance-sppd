<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkpdModel extends Model
{
    // use SoftDeletes;
    protected $table = 'skpd';
    protected $primaryKey = 'id';
    protected $fillable = ["kode","nama"];
    public $timestamps = true;
}