<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class SppdModel extends Model
{
    use SoftDeletes;
    protected $table = 'sppd';
    protected $primaryKey = 'id';
    protected $fillable = ["pns_id","skpd_id","kendaraan_id","dibuat_oleh","no_agenda","tahun","tanggal_berangkat","tanggal_kembali","tanggal_sppd","dari_anggaran","tujuan","pengelola","no_surat","status_persetujuan","perdin"];
    public $timestamps = true;

    function getPns(): HasOne
    {
        return $this->hasOne(PnsModel::class, "id", "pns_id");
    }

    function getSkpd(): HasOne
    {
        return $this->hasOne(SkpdModel::class, "id", "skpd_id");
    }

    function getKendaraan(): HasOne
    {
        return $this->hasOne(KendaraanModel::class, "id", "kendaraan_id");
    }

    function getUser(): HasOne
    {
        return $this->hasOne(UserModel::class, "id", "dibuat_oleh");
    }

    function getPengikut(): HasMany
    {
        return $this->hasMany(SppdPengikutModel::class, "sppd_id", "id");
    }

    function getPengelola(): array
    {
        return [
            "SEKRETARIAT",
            "BIDANG JAMINAN DAN REHABILITAS SOSIAL",
            "BIDANG BANTUAN, PERLINDUNGAN DAN PEMBERDAYAAN SOSIAL",
            "BIDANG PENANGGULANGAN KEMISKINAN"
        ];
    }
}