@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <form action="{{route("cpanel_admin.master.pns.post")}}{{$id?"/$id":""}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Input PNS</h5>
                    </div>
                    <div class="card-body">
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
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Gol</label></div>
                            <div class="col-6 col-md-2">
                                <select type="text" class="form-control" name="gol" required>
                                    <option value="">. . .</option>
                                    @foreach ($gol as $item)
                                        <option value="{{$item}}" {{old("gol",($data->gol??"")) == $item?"selected":""}}>{{$item}}</option>
                                    @endforeach
                                </select>
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
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Eselon</label></div>
                            <div class="col-6 col-md-2">
                                <select type="text" class="form-control" name="eselon" required>
                                    <option value="">. . .</option>
                                    @foreach ($eselon as $item)
                                        <option value="{{$item}}" {{old("eselon",($data->eselon??"")) == $item?"selected":""}}>{{$item}}</option>
                                    @endforeach
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
                        <a type="button" href="{{route("cpanel_admin.master.pns.list")}}" class="btn btn-danger">Kembali</a>
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