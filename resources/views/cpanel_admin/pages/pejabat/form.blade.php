@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <form action="{{route("cpanel_admin.master.pejabat.post")}}{{$id?"/$id":""}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Input Pejabat</h5>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Tahun</label></div>
                            <div class="col-6 col-md-2">
                                <select type="text" name="tahun" class="form-control" id="" required>
                                    <option value="">. . .</option>
                                    @for ($i = 2020; $i <= Carbon\Carbon::now()->format("Y"); $i++)
                                        <option value="{{$i}}" {{old("tahun",($data->tahun??"")) == $i?"selected":""}}>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Nama</label></div>
                            <div class="col-6 col-md-6">
                                <input type="text" class="form-control" name="nama" value="{{old("nama",($data->nama??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">NIP</label></div>
                            <div class="col-6 col-md-6">
                                <input type="text" class="form-control" name="nip" value="{{old("nip",($data->nip??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Pangkat</label></div>
                            <div class="col-6 col-md-6">
                                <input type="text" class="form-control" name="pangkat" value="{{old("pangkat",($data->pangkat??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Jabatan</label></div>
                            <div class="col-6 col-md-6">
                                <input type="text" class="form-control" name="jabatan" value="{{old("jabatan",($data->jabatan??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Jabatan Sebenarnya</label></div>
                            <div class="col-6 col-md-6">
                                <input type="text" class="form-control" name="jabatan_sebenarnya" value="{{old("jabatan_sebenarnya",($data->jabatan_sebenarnya??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Posisi</label></div>
                            <div class="col-6 col-md-2">
                                <select type="text" class="form-control" name="status_aktif" required>
                                    <option value="">. . .</option>
                                    <option value="Aktif" {{old("status_aktif",($data->status_aktif??"")) == "Aktif"?"selected":""}}>Aktif</option>
                                    <option value="Pasif" {{old("status_aktif",($data->status_aktif??"")) == "Pasif"?"selected":""}}>Pasif</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Tingkat</label></div>
                            <div class="col-6 col-md-2">
                                <select type="text" class="form-control" name="tingkat" required>
                                    <option value="">. . .</option>
                                    @foreach ($tingkat as $item)
                                        <option value="{{$item}}" {{old("tingkat",($data->tingkat??"")) == $item?"selected":""}}>{{$item}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a type="button" href="{{route("cpanel_admin.master.pejabat.list")}}" class="btn btn-danger">Kembali</a>
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