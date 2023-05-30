@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6 pt-2">
                            <h5>Data Pejabat</h5>
                        </div>
                        <div class="col-12 col-md-6 pt-2 text-right">
                            <a href="{{route("cpanel_admin.master.pejabat.add")}}" class="btn btn-info"><span class="feather icon-plus"></span> Pejabat Baru</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="get">
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
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Pangkat</th>
                                    <th>Jabatan</th>
                                    <th>Jabatan Sebenarnya</th>
                                    <th>Posisi</th>
                                    <th>Tingkat</th>
                                    <th>Dibuat Pada</th>
                                    <th>Terakhir Update</th>
                                    <th>Aksi</th>
                                </tr>
                                @forelse ($data??[] as $item => $value)                                    
                                    <tr>
                                        <td>{{$item+1}}</td>
                                        <td>{{$value->tahun}}</td>
                                        <td>{{$value->nip}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td>{{$value->pangkat}}</td>
                                        <td>{{$value->jabatan}}</td>
                                        <td>{{$value->jabatan_sebenarnya}}</td>
                                        <td>{{$value->posisi}}</td>
                                        <td>{{$value->tingkat}}</td>
                                        <td>{{$value->created_at}}</td>
                                        <td>{{$value->updated_at}}</td>
                                        <td>
                                            <a href="{{route("cpanel_admin.master.pejabat.edit",$value->id)}}" class="btn btn-success btn-sm text-white"><span class="feather icon-edit"></span> Edit</a>
                                            <a onclick="return confirm('Kamu Yakin Mau Menghapus?')" href="{{route("cpanel_admin.master.pejabat.delete",$value->id)}}" class="btn btn-danger btn-sm text-white"><span class="feather icon-plus"></span> Hapus</a>
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