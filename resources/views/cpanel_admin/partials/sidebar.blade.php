<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
      <div class="navbar-brand header-logo">
        <a href="#" class="b-brand">
          <div class="">
            <img src="{{env('APP_URL')}}/assets/images/logo-dinsos-brebes.png" width="30" height="30" alt="">
          </div>
          <span class="b-title">{{env("APP_NAME")}}</span>
        </a>
        <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
      </div>
      <div class="navbar-content scroll-div">
        <ul class="nav pcoded-inner-navbar">
          <li class="nav-item pcoded-menu-caption">
            <label>Navigation Menu</label>
          </li>
          <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
            <a href="{{route('cpanel_admin.dashboard')}}" class="nav-link "><span class="pcoded-micon"><i
                  class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
          </li>
          <li
            data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
            class="nav-item pcoded-hasmenu {{ Request::segment(1)=="sppd"?"active":"" }}">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                  class="feather icon-calendar"></i></span><span class="pcoded-mtext">
                  @if ((session("group")=="ADMIN"))
                    Input SPPD
                  @elseif((session("group")=="KEPALA DINAS"))
                    Verifikasi SPPD
                  @endif </span></a>
            <ul class="pcoded-submenu">
              <li class=""><a href="{{route('cpanel_admin.sppd.list',["perdin"=>"Dalam"])}}" class="">Perdin Dalam</a></li>
              <li class=""><a href="{{route('cpanel_admin.sppd.list',["perdin"=>"Luar"])}}" class="">Perdin Luar</a></li>
            </ul>
          </li>
          <li
            data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
            class="nav-item pcoded-hasmenu {{ Request::segment(1)=="rekap-sppd"?"active":"" }}">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                  class="feather icon-package"></i></span><span class="pcoded-mtext">Rekap SPPD</span></a>
            <ul class="pcoded-submenu">
              <li class=""><a href="{{route('cpanel_admin.rekap-sppd.filter','rekap-tahun')}}" class="">Rekap SPPD Per Tahun</a></li>
              <li class=""><a href="{{route('cpanel_admin.rekap-sppd.filter','rekap-bidang')}}" class="">Rekap SPPD Per Bidang</a></li>
            </ul>
          </li>
          @if (session("group")=="ADMIN")
          <li
            data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
            class="nav-item pcoded-hasmenu {{ Request::segment(1)=="master"?"active":"" }}">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                  class="feather icon-settings"></i></span><span class="pcoded-mtext">Master</span></a>
            <ul class="pcoded-submenu">
              <li class=""><a href="{{route('cpanel_admin.master.skpd.list')}}" class="">Daftar SKPD</a></li>
              <li class=""><a href="{{route('cpanel_admin.master.pns.list')}}" class="">Daftar PNS</a></li>
              <li class=""><a href="{{route('cpanel_admin.master.kendaraan.list')}}" class="">Daftar Kendaraan</a></li>
              <li class=""><a href="{{route('cpanel_admin.master.alamat-skpd.list')}}" class="">Alamat SKPD</a></li>
              <li class=""><a href="{{route('cpanel_admin.master.pejabat.list')}}" class="">Tambah Pejabat</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>