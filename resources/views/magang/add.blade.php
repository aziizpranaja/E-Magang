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
						<li><a href="/magang/add" class="active"><i class="lnr lnr-file-add"></i> <span>Magang</span></a></li>
						<li><a href="/laporan" class=""><i class="lnr lnr-license"></i> <span>Laporan</span></a></li>
						<li><a href="/tampil" class=""><i class="lnr lnr-tablet"></i> <span>Nilai</span></a></li>
						@endif
						@if(auth()->user()->level=='pembimbing')
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Penilaian</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Mahasiswa</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Absensi Mahasiswa</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Approve/Cancel</span></a></li>
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
        <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                <h1>Input Magang</h1>
                @if (session('status'))
                <div class=" alert alert-success">

                    {{ session ('status')}}

                </div>
                @endif
                <form action="/magang/add" method="post" > 
                    @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{auth()->user()->name}}" disable readonly>
                            @error('nama')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                            </div>
                                @enderror
                        </div><br>
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                            <select class="form-control" id="nama_perusahaan" name="nama_perusahaan">
								@foreach($Users as $User)
									<option value="{{$User->name}}">{{$User->name}}</option>
								@endforeach
							</select>
                            @error('nama_perusahaan')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                            </div>
                                @enderror
                        </div><br>
                        <div class="mb-3">
                            <label for="lokasi_magang" class="form-label">Lokasi Magang</label>
                            <input type="text" class="form-control  @error('lokasi_magang') is-invalid @enderror" id="lokasi_magang" placeholder="Masukkan Lokasi Magang" name="lokasi_magang"  value="{{ old('lokasi_magang')}}">
                            @error('lokasi_magang')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                            </div>
                                @enderror
                        </div><br>
                        <button type="submit" class="btn btn-primary">Tambah Data!</button>
		        </form>
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