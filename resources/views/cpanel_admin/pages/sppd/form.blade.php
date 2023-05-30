@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <form action="{{route("cpanel_admin.sppd.post")}}{{$id?"/$id":""}}" method="post">
                @csrf
                <input type="hidden" name="perdin" value="{{request()->perdin}}">
                <input type="hidden" name="tahun" value="{{request()->tahun}}">
                <div class="card">
                    <div class="card-header">
                        <h5>Input SPPD Tahun {{request()->tahun}} Perdin {{request()->perdin}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Nama</label></div>
                            <div class="col-8 col-md-8">
                                <select type="text" name="pns" class="form-control" id="" required>
                                    <option value="">. . . .</option>
                                    @foreach ($pns as $item => $value)
                                        <option value="{{$value->id}}" {{$value->id==(old("pns",($data->getPns->id ?? "")))?"selected":""}}>{{$value->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Tujuan Perjalanan Dinas</label></div>
                            <div class="col-8 col-md-8">
                                <select type="text" name="skpd" class="form-control" id="" required>
                                    <option value="">. . . .</option>
                                    @foreach ($skpd as $item => $value)
                                        <option value="{{$value->id}}" {{$value->id==(old("skpd",($data->getSkpd->id ?? "")))?"selected":""}}>{{$value->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Tanggal Berangkat Dan Kembali</label></div>
                            <div class="col-4 col-md-4">
                                <input type="date" class="form-control" name="tanggal_berangkat" value="{{old("tanggal_berangkat",($data->tanggal_berangkat??""))}}" required>
                            </div>
                            <div class="col-4 col-md-4">
                                <input type="date" class="form-control" name="tanggal_kembali" value="{{old("tanggal_kembali",($data->tanggal_kembali??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Tanggal SPPD</label></div>
                            <div class="col-6 col-md-4">
                                <input type="date" class="form-control" name="tanggal_sppd" value="{{old("tanggal_sppd",($data->tanggal_sppd??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Kendaraan</label></div>
                            <div class="col-8 col-md-4">
                                <select type="text" name="kendaraan" class="form-control" id="" required>
                                    <option value="">. . . .</option>
                                    @foreach ($kendaraan as $item => $value)
                                        <option value="{{$value->id}}" {{$value->id==(old("kendaraan",($data->getKendaraan->id ?? "")))?"selected":""}}>{{$value->no_pol}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Dari Anggaran</label></div>
                            <div class="col-6 col-md-8">
                                <input type="text" class="form-control" name="dari_anggaran" value="{{old("dari_anggaran",($data->dari_anggaran??""))}}" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Maksud Tujuan</label></div>
                            <div class="col-6 col-md-8">
                                <textarea type="text" class="form-control" name="tujuan" required>{{old("tujuan",($data->tujuan??""))}}</textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-3 mt-2 text-right"><label for="">Pengelola</label></div>
                            <div class="col-8 col-md-8">
                                <select type="text" name="pengelola" class="form-control" id="" required>
                                    <option value="">. . . .</option>
                                    @foreach ($pengelola as $value)
                                        <option value="{{$value}}" {{$value==(old("pengelola",($data->pengelola ?? "")))?"selected":""}}>{{$value}}</option>
                                    @endforeach
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
</div>
@endsection

@push('addJs')
<script>
</script>
@endpush