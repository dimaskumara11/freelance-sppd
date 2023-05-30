@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <form action="{{route("cpanel_admin.master.skpd.post")}}{{$id?"/$id":""}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Input SKPD</h5>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Kode SKPD</label></div>
                            <div class="col-6 col-md-8">
                                <input type="text" class="form-control" name="kode" value="{{old("kode",($data->kode??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Nama SKPD</label></div>
                            <div class="col-6 col-md-8">
                                <input type="text" class="form-control" name="nama" value="{{old("nama",($data->nama??""))}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a type="button" href="{{route("cpanel_admin.master.skpd.list")}}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('addJs')
<script>
</script>
@endpush