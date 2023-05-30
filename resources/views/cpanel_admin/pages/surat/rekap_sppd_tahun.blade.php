<font face="Arial, Helvetica, sans-serif">
    <center>REKAP SPPD {{request()->perdin?"PERDIN ".strtoupper(request()->perdin):""}} TAHUN {{request()->tahun}}</center><br />
    <table cellspacing="0" cellpadding="3" border="1" width="100%">
        <thead>
            <tr style="font-size:10px">
                <th>
                    <center>No Agenda</center>
                </th>
                <th>
                    <center>Nama / NIP / Jabatan</center>
                </th>
                <th>
                    <center>Tanggal Surat</center>
                </th>
                <th>
                    <center>Nomor Surat</center>
                </th>
                <th>
                    <center>Tanggal Berangkat</center>
                </th>
                <th>
                    <center>Tanggal Kembali</center>
                </th>
                <th>
                    <center>Maksud Perjalanan Dinas</center>
                </th>
                <th>
                    <center>Tujuan</center>
                </th>
                <th>
                    <center>Pengolah</center>
                </th>
                <th>
                    <center>Pengikut</center>
                </th>
            </tr>
        </thead>
        @foreach ($sppd as $valueSppd)
        <tr style="font-size:10px">
            <td align="center" valign="top">{{$valueSppd->no_agenda}}</td>
            <td valign="top">{{$valueSppd->getPns->nama}}<br />
                {{$valueSppd->getPns->nip}}<br />
                {{$valueSppd->getPns->jabatan}}<br /></td>
            <td valign="top">{{tanggal_indonesia2($valueSppd->tanggal_sppd)}}</td>
            <td valign="top">{{$valueSppd->no_surat}}</td>
            <td valign="top">{{tanggal_indonesia2($valueSppd->tanggal_berangkat)}}</td>
            <td valign="top">{{tanggal_indonesia2($valueSppd->tanggal_kembali)}}</td>
            <td valign="top">{{$valueSppd->tujuan}}</td>
            <td valign="top">{{$valueSppd->getSkpd->nama}}</td>
            <td valign="top">{{$valueSppd->pengelola}}</td>
            <td valign="top">
                @foreach ($valueSppd->getPengikut as $item => $valuePengikut)
                    {{$item+1}}. {{$valuePengikut->getPns->nama}}<br />
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</font>
