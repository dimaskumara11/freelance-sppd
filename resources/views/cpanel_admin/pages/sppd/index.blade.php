@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    @if (!request()->tahun)
        <div class="row">
            <div class="col-12">
                <form action="" method="get">
                    <div class="card">
                        <div class="card-header">
                            <h5>Pilih Tahun Untuk Melihat Data SPPD</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 col-md-2 mt-2 text-right"><label for="">Pilih Tahun</label></div>
                                <div class="col-8 col-md-4">
                                    <input type="hidden" name="perdin" value="{{request()->perdin}}">
                                    <select type="text" name="tahun" class="form-control" id="">
                                        @for ($i = 2020; $i <= Carbon\Carbon::now()->format("Y"); $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
    @if (request()->tahun)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6 pt-2">
                            <h5>Data SPPD Tahun {{request()->tahun}} Perdin {{request()->perdin}}</h5>
                        </div>
                        <div class="col-12 col-md-6 pt-2 text-right">
                            <label>Jumlah Data : {{$countData??0}}</label> &emsp;
                            <a href="{{route("cpanel_admin.sppd.add",["tahun"=>request()->tahun,"perdin"=>request()->perdin])}}" class="btn btn-info"><span class="feather icon-plus"></span> SPPD Baru</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="get">
                        <input type="hidden" name="tahun" value="{{request()->tahun}}">
                        <input type="hidden" name="perdin" value="{{request()->perdin}}">
                        <div class="row">
                            <div class="col-md-4 offset-md-7">
                                <div class="form-group">
                                    <input type="text" name="keyword" class="form-control" id="" value="{{request()->keyword}}" placeholder="Ketik Disini . . . ."> 
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-info mt-1"><span class="feather icon-search"></span> Cari</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr class="bg-success text-white">
                                    <th>NO</th>
                                    <th>Status</th>
                                    <th>Nama <br> NIP <br> Jabatan</th>
                                    <th>Tujuan</th>
                                    <th>Pengikut</th>
                                    <th>Kendaraan <br> Berangkat <br> Kembali</th>
                                    <th>Maksud Perjalanan</th>
                                    <th>Aksi</th>
                                </tr>
                                @forelse ($data??[] as $item => $value)                                    
                                    <tr>
                                        <td>{{$value->no_agenda}}</td>
                                        <td>@if ($value->status_persetujuan=='Setujui')
                                            <button class="btn btn-success btn-sm">Disetujui</button>
                                        @elseif($value->status_persetujuan=='Menunggu')
                                            <button class="btn btn-warning btn-sm">{{$value->status_persetujuan}}</button>
                                        @elseif($value->status_persetujuan=='Tolak')
                                            <button class="btn btn-danger btn-sm">Ditolak</button>
                                        @endif</td>
                                        <td><span class="text-danger mb-1">{{$value->getPns->nama}}</span> <br> <span>{{$value->getPns->nip}}</span> <br> <span class="text-info mt-1">{{$value->getPns->jabatan}}</span></td>
                                        <td>{{$value->getSkpd->nama}}</td>
                                        <td>
                                            @foreach ($value->getPengikut??[] as $itemPengikut => $valuePengikut)
                                                {{$valuePengikut->getPns->nama}} <br>
                                            @endforeach
                                        </td>
                                        <td>{{$value->getKendaraan->no_pol}} <br>{{$value->tanggal_berangkat}} <br>{{$value->tanggal_kembali}}</td>
                                        <td>{{$value->tujuan}}</td>
                                        <td>
                                            <a href="{{route("cpanel_admin.sppd.edit",$value->id)}}?tahun={{request()->tahun}}&perdin={{request()->perdin}}" class="btn btn-success btn-sm"><span class="feather icon-edit"></span></a>
                                            <a href="{{route("cpanel_admin.sppd.pengikut",$value->id)}}" class="btn btn-info btn-sm text-white"><span class="feather icon-plus"></span> Pengikut</a>
                                            @if (session("group") == "KEPALA DINAS")
                                            <br>
                                            <a href="{{route("cpanel_admin.sppd.update-status",$value->id)}}/Setujui" class="btn btn-success btn-sm text-white"><span class="feather icon-check"></span> Setujui</a>
                                            <a href="{{route("cpanel_admin.sppd.update-status",$value->id)}}/Tolak" class="btn btn-danger btn-sm text-white"><span class="feather icon-delete"></span> &nbsp;Tolak</a>
                                            @endif
                                        </td>
                                    </tr>
                                    
                                @empty
                                    <tr>
                                        <td colspan="8">Data Tidak Ditemukan</td>
                                    </tr>
                                @endforelse
                            </table>
   
                            {{-- <ul class="pagination">
                                <li class="page-item"><a class="page-link bg-danger text-white" href="{{ $data->previousPageUrl() }}">Previous</a></li>
                                <li class="page-item"><a class="page-link bg-info text-white" href="{{ $data->nextPageUrl() }}">Next</a></li>
                            </ul> --}}
                            
	                        {{ $data->links("vendor.pagination.sppd") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@push('addJs')
<script>
</script>
@endpush