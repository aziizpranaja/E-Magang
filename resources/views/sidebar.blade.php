<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if(auth()->user()->level=='peserta')
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Absensi</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Lokasi Magang</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Laporan</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Jadwal</span></a></li>
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
						<li><a href="/penilaian" class=""><i class="lnr lnr-code"></i> <span>Penilaian</span></a></li>
						@endif
					</ul>
				</nav>
		</div>
</div>
		<!-- END LEFT SIDEBAR -->