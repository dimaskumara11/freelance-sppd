
<style>
    #background{
        position:absolute;
        z-index:0;
        background:white;
        display:block;
        min-height:50%; 
        min-width:50%;
        margin-top: 20%;
        margin-left: 20%;
        color:yellow;
    }

    #content{
        position:absolute;
        z-index:1;
    }

    #bg-text
    {
        color:red;
        font-size:120px;
        transform:rotate(320deg);
        -webkit-transform:rotate(320deg);
    }
</style>
<div id="background">
    @if ($status == "Menunggu")
    <div id="bg-text">DRAFT</div>
    @elseif ($status == "Tolak")
    <div id="bg-text">TOLAK</div>
    @endif
</div>

<font face="Arial, Helvetica, sans-serif" id="content">
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:18px">
            <td rowspan="5" width="10%"><img src="{{env('APP_URL')}}/assets/images/logo-dinsos-brebes-hitam-putih.png"></td>
        </tr>
        <tr style="font-size:18px">
            <td align="center" colspan="2">PEMERINTAH KABUPATEN BREBES</td>
        </tr>
        <tr style="font-size:22px">
            <td align="center" colspan="2">{{$alamatSkpd->nama_skpd}}</td>
        </tr>
        <tr style="font-size:14px">
            <td align="center" colspan="2">{{$alamatSkpd->alamat}}</td>
        </tr>
        <tr style="font-size:14px">
            <td align="center" colspan="2">{{$alamatSkpd->kode_pos}}</td>
        </tr>
    </table><b>
        <hr size="2px" color="#000000">
    </b><br />
    <table cellspacing="0" cellpadding="2" border="0" width="100%">
        <tr style="font-size:16px">
            <td width="100%" align="center"><U>SURAT PERINTAH TUGAS</U><br />
                Nomor : {{$sppd->no_surat}}</td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="8" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="10%"></td>
            <td width="90%">Yang bertanda tangan di bawah ini :</td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">Nama</td>
            <td width="2%" valign="top" colspan="2">:</td>
            <td width="68%" valign="top" colspan="4">{{$pejabat->nama}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">NIP</td>
            <td width="2%" valign="top" colspan="2">:</td>
            <td width="68%" valign="top" colspan="4">{{$pejabat->nip}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">Pangkat / Gol. Ruang</td>
            <td width="2%" valign="top" colspan="2">:</td>
            <td width="68%" valign="top" colspan="4">{{$pejabat->pangkat}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">Jabatan</td>
            <td width="2%" valign="top" colspan="2">:</td>
            <td width="68%" valign="top" colspan="4">{{$pejabat->jabatan}} Kabupaten Brebes<br /><br /></td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:16px">
            <td width="5%"></td>
            <td width="95%" align="center">MEMERINTAHKAN<br /><br /></td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">Kepada</td>
            <td width="2%" valign="top">:</td>
            <td width="2%" valign="top">1.</td>
            <td width="20%" valign="top">Nama</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$sppd->getPns->nama}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="20%" valign="top">NIP</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$sppd->getPns->nip}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="20%" valign="top">Pangkat/Gol Ruang</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$sppd->getPns->pangkat}} - {{$sppd->getPns->gol}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="20%" valign="top">Jabatan</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$sppd->getPns->jabatan}}</td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        @foreach ($sppdPengikut as $item => $value)
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="2%" valign="top">{{$item+2}}.</td>
            <td width="20%" valign="top">Nama</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$value->getPns->nama}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="20%" valign="top">NIP</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$value->getPns->nip}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="20%" valign="top">Pangkat/Gol Ruang</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$value->getPns->pangkat}} - {{$value->getPns->gol}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="2%" valign="top"></td>
            <td width="20%" valign="top">Jabatan</td>
            <td width="2%" valign="top">:</td>
            <td width="34%" valign="top">{{$value->getPns->jabatan}}</td>
        </tr>
    @endforeach
    </table><br />
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">Tujuan</td>
            <td width="2%" valign="top" colspan="2">:</td>
            <td width="68%" valign="top" colspan="4">{{$sppd->getSkpd->nama}}<br /></td>
        </tr>
    </table><br />
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">Berangkat Tanggal</td>
            <td width="2%" valign="top" colspan="2">:</td>
            <td width="68%" valign="top" colspan="4">{{tanggal_indonesia($sppd->tanggal_berangkat)}}<br /></td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="5%" valign="top"></td>
            <td width="25%" valign="top">Pulang Tanggal</td>
            <td width="2%" valign="top" colspan="2">:</td>
            <td width="68%" valign="top" colspan="4">{{tanggal_indonesia($sppd->tanggal_kembali)}}<br /></td>
        </tr>
    </table><br />
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="15%">Ditetapkan di</td>
            <td width="35%">: Brebes</td>
        </tr>
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="15%">Tanggal</td>
            <td width="35%">: {{tanggal_indonesia($sppd->tanggal_sppd)}}</td>
        </tr>
    </table>
    <hr width="50%" align="right" style="padding-top:0">
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="50%" align="center">{{ucwords(strtoupper($pejabat->jabatan))}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="50%" align="center">KABUPATEN BREBES</td>
        </tr>
        <tr style="font-size:12px">
            <td width="50%" style="padding-bottom:50"></td>
            <td width="50%" align="center" style="padding-bottom:50"></td>
        </tr>
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="50%" align="center">{{$pejabat->nama}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="50%" align="center">{{$pejabat->pangkat}}</td>
        </tr>
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="50%" align="center">NIP. {{$pejabat->nip}}</td>
        </tr>
        <?php if($pejabat->jabatan_sebenarnya=='-'){?>
        <?php }else{?>
        <tr style="font-size:12px">
            <td width="50%"></td>
            <td width="50%" align="center">{{$pejabat->jabatan_sebenarnya}}</td>
        </tr>
        <?php }?>
    </table>
    <table cellspacing="0" cellpadding="5" border="0" width="100%">
        <tr style="font-size:12px">
            <td width="5%"></td>
            <td width="95%" colspan="3"><u>Tanda Tangan Pemegang</u></td>
        </tr>
        <tr style="font-size:12px">
            <td width="5%"></td>
            <td width="2%" valign="top">1.</td>
            <td width="30%" valign="top">{{$sppd->getPns->nama}}</td>
            <td valign="top">..................................................</td>
        </tr>
        @foreach ($sppdPengikut as $item => $value)
        <tr style="font-size:12px">
            <td width="5%"></td>
            <td width="2%" valign="top">{{$item+2}}.</td>
            <td width="30%" valign="top">{{$value->getPns->nama}}</td>
            <td valign="top">..................................................</td>
        </tr>
        @endforeach
    </table>
    <br />
</font>
<script>
    window.print()
</script>
