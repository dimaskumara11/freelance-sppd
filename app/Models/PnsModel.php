<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PnsModel extends Model
{
    use SoftDeletes;
    protected $table = 'pns';
    protected $primaryKey = 'id';
    protected $fillable = ["nip","nama","gol","pangkat","jabatan","eselon","tingkat"];
    public $timestamps = true;

    public function getGol(): array
    {
        return [
            "I/a","I/b","I/c","I/d",
            "II/a","II/b","II/c","II/d",
            "III/a","III/b","III/c","III/d",
            "IV/a","IV/b","IV/c","IV/d",
        ];
    }
    public function getEselon(): array
    {
        return [
            "Non Eselon",
            "II/a","II/b",
            "III/a","III/b",
            "IV/a","IV/b",
        ];
    }
    public function getTingkat(): array
    {
        return [
            "Tingkat B", "Tingkat C"
        ];
    }
}