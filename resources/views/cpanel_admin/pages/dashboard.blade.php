@extends('cpanel_admin.template_admin')

@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 align=center class="font-weight-bold" style="line-height: 40px"><img src="{{env('APP_URL')}}/assets/images/logo-dinsos-brebes.png" width="80" height="80" alt=""> <br> <br> APLIKASI E-SPPD DINAS SOSIAL KABUPATEN BREBES</h3>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <div class="card bg-info p-2 rounded">
                                <h4 align=center class="text-white">SPPD <br> (SEMUA)</h4>
                                <h2 align=center class="font-weight-bold text-white">{{$countSppd}}</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-warning p-2 rounded">
                                <h4 align=center class="text-white">SPPD <br> (MENUNGGU)</h4>
                                <h2 align=center class="font-weight-bold text-white">{{$countSppdMenunggu}}</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success p-2 rounded">
                                <h4 align=center class="text-white">SPPD <br> (DI SETUJUI)</h4>
                                <h2 align=center class="font-weight-bold text-white">{{$countSppdDiSetujui}}</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-danger p-2 rounded">
                                <h4 align=center class="text-white">SPPD <br> (DI TOLAK)</h4>
                                <h2 align=center class="font-weight-bold text-white">{{$countSppdDiTolak}}</h2>
                            </div>
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