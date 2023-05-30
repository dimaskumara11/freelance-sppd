<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class SppdPengikutModel extends Model
{
    use SoftDeletes;
    protected $table = 'sppd_pengikut';
    protected $primaryKey = 'id';
    protected $fillable = ["sppd_id","pns_id"];
    public $timestamps = true;

    function getSppd(): HasOne
    {
        return $this->hasOne(SppdModel::class, "id", "sppd_id");
    }

    function getPns(): HasOne
    {
        return $this->hasOne(PnsModel::class, "id", "pns_id");
    }
}