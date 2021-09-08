@extends('tamplate')
@extends('navbar')
@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
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
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Absensi</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Lokasi Magang</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Laporan</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Jadwal</span></a></li>
						@endif
						@if(auth()->user()->level=='pembimbing')
						<li><a href="/penilaianpembimbing" class="active"><i class="lnr lnr-book"></i> <span>Penilaian</span></a></li>
						<li><a href="/rekaplaporan" class=""><i class="lnr lnr-file-empty"></i> <span>Laporan Mahasiswa</span></a></li>
						<li><a href="/filter-data" class=""><i class="lnr lnr-lighter"></i> <span>Absensi Mahasiswa</span></a></li>
						<li><a href="/approve" class=""><i class="lnr lnr-spell-check"></i> <span>Approve/Cancel</span></a></li>
						@endif
						@if(auth()->user()->level=='penguji')
						<li><a href="elements.html" class=""><i class="fas fa-book-open"></i> <span>Penilaian</span></a></li>
						@endif
						@if(auth()->user()->level=='industri')
						<li><a href="/penilaian" class="active"><i class="fas fa-book"></i> <span>Penilaian</span></a></li>
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
                                    <a href="/penilaianpembimbing" class="card-link">Kembali</a>
								</div>
							</div>
                            <div class="panel-body no-padding">
							<h3 class="page-title">Nilai</h3>
							@if (session('status'))
								<div class=" alert alert-success">

									{{ session ('status')}}

								</div>
							@endif
							@if (session('error'))
								<div class=" alert alert-danger">

									{{ session ('error')}}

								</div>
							@endif
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  								Tambah Nilai
							</button>
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
												<td>
													<a href="#" class="nilai" data-type="text" data-pk="{{$pembimbing->id}}" data-url="/api/detailpembimbing/{{$student->id}}/editnilai" data-title="Masukkan Nilai">{{$pembimbing->pivot->nilai}}</a>
												</td>
												<td>
													<a href="/detailpembimbing/{{$student->id}}/{{$pembimbing->id}}/deletenilai" class="btn btn-danger">Delete</a>
												</td>
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
		<footer>
		</footer>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="/detailpembimbing/{{$student->id}}/addnilai" method="post" > 
		@csrf
		<div class="form-group">
			<label for="pembimbing">Jenis Penilaian</label>
			<select class="form-control" id="pembimbing" name="pembimbing">
				@foreach($jenis as $pn)
					<option value="{{$pn->id}}">{{$pn->nama}}</option>
				@endforeach
			</select>
		</div>
		<div class="mb-3">
  				<label for="nilai" class="form-label">Nilai</label>
  				<input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" placeholder="Masukkan Nilai" name="nilai" value="{{ old('nilai')}}">
				  @error('nilai')
				  <div id="validationServerUsernameFeedback" class="invalid-feedback">
        				{{$message}}
      			  </div>
					@enderror
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambahkan!</button>
		</form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
$(document).ready(function() {
    $('.nilai').editable();
});
</script>
@stop
