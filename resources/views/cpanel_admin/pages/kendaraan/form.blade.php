@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <form action="{{route("cpanel_admin.master.kendaraan.post")}}{{$id?"/$id":""}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Input Kendaraan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">No Polisi</label></div>
                            <div class="col-6 col-md-8">
                                <input type="text" class="form-control" name="no_pol" value="{{old("no_pol",($data->no_pol??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Status Aktif</label></div>
                            <div class="col-6 col-md-8">
                                <select type="text" class="form-control" name="status_aktif" required>
                                    <option value="Aktif" {{old("status_aktif",($data->status_aktif??"")) == "Aktif" ? "selected" : ""}}>Aktif</option>
                                    <option value="Pasif" {{old("status_aktif",($data->status_aktif??"")) == "Pasif" ? "selected" : ""}}>Pasif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a type="button" href="{{route("cpanel_admin.master.kendaraan.list")}}" class="btn btn-danger">Kembali</a>
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