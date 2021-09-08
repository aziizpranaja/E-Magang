@extends('tamplate')
@extends('navbar')

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
									<li><a href="/presensi/masuk" class="">Presensi Masuk</a></li>
									<li><a href="/presensi/keluar" class="">Presensi Keluar</a></li>
								</ul>
							</div>
						</li>
						<li><a href="/magang/add" class=""><i class="lnr lnr-file-add"></i> <span>Magang</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-license"></i> <span>Laporan</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-tablet"></i> <span>Nilai</span></a></li>
                        <li><a href="filter-data" class=""><i class="lnr lnr-screen"></i> <span>Kehadiran</span></a></li>
						@endif
						@if(auth()->user()->level=='pembimbing')
						<li><a href="/penilaianpembimbing" class=""><i class="lnr lnr-book"></i></i> <span>Penilaian</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-file-empty"></i> <span>Laporan Mahasiswa</span></a></li>
						<li><a href="filter-data" class=""><i class="lnr lnr-lighter"></i> <span>Absensi Mahasiswa</span></a></li>
						<li><a href="/approve" class=""><i class="lnr lnr-spell-check"></i> <span>Approve/Cancel</span></a></li>
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
							<h3 class="panel-title">Rekap Presensi Peserta Magang</h3>
						</div>
						<div class="panel-body">
							
                              <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                            <div class="form-group">
                                <table class="table">
                                    <tr>
                                        <th>peserta</th>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                    </tr>
                                    @foreach ($presensi as $item)
                                    <tr>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->tgl }}</td>
                                        <td>{{ $item->jammasuk }}</td>
                                    </tr>
                                    @endforeach
                                </table>
								<a href="/filter-data" class="card-link">Kembali</a>
                            </div>
                        </div><!-- /.container-fluid -->

                    </div>
                </div>  
                            
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
	



