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
									<li><a href="/presensi/masuk" class="">Absensi</a></li>
									<!--
									<li><a href="/presensi/keluar" class="">Presensi Keluar</a></li>
									-->
								</ul>
							</div>
						</li>
						<li><a href="/magang/add" class=""><i class="lnr lnr-file-add"></i> <span>Magang</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-license"></i> <span>Laporan</span></a></li>
						<li><a href="/tampil" class="active"><i class="lnr lnr-tablet"></i> <span>Nilai</span></a></li>
						@endif
						@if(auth()->user()->level=='pembimbing')
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Penilaian</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Mahasiswa</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Absensi Mahasiswa</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Approve/Cancel</span></a></li>
						@endif
						@if(auth()->user()->level=='penguji')
						<li><a href="elements.html" class=""><i class="fas fa-book-open"></i> <span>Penilaian</span></a></li>
						@endif
						@if(auth()->user()->level=='industri')
						<li><a href="/penilaian" class="active"><i class="lnr lnr-book"></i> <span>Penilaian</span></a></li>
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
					
					<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Mahasiswa</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th>Name</th>
											</tr>
										</thead>
										<tbody>
										@foreach ( $students as $student )
											<tr>
												<th scope="row">{{ $loop->iteration }}</th>
												<td>{{ $student->nama}}</td>
												<td><a href="/tampildetail/{{$student->id}}"class="btn btn-primary">Tampil Nilai</a></td>
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-plus"></i>Jumlah Data:{{$student->count()}}</span></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						
					
					</div>
					<div class="row">
						
						
						
						
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			
		</footer>
	</div>
@endsection
