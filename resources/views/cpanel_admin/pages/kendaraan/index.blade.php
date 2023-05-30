@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6 pt-2">
                            <h5>Data Kendaraan</h5>
                        </div>
                        <div class="col-12 col-md-6 pt-2 text-right">
                            <a href="{{route("cpanel_admin.master.kendaraan.add")}}" class="btn btn-info"><span class="feather icon-plus"></span> kendaraan Baru</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr class="bg-success text-white">
                                    <th>No</th>
                                    <th>No Polisi</th>
                                    <th>Status Aktif</th>
                                    <th>Dibuat Pada</th>
                                    <th>Terakhir Update</th>
                                    <th>Aksi</th>
                                </tr>
                                @forelse ($data??[] as $item => $value)                                    
                                    <tr>
                                        <td>{{$item+1}}</td>
                                        <td>{{$value->no_pol}}</td>
                                        <td>{{$value->status_aktif}}</td>
                                        <td>{{$value->created_at}}</td>
                                        <td>{{$value->updated_at}}</td>
                                        <td>
                                            <a href="{{route("cpanel_admin.master.kendaraan.edit",$value->id)}}" class="btn btn-success btn-sm text-white"><span class="feather icon-edit"></span> Edit</a>
                                            <a onclick="return confirm('Kamu Yakin Mau Menghapus?')" href="{{route("cpanel_admin.master.kendaraan.delete",$value->id)}}" class="btn btn-danger btn-sm text-white"><span class="feather icon-plus"></span> Hapus</a>
                                        </td>
                                    </tr>
                                    
                                @empty
                                    <tr>
                                        <td colspan="5">Data Tidak Ditemukan</td>
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