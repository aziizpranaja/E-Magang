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
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Absensi</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Lokasi Magang</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Laporan</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Jadwal</span></a></li>
						@endif
						@if(auth()->user()->level=='pembimbing')
						<li><a href="/penilaianpembimbing" class=""><i class="lnr lnr-book"></i> <span>Penilaian</span></a></li>
						<li><a href="/rekaplaporan" class=""><i class="lnr lnr-file-empty"></i> <span>Laporan Mahasiswa</span></a></li>
						<li><a href="filter-data" class=""><i class="lnr lnr-lighter"></i> <span>Absensi Mahasiswa</span></a></li>
						<li><a href="/approve" class="active"><i class="lnr lnr-spell-check"></i> <span>Approve/Cancel</span></a></li>
						@endif
						@if(auth()->user()->level=='penguji')
						<li><a href="elements.html" class=""><i class="lnr lnr-book-open"></i> <span>Penilaian</span></a></li>
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
							<div class="panel" >
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
                                                <th>Approve</th>
												<th>Name</th>
                                                <th>Perusahaan</th>
                                                <th>Lokasi</th>
                                                <th>Status</th>
											</tr>
										</thead>
										<tbody>
										@foreach ( $approve as $ro )
											<tr>
												<th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    <a href="{{ url('approve/'.$ro->id)}}">
                                                        <i class="lnr lnr-checkmark-circle"></i>
                                                    </a>
                                                </td>
												<td>{{ $ro->nama}}</td>
                                                <td>{{ $ro->nama_perusahaan}}</td>
                                                <td>{{ $ro->lokasi_magang}}</td>
                                                @if($ro->status == 1)
                                                <td>
                                                    <label class="label label-warning">{{ $ro->statuss->nama}}</label>
                                                </td>
                                                @else
                                                <td>
                                                    <label class="label label-success">{{ $ro->statuss->nama}}</label>
                                                </td>
												@endif
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-plus"></i>Jumlah Data: {{$ro->count()}}</span></div>
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
