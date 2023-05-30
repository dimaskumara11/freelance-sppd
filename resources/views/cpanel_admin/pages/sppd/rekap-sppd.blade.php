@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <form target="_blank" action="{{$param=="rekap-tahun"?route('cpanel_admin.rekap-sppd.print-rekap-tahun'):route('cpanel_admin.rekap-sppd.print-rekap-bidang')}}" method="get">
                <div class="card">
                    <div class="card-header">
                        <h5>Pilih Tahun Untuk Melihat Data Rekap SPPD</h5>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-4 col-md-2 mt-2 text-right"><label for="">Pilih Perdin</label></div>
                            <div class="col-8 col-md-4">
                                <select type="text" name="perdin" class="form-control" id="">
                                    <option value="">Semua</option>
                                    <option value="Dalam">Perdin Dalam</option>
                                    <option value="Luar">Perdin Luar</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-4 col-md-2 mt-2 text-right"><label for="">Pilih Tahun</label></div>
                            <div class="col-8 col-md-4">
                                <select type="text" name="tahun" class="form-control" id="" required>
                                    @for ($i = 2020; $i <= Carbon\Carbon::now()->format("Y"); $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        @if ($param == "rekap-bidang")
                        <div class="row form-group">
                            <div class="col-4 col-md-2 mt-2 text-right"><label for="">Pilih Bidang</label></div>
                            <div class="col-8 col-md-4">
                                <select type="text" name="bidang" class="form-control" id="" required>
                                    <option value="">. . .</option>
                                    @foreach ($skpd as $item)
                                        <option value="{{$item}}">{{$item}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
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