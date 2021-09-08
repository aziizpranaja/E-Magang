@extends('tamplate')
@extends('navbar')
@section('header')
<style>
#watch
{
    color: rgb(255, 150, 65);
    position: absolute;
    z-index: 1;
    height: 40px;
    width: 700px;
    overflow: show;
    margin: auto;
    top:0;
    left:0;
    right:0;
    bottom:0;
    font-size:10vw;
    -webkit-text-stroke:3px rgb(210, 65, 36);
    text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
    4px 4px 20px rgba(210, 45, 26, 0.4),
    4px 4px 30px rgba(210, 25, 16, 0.4),
    4px 4px 40px rgba(210, 15, 06, 0.4);
}
</style>
@stop
@section('konten')
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if(auth()->user()->level=='peserta')
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-lighter"></i> <span>Presensi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse" aria-expanded="false" style="height: 0px;">
								<ul class="nav">
									<li><a href="/presensi/masuk" class="">Absensi</a></li>
									<!--
									<li><a href="/presensi/keluar" class="">Presensi Keluar</a></li>
									-->
								</ul>
							</div>
						</li>
						<li><a href="/magang/add" class=""><i class="lnr lnr-file-add"></i> <span>Magang</span></a></li>
						<li><a href="/laporan" class=""><i class="lnr lnr-license"></i> <span>Laporan</span></a></li>
						<li><a href="/tampil" class=""><i class="lnr lnr-tablet"></i> <span>Nilai</span></a></li>
						@endif
						@if(auth()->user()->level=='pembimbing')
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Penilaian</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Mahasiswa</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Absensi Mahasiswa</span></a></li>
						<li><a href="/approve" class=""><i class="lnr lnr-alarm"></i> <span>Approve/Cancel</span></a></li>
						@endif
						@if(auth()->user()->level=='penguji')
						<li><a href="/penilaian" class=""><i class="lnr lnr-code"></i> <span>Penilaian</span></a></li>
						@endif
						@if(auth()->user()->level=='industri')
						<li><a href="/penilaian" class=""><i class="fas fa-book"></i> <span>Penilaian</span></a></li>
						@endif
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Halaman Presensi Keluar</h3>
						</div>
						<div class="panel-body">
							
                                <form action="{{route('ubah-presensi')}}" method="post">
                                    {{csrf_field() }}
                                    <div>
                                        <center>
                                        <label id="clock" style="font-size:100px; color:#659980; -webkit-text-stroke: 3px #02C39A;
                                            text-shadow: 4px 4px 10px #CDE481,
                                            4px 4px 20px rgba(210, 45, 26, 0.4),
                                            4px 4px 30px rgba(210, 25, 16, 0.4),
                                            4px 4px 40px rgba(210, 15, 06, 0.4);">
                                        </label>
                                        </center>
                                    </div>
                                    <div class="form-group">
                                        <center>
                                            <button type="submit" class="btn btn-primary">Klik Untuk Presensi Keluar</button>
                                        </center>
                                    </div>
                                </form>
                            
						</div>
					</div>
					<!-- END OVERVIEW -->
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
			</div>
		</footer>
	</div>
@endsection
	



