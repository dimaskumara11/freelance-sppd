<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class PejabatModel extends Model
{
    use SoftDeletes;
    protected $table = 'pejabat';
    protected $primaryKey = 'id';
    protected $fillable = ["user_id","tahun","nip","nama","pangkat","jabatan","jabatan_sebenarnya","status_aktif","tingkat"];
    public $timestamps = true;

    function getUser(): HasOne
    {
        return $this->hasOne(UserModel::class, "id", "user_id");
    }
    public function getTingkat(): array
    {
        return [
            "Tingkat B", "Tingkat C"
        ];
    }
}