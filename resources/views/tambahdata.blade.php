<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://kit.fontawesome.com/ff3a2a3758.js" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat+Subrayada|Ubuntu:400,500,700&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  font-family: 'Ubuntu', sans-serif;
  box-sizing: border-box;
  text-decoration: none;
}

body{
  background: #e8edf5;
  width: 100%;
  height: 100%;
}

.wrapper .top_navbar{
	width: 100%;
	height: 65px;
	display: flex;
	position: fixed;
	top: 0;
}

.wrapper .top_navbar .logo{
	width: 250px;
	height: 100%;
	background: #3421C0;
	border-bottom: 1px solid #22119d;
}

.wrapper .top_navbar .logo a{
	display: block;
    text-align: center;
    font-family: 'Montserrat Subrayada', sans-serif;
  	font-size: 20px;
  	color: #fff;
  	padding: 20px 0;
}

.wrapper .top_navbar .top_menu{
	width: calc(100% - 250px);
	height: 100%;
	background: #fff;
    padding: 0 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.wrapper .top_navbar .top_menu .home_link a{
	display: block;
    background: #3421C0;
    color: #fff;
    padding: 8px 15px;
    border-radius: 3px;
}

.wrapper .top_navbar .top_menu .home_link a:hover,
.wrapper .top_navbar .right_info .icon_wrap:hover {
    background: #5343c7;
}

.wrapper .top_navbar .right_info{
	display: flex;
}

.wrapper .top_navbar .right_info .icon_wrap{
	padding: 8px 15px;
    border-radius: 3px;
	background: #3421C0;
    color: #fff;
    margin: 0 5px;
    cursor: pointer;
}

.main_body .sidebar_menu{
	position: fixed;
  	top: 65px;
  	left: 0;
  	background: #3421C0;
  	width: 250px;
  	height: 100%;
  	transition: all 0.3s linear;
}

.main_body .sidebar_menu .inner__sidebar_menu{
	position: relative;
	padding-top: 60px;
}

.main_body .sidebar_menu ul li a{
  color: #7467d3;
  font-size: 18px;
  padding: 20px 35px;
  display: block;
  white-space: nowrap;
}

.main_body .sidebar_menu ul li a .icon{
  margin-right: 8px;
}

.main_body .sidebar_menu ul li a span{
  display: inline-block;
}

.main_body .sidebar_menu ul li a:hover{
  background: #5343c7;
  color: #fff;
}

.main_body .sidebar_menu ul li a.active{
  background: #22119d;
  color: #fff;
}

.main_body .sidebar_menu .hamburger{
  position: absolute;
  top: 5px;
  right: -25px;
  width: 50px;
  height: 50px;
  background: #e8edf5;
  border-radius: 50%;
  cursor: pointer;
}

.main_body .sidebar_menu .inner_hamburger,
.main_body .sidebar_menu .hamburger .arrow{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.main_body .sidebar_menu .inner_hamburger{
  width: 40px;
  border-radius: 50%;
  height: 40px;
  background: #3421C0;
}

.main_body .sidebar_menu .hamburger .arrow{
  color: #fff;
  font-size: 20px;
}

.main_body .sidebar_menu .hamburger  .fa-long-arrow-alt-right{
  display: none;
}

.main_body .container{
	width: calc(100% - 250px);
	margin-top: 65px;
	margin-left: 250px;
	padding: 25px 40px;
	transition: all 0.3s linear;
}

.main_body .container .item_wrap{
	display: flex;
	margin-bottom: 20px;
}

.main_body .container .item_wrap .item{
	background: #fff;
	border: 1px solid #e0e0e0;
	padding: 25px;
	font-size: 14px;
	line-height: 22px;
}

.main_body .container .item_wrap .item:first-child{
	margin-right: 20px;
}

/* after adding active class */
.wrapper.active .sidebar_menu{
  width: 100px;
}

.wrapper.active .hamburger .fa-long-arrow-alt-right{
  display: block;
}

.wrapper.active .hamburger .fa-long-arrow-alt-left{
  display: none;
}

.wrapper.active .sidebar_menu ul li a .list{
  display: none;
}

.wrapper.active .main_body .container{
  width: calc(100% - 100px);
  margin-left: 100px;
}
	</style>
</head>
<body>

<div class="wrapper">

	<div class="top_navbar">
		<div class="logo">
			<a href="/admin">E-Magang</a>
		</div>
		<div class="top_menu">
			<div class="home_link">
				<a href="#">
					<span class="icon"><i class="fas fa-home"></i></span>
					<span>Home</span>
				</a>
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="/admin" >
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">Dashboard</span>
		            </a>
		          </li>
		          <li>
		            <a href="/tambahdata" class="active">
		              <span class="icon"><i class="fas fa-plus"></i></span>
		              <span class="list">Tambah Data</span>
		            </a>
		          </li>
				  <li>
		            <a href="grafik" >
		              <span class="icon"><i class="fa fa-pie-chart"></i></span>
		              <span class="list">Grafik Kepuasan</span>
		            </a>
		          </li>
		          <li>
		            <a href="{{ route('logout') }}">
		              <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
		              <span class="list">Logout</span>
		            </a>
		          </li>
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	<div class="container">
		<form action="/admin" method="post" > 
		@csrf
			<div class="mb-3">
  				<label for="nama" class="form-label">Nama</label>
  				<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama')}}">
				  @error('nama')
				  <div id="validationServerUsernameFeedback" class="invalid-feedback">
        				{{$message}}
      			  </div>
					@enderror
			</div>
			<div class="mb-3">
  				<label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
				  <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" name="nama_perusahaan"  value="{{ old('nama_perusahaan')}}" >
				  @error('nama_perusahaan')
				  <div id="validationServerUsernameFeedback" class="invalid-feedback">
        				{{$message}}
      			  </div>
					@enderror
			</div>
			<div class="mb-3">
  				<label for="lokasi_magang" class="form-label">Lokasi Magang</label>
				  <input type="text" class="form-control  @error('lokasi_magang') is-invalid @enderror" id="lokasi_magang" placeholder="Masukkan Lokasi Magang" name="lokasi_magang"  value="{{ old('lokasi_magang')}}">
				  @error('lokasi_magang')
				  <div id="validationServerUsernameFeedback" class="invalid-feedback">
        				{{$message}}
      			  </div>
					@enderror
			</div>
			<button type="submit" class="btn btn-primary">Tambah Data!</button>
		</form>
	</div>
	</div>
</div>
	

</body>
</html>