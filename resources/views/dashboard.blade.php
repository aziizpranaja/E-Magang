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
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
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
						<li><a href="/penilaianpembimbing" class=""><i class="lnr lnr-book"></i></i> <span>Penilaian</span></a></li>
						<li><a href="/rekaplaporan" class=""><i class="lnr lnr-file-empty"></i> <span>Laporan Mahasiswa</span></a></li>
						<li><a href="filter-data" class=""><i class="lnr lnr-lighter"></i> <span>Absensi Mahasiswa</span></a></li>
						<li><a href="/approve" class=""><i class="lnr lnr-spell-check"></i> <span>Approve/Cancel</span></a></li>
						@endif
						@if(auth()->user()->level=='penguji')
						<li><a href="/penilaianpenguji" class=""><i class="lnr lnr-book"></i> <span>Penilaian</span></a></li>
						@endif
						@if(auth()->user()->level=='industri')
						<li><a href="/penilaian" class=""><i class="lnr lnr-book"></i> <span>Penilaian</span></a></li>
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
							<h2 class="panel-title">Selamat Datang {{auth()->user()->name}} !</h2>
						 
							<h3>Penilaian Terhadap Web Kami</h3><br>
							@if (session('status'))
								<div class=" alert alert-success">

									{{ session ('status')}}

								</div>
							@endif
							<form action="/dashboard/rating" method="post">
							@csrf
							<fieldset class="form-group row">
								<h4 class="col-form-label col-sm-2 float-sm-left pt-0">Kepuasan</h4>
								<div class="col-sm-10">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="nilai" id="nilai" value="puas" checked>
									<label class="form-check-label" for="nilai">
										Puas
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="nilai" id="nilai" value="tidak puas">
									<label class="form-check-label" for="nilai">
										Tidak Puas
									</label>
								</div>
							</fieldset>
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" class="button" style="background:DeepSkyBlue; border-radius:4px; color:white; width:100px;">Rating Kami!</button>
								</div>
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
	



