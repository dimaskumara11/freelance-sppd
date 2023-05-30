@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <form action="{{route("cpanel_admin.sppd.pengikut.post",$sppd->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Pengikut</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 col-md-2 mt-2 text-right"><label for="">Nama</label></div>
                            <div class="col-8 col-md-4">
                                <input type="hidden" name="sppd" value="{{$sppd->id}}">
                                <select type="text" name="pns" class="form-control" id="" required>
                                    <option value="">. . . .</option>
                                    @foreach ($pns as $item => $value)
                                        <option value="{{$value->id}}">{{$value->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="submit" class="btn btn-info mt-1">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6 pt-2">
                            <table cellpadding=1px>
                                <tr>
                                    <td><h5>Daftar Pengikut</h5></td>
                                </tr>
                                <tr>
                                    <td>Nomor Agenda</td>
                                    <td>&emsp;:&emsp;</td>
                                    <td>{{$sppd->no_agenda}}</td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td>&emsp;:&emsp;</td>
                                    <td>{{$sppd->tahun}}</td>
                                </tr>
                                <tr>
                                    <td>Perdin</td>
                                    <td>&emsp;:&emsp;</td>
                                    <td>{{$sppd->perdin}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 col-md-6 pt-2 text-right">
                            <a target="_blank" href="{{route("cpanel_admin.sppd.print.halaman_depan",$sppd->id)}}" class="btn btn-xs btn-success"><span class="feather icon-printer"></span> Halaman Depan</a> &nbsp;
                            <a target="_blank" href="{{route("cpanel_admin.sppd.print.halaman_belakang",$sppd->id)}}" class="btn btn-xs btn-success"><span class="feather icon-printer"></span> Halaman Belakang</a> &nbsp;
                            <a target="_blank" href="{{route("cpanel_admin.sppd.print.spt",$sppd->id)}}" class="btn btn-xs btn-success"><span class="feather icon-printer"></span> SPT</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr class="bg-success text-white">
                                    <th>NO</th>
                                    <th>Nama <br> NIP</th>
                                    <th>Berangkat <br> Kembali</th>
                                    <th>Maksud Perjalanan</th>
                                    <th>Aksi</th>
                                </tr>
                                @forelse ($data??[] as $item => $value)                                    
                                    <tr>
                                        <td>{{$value->getSppd->no_agenda}}</td>
                                        <td><span class="text-danger mb-1">{{$value->getPns->nama}}</span> <br> <span>{{$value->getPns->nip}}</span></td>
                                        <td>{{$value->getSppd->tanggal_berangkat}} <br>{{$value->getSppd->tanggal_kembali}}</td>
                                        <td>{{$value->getSppd->tujuan}}</td>
                                        <td>
                                            <a href="{{route("cpanel_admin.sppd.pengikut.delete",$value->id)}}" onclick="return confirm('Kamu yakin ingin menghapus?')" class="btn btn-danger btn-sm text-white"><span class="feather icon-trash"></span> Hapus</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">Data Tidak Ditemukan</td>
                                    </tr>
                                @endforelse
                            </table>
	                        {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addJs')
<script>
</script>
@endpush