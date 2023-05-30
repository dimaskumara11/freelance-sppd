{{-- tanggal_indonesia --}}
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
             <td align="center" colspan="2">{{ $alamatSkpd->nama_skpd }}</td>
         </tr>
         <tr style="font-size:14px">
             <td align="center" colspan="2">{{ $alamatSkpd->alamat }}</td>
         </tr>
         <tr style="font-size:14px">
             <td align="center" colspan="2">{{ $alamatSkpd->kode_pos }}</td>
         </tr>
     </table>
     <b>
         <hr size="2px" color="#000000">
     </b>

     <table cellspacing="0" cellpadding="2" border="0" width="100%">
         <tr style="font-size:12px">
             <td width="25%"></td>
             <td width="25%"></td>
             <td width="25%"></td>
             <td width="12%" rowspan="3">Lembar Ke<br />Kode No<br />Nomor</td>
             <td width="1%" rowspan="3">:<br />:<br />:</td>
             <td width="12%" rowspan="3"><br />094<br />{{ $sppd->no_agenda }}</td>
         </tr>
     </table>

     <table cellspacing="0" cellpadding="2" border="0" width="100%">
         <tr>
             <td width="100%" align="center"><U>SURAT PERINTAH PERJALANAN DINAS (SPPD)</U></td>
         </tr>
     </table><br />

     <table cellspacing="0" cellpadding="8" border="1" width="100%">
         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center">1.</td>
             <td width="40%" valign="top" colspan="2">{{ $pejabat->jabatan }} Kabupaten Brebes</td>
             <td width="58%" valign="top" colspan="3">{{ $pejabat->nama }}</td>
         </tr>
         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center">2.</td>
             <td width="40%" valign="top" colspan="2">Nama / NIP Pegawai yang melaksanakan perjalanan dinas</td>
             <td width="58%" valign="top" colspan="3">{{ $sppd->getPns->nama }}<br /> NIP. {{ $sppd->getPns->nip }}
             </td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center" style="border-bottom-style:none; padding-bottom:0">3.</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0">a.</td>
             <td valign="top" style="border-left-style:none; border-bottom-style:none; padding-bottom:0">Pangkat dan
                 Golongan</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0">a.</td>
             <td valign="top" style="border-left-style:none; border-bottom-style:none; padding-bottom:0">
                 {{ $sppd->getPns->pangkat }} - {{ $sppd->getPns->gol }}</td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center"
                 style="border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0"></td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 b.</td>
             <td valign="top"
                 style="border-left-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 Jabatan / Instansi</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 b.</td>
             <td valign="top"
                 style="border-left-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 {{ $sppd->getPns->jabatan }}</td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center" style="border-top-style:none"></td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">c.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0">Tingkat Biaya
                 Perjalanan Dinas</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">c.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0">
                 {{ $sppd->getPns->tingkat }}</td>
         </tr>
         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center">4.</td>
             <td width="40%" valign="top" colspan="2">Maksud Perjalanan Dinas</td>
             <td width="58%" valign="top" colspan="3">{{ $sppd->tujuan }}</td>
         </tr>
         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center">5.</td>
             <td width="40%" valign="top" colspan="2">Alat angkut yang dipergunakan</td>
             <td width="58%" valign="top" colspan="3">{{ $sppd->getKendaraan->no_pol }}</td>
         </tr>

         <tr style="font-size:12px">
             <td valign="top" align="center" style="border-bottom-style:none; padding-bottom:0">6.</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0">a.</td>
             <td valign="top" style="border-left-style:none; border-bottom-style:none; padding-bottom:0">Tempat
                 Berangkat</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0">a.</td>
             <td valign="top" style="border-left-style:none; border-bottom-style:none; padding-bottom:0">Dinas
                 Sosial Kabupaten Brebes</td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center" style="border-top-style:none"></td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">b.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0">Tempat Tujuan
             </td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">b.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0">
                 {{ $sppd->getSkpd->nama }}</td>
         </tr>

         <tr style="font-size:12px">
             <td valign="top" align="center" style="border-bottom-style:none; padding-bottom:0">7.</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0">a.</td>
             <td valign="top" style="border-left-style:none; border-bottom-style:none; padding-bottom:0">Lamanya
                 Perjalanan Dinas</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0">a.</td>
             <td valign="top" style="border-left-style:none; border-bottom-style:none; padding-bottom:0">
                 {{ $diffDay }} hari</td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center"
                 style="border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0"></td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 b.</td>
             <td valign="top"
                 style="border-left-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 Tanggal Berangkat</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 b.</td>
             <td valign="top"
                 style="border-left-style:none; border-top-style:none; border-bottom-style:none; padding-top:0; padding-bottom:0">
                 {{ tanggal_indonesia($sppd->tanggal_berangkat) }}</td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center" style="border-top-style:none"></td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">c.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0">Tanggal harus
                 kembali/tiba di tempat baru *)</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">c.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0">
                 {{ tanggal_indonesia($sppd->tanggal_kembali) }}</td>
         </tr>

         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center">8.</td>
             <td width="40%" valign="top" colspan="2">Nama Pengikut :</td>
             <td width="58%" valign="top" colspan="3">Nomor Induk Pegawai</td>
         </tr>
         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center" style="padding-bottom:10"></td>
             <td width="40%" valign="top" colspan="2">
                @foreach ($sppdPengikut as $item => $value)
                    {{ $item+1 }}. {{ $value->getPns->nama }}<br />
                @endforeach
             </td>
             <td width="58%" valign="top" colspan="3" style="padding-bottom:10">
                @foreach ($sppdPengikut as $item => $value)
                    {{ $item+1 }}. {{ $value->getPns->nip }}<br />
                @endforeach
             </td>
         </tr>

         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center" style="border-bottom-style:none; padding-bottom:0">9.
             </td>
             <td width="40%" valign="top" colspan="2" style="border-bottom-style:none; padding-bottom:0">
                 Pembebanan Anggaran</td>
             <td width="58%" valign="top" colspan="3" style="border-bottom-style:none; padding-bottom:0">
             </td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center"
                 style="border-bottom-style:none; padding-bottom:0; border-top-style:none;"></td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0; border-top-style:none;">a.
             </td>
             <td valign="top"
                 style="border-left-style:none; border-bottom-style:none; padding-bottom:0; border-top-style:none;">
                 Instansi</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-bottom-style:none; padding-bottom:0; border-top-style:none;">a.
             </td>
             <td valign="top"
                 style="border-left-style:none; border-bottom-style:none; padding-bottom:0; border-top-style:none;">
                 Dinas Sosial Kabupaten Brebes</td>
         </tr>
         <tr style="font-size:12px">
             <td valign="top" align="center" style="border-top-style:none"></td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">b.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0">Akun / Kode
                 Rekening Perjalanan Dinas</td>
             <td width="2%" valign="top" align="center"
                 style="border-right-style:none; border-top-style:none; padding-top:0">b.</td>
             <td valign="top" style="border-left-style:none; border-top-style:none; padding-top:0"></td>
         </tr>
         <tr style="font-size:12px">
             <td width="2%" valign="top" align="center">10.</td>
             <td width="40%" valign="top" colspan="2">Keterangan lain - lain</td>
             <td width="58%" valign="top" colspan="3"></td>
         </tr>
     </table><br />
     <table cellspacing="0" cellpadding="0" border="0" width="100%">
         <tr style="font-size:12px">
             <td width="55%"></td>
             <td width="15%">Dikeluarkan di</td>
             <td width="30%">: Brebes</td>
         </tr>
         <tr style="font-size:12px">
             <td width="55%"></td>
             <td width="15%">Tanggal</td>
             <td width="30%">: {{ tanggal_indonesia($sppd->tanggal_sppd) }}</td>
         </tr>
     </table><br />
     <table cellspacing="0" cellpadding="2" border="0" width="100%">
         <tr style="font-size:12px">
             <td width="50%"></td>
             <td width="50%" align="center">{{ ucwords(strtoupper($pejabat->jabatan)) }}</td>
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
             <td width="50%" align="center">{{ $pejabat->nama }}</td>
         </tr>
         <tr style="font-size:12px">
             <td width="50%"></td>
             <td width="50%" align="center">{{ $pejabat->pangkat }}</td>
         </tr>
         <tr style="font-size:12px">
             <td width="50%"></td>
             <td width="50%" align="center">NIP. {{ $pejabat->nip }}</td>
         </tr>
         <?php if($pejabat->jabatan_sebenarnya=='-'){?>
         <?php }else{?>
         <tr style="font-size:12px">
             <td width="50%"></td>
             <td width="50%" align="center">{{ $pejabat->jabatan_sebenarnya }}</td>
         </tr>
         <?php }?>

     </table>
 </font>
 <script>
     window.print()
 </script>
