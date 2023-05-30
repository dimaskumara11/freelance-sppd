@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-6 pt-2">
                            <h5>Data Alamat SKPD</h5>
                        </div>
                        @if (!$data)
                        <div class="col-12 col-md-6 pt-2 text-right">
                            <a href="{{route("cpanel_admin.master.alamat-skpd.add")}}" class="btn btn-info"><span class="feather icon-plus"></span> Alamat SKPD Baru</a>
                        </div>
                        @endif
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
                                    <th>Nama SKPD</th>
                                    <th>Alamat</th>
                                    <th>Kode POS</th>
                                    <th>Dibuat Pada</th>
                                    <th>Terakhir Update</th>
                                    <th>Aksi</th>
                                </tr>
                                @forelse ($data??[] as $item => $value)                                    
                                    <tr>
                                        <td>{{$item+1}}</td>
                                        <td>{{$value->nama_skpd}}</td>
                                        <td>{{$value->alamat}}</td>
                                        <td>{{$value->kode_pos}}</td>
                                        <td>{{$value->created_at}}</td>
                                        <td>{{$value->updated_at}}</td>
                                        <td>
                                            <a href="{{route("cpanel_admin.master.alamat-skpd.edit",$value->id)}}" class="btn btn-success btn-sm text-white"><span class="feather icon-edit"></span> Edit</a>
                                            {{-- <a onclick="return confirm('Kamu Yakin Mau Menghapus?')" href="{{route("cpanel_admin.master.alamat-skpd.delete",$value->id)}}" class="btn btn-danger btn-sm text-white"><span class="feather icon-plus"></span> Hapus</a> --}}
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