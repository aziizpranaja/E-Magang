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
        <div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">{{$student->nama}}</h3>
					<div class="row">
						<div class="col-md-8">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">{{ $student->nama}}</h3>
									<p class="panel-subtitle">{{ $student->nama_perusahaan}}</p>
								</div>
								<div class="panel-body">
									<h4>{{ $student->lokasi_perusahaan}}</h4>
                                    <a href="/tampil" class="card-link">Kembali</a>
								</div>
							</div>
                            <div class="panel-body no-padding">
							<h3 class="page-title">Nilai dari Industri</h3>
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th>Kode</th>
												<th>Penilaian</th>
												<th>Nilai</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($student->penilaian as $penilaian)
											<tr>
												<th scope="row">{{ $loop->iteration }}</th>
												<td>{{$penilaian->kode}}</td>
												<td>{{$penilaian->nama}}</td>
												<td>{{$penilaian->pivot->nilai}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									
								</div>
                                <div class="panel-body no-padding">
							<h3 class="page-title">Nilai dari Penguji</h3>
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th>Kode</th>
												<th>Penilaian</th>
												<th>Nilai</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($student->penguji as $penguji)
											<tr>
												<th scope="row">{{ $loop->iteration }}</th>
												<td>{{$penguji->kode}}</td>
												<td>{{$penguji->nama}}</td>
												<td>{{$penguji->pivot->nilai}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									
								</div>
                                <div class="panel-body no-padding">
							<h3 class="page-title">Nilai dari Pembimbing</h3>
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th>Kode</th>
												<th>Penilaian</th>
												<th>Nilai</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($student->pembimbing as $pembimbing)
											<tr>
												<th scope="row">{{ $loop->iteration }}</th>
												<td>{{$pembimbing->kode}}</td>
												<td>{{$pembimbing->nama}}</td>
												<td>{{$pembimbing->pivot->nilai}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>
                            
							</div>
                            
</div>
</div>
</div>
</div>
		<footer>
		</footer>
	</div>
@endsection

