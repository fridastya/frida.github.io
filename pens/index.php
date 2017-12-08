<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<title>Politeknik Elektronika Negeri Surabaya</title>
		<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
		<script src="jquery.js"></script>
        <script type="text/javascript" src="masonry.pkgd.min.js"></script>
		<script src="dist/semantic.min.js"></script>
		<style type="text/css">
			a {
				text-decoration: none;
				color: #fff;
			}

			* { box-sizing: border-box; }

			body { font-family: sans-serif; background: #f6f4f7;}

			/*
			 * MENU BAR
			 */
			#wrapper-main-bar a{
				color: #ffffff;
				padding: 14px;
				margin-right: 10px;
			}

			#wrapper-main-bar a:hover, #wrapper-main-bar a.active.item  {
				color: #000000;
				background-color: #e5cf04;
			}

			/*
			 * HEADLINE GRID
			 */
			.gridh {

			}

			.gridh:after, .gridh-widget:after {
			  content: '';
			  display: block;
			  clear: both;
			}

			.gridh-sizer, .gridh-item {
				width: 20%;
			}

			/* ---- grids-item ---- */

			.gridh-item{
				height: 100px;
				float: left;
				background: #fff;
			}

			.gridh-item-img {
                background-size: contain;
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
            }

			.gridh-item-img .title {
				position: absolute;
				bottom: 10px;
				left: 10px;
			}

			.head {
				width: 60%;
				height: 200px;
			}

			/*
			 * ITEM GRID
			 */
			.grids:after, .grids-widget:after {
			  content: '';
			  display: block;
			  clear: both;
			}

			/* ---- grids-item ---- */

			.grids-item, .grids-item-widget {
				width: 200px;
				height: auto;
				float: left;
				margin-bottom: 10px;
				background: #fff;
				border-radius: 7px;
			}

			.grids-item-widget {
				height: auto;
			}

			.grid-item-core {
				width: 100%;
			}

			.grids-item:hover, .grids-item-widget:hover {
				box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
			}

			.grid-item-img {
				border-radius: 7px 7px 0 0;
                background-size: contain;
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
            }

            .grid-item-img img {
				border-radius: 5px 5px 0 0;
				position: relative;
				visibility: hidden;
				width: 100%;
            }

            .grid-item-img .tag {
				position: absolute;
				top: 10px;
				left: 10px;
				background-color: #e5cf04;
				text-transform: uppercase;
				font-weight: bold;
				padding: 3px 6px;
				border-radius: 2px;
				font-size: 9px;
			}

			.grid-item-img .title {
				position: absolute;
				bottom: 10px;
				left: 10px;
			}

			.grids-item .description {
				position: relative;
				color: #000;
				padding: 5px 10px;
			}

			.grids-item .description p {
				font-size: 13px;
				font-weight: bold;
			}

			.grids-item .description .time {
				font-size: 12px;
				color: #222;
			}

			/*
			 * FOOTER
			 */
			div#footer-container {
				background-color: #151316;
				border-top: 5px solid #27497d;
				color: #fff;
			}

			footer .column .basic {
				padding: 25px 40px;
			}

			#footer-menu .header {
				color: #f1c805;
				font-weight: 300;
				padding: 10px 0;
			}

			#footer-menu ul {
				font-weight: 300;
				list-style: none;
				line-height: 1.5;
				padding-left: 0;
			}

			#footer-menu ul li a {
				font-size: 12px;
			}

			#footer-menu ul li a:hover {
				color: #fff;
				text-decoration: underline;
			}

			#footer-menu .divid {
				background-color: #f1c805;
				height: 2px;
				width: 50px;
			}

			#footer-menu .column, #footer-menu.ui.basic.segment {
				padding: 25px 10px;
			}

		</style>
	</head>
	<body>
		<div id="wrapper-contact-bar" style="background-color: #000;">
			<div class="ui stackable very relaxed center aligned grid container" style="background-color: #000; margin: 0;">
				<div class="row">
			    	<div class="twelve wide computer sixteen wide tablet sixteen wide mobile column">
			        	<div class="ui inverted borderless fitted menu" style="background-color: #000; margin: -14px;">
							<div class="right menu">
								<a class="ui item">
									<i class="facebook large icon"></i>
								</a>
								<a class="ui item">
									<i class="twitter large icon"></i>
								</a>
								<a class="ui item">
									<i class="youtube play large icon"></i>
								</a>					
							</div>
						</div>
			    	</div>
			    </div>
			</div>
		</div>
		<div class="ui stackable very relaxed center aligned grid container">
			<div class="row">
		    	<div class="twelve wide column">
		    		<div id="logoweb" style="padding: 10px 0;">
						<img src="img/logoweb.png" class="ui image" style="width: 29%;">
					</div>
		    	</div>
		    </div>
		</div>
		<div id="wrapper-main-bar" style="background-color: #284f92;">
			<div class="ui center aligned grid container" style="margin: 0;">
				<div class="computer tablet only row" style="padding: 10px;">
			    	<div class="twelve wide column">
			    		<div class="ui stackable text menu" style="margin: 0">
							<a class="active item">Home</a>
							<a class="item">Tentang PENS</a>
							<a class="item">Akademik</a>
							<a class="item">Penelitian</a>
							<a class="item">Penghargaan</a>
							<a class="item">Layanan</a>
							<a class="item">Informasi</a>
							<a class="item">FAQ</a>
							<!--<div class="item right menu">
							    <div class="ui icon input" id="caributton">
							    	<input type="text" placeholder="Search">
							    	<i class="search icon"></i>
							    </div>
							</div>-->
						</div>
			    	</div>
			    </div>

			    <div class="mobile only row">
			    	<div class="ui inverted navbar menu" style="margin-bottom: 0; border-radius: 0;">
	                    <div class="item">
	                        <img src="img/logoweb.png">
	                    </div>
	                    <a href="" class="brand item">Senat PENS</a>
	                    <div class="right menu open">
	                        <a href="" class="menu item">
	                            <i class="sidebar icon"></i>
	                        </a>
	                    </div>
	                </div>
	                <div class="ui vertical navbar menu">
	                    <a href="index.php" class="item">Home</a>
	                    <a href="profil.php" class="item">Profil</a>
	                    <a href="formpengaduan.php" class="item">Adukan</a>
	                    <a href="pengumuman.php" class="item">Pengumuman</a>
	                    <a href="agenda.php" class="item">Agenda</a>
	                    <a href="hasilkeputusan.php" class=" item">Hasil Keputusan</a>
	                    <a href="login.php" class="item">Login</a>
	                </div>
			    </div>
			</div>
		</div>
		<div id="" class="ui stackable center aligned grid container">
			<div class="computer only row" style="padding: 10px;">
				<div class="twelve wide column" style="text-align: left; padding-right: 0; min-height: 100px;">
					<div class="gridh">
						<div class="gridh-sizer"></div>
						<div class="gridh-item head" style="background-image: url(img/Awaiting.jpg);">
	                    	<h2 class="title">Lorem ipsum dolor sit amet</h2>
				/wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww		</div>
						<div class="gridh-item" style="background-image: url(img/Awaiting.jpg);">
	                    	<h2 class="title">Lorem ipsum dolor sit amet</h2>
						</div>
						<div class="gridh-item" style="background-image: url(img/Awaiting.jpg);">
	                    	<h2 class="title">Lorem ipsum dolor sit amet</h2>
						</div>
						<div class="gridh-item" style="background-image: url(img/Awaiting.jpg);">
	                    	<h2 class="title">Lorem ipsum dolor sit amet</h2>
						</div>
						<div class="gridh-item" style="background-image: url(img/Awaiting.jpg);">
	                    	<h2 class="title">Lorem ipsum dolor sit amet</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="tablet mobile only row" style="padding: 10px;">
				
				<h2 class="ui header">
					<img class="ui image" src="img/img1.jpg">
					<div class="content">
						Learn More
					</div>
				</h2>
				<h2 class="ui header">
					<img class="ui image" src="img/img1.jpg">
					<div class="content">
						Learn More
					</div>
				</h2>
				<h2 class="ui header">
					<img class="ui image" src="img/img1.jpg">
					<div class="content">
						Learn More
					</div>
				</h2>
			</div>
		</div>
		</div>
		<div class="ui stackable center aligned grid container">
			<div class="row">
		    	<div class="twelve wide column" style="text-align: left;">
					<h2 class="ui header">LATEST NEWS</h2>
				</div>
			</div>
				<div class="nine wide computer twelve wide tablet column" style="text-align: left; padding-right: 0; min-height: 100px;">
					<div class="grids">
						<div class="grids-item">
							<div class="grids-item-core">
								<div class="grid-item-img" style="background-image: url(img/Awaiting.jpg);">
	                            	<img src="img/Awaiting.jpg">
	                            	<div class="tag">kemahasiswaan</div>
	                            	<h2 class="title">Lorem ipsum dolor sit amet</h2>
	                            </div>
	                            <div class="description">
	                            	<p style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	                            	<span class="time"><i class="wait icon"></i> Senin, 17 Agustus</span>
	                            </div>
	                        </div>
						</div>
						<div class="grids-item">
							<div class="grids-item-core">
								<div class="grid-item-img" style="background-image: url(img/b.jpg);">
	                            	<img src="img/b.jpg">
	                            	<div class="tag">kemahasiswaan</div>
	                            	<h2 class="title">Lorem ipsum dolor sit amet</h2>
	                            </div>
	                            <div class="description">
	                            	<p style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	                            	<span class="time"><i class="wait icon"></i> Senin, 17 Agustus</span>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
				<div class="three wide computer twelve wide tablet column" style="padding-left: 0;">
					<div class="grids-widget">
						<div class="grids-item-widget">kjkajfkaf</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer-container">
			<div class="ui container">
				<footer class="ui grid">
					<div class="sixteen wide mobile eight wide tablet three wide computer column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								DEPARTEMEN
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="#">Teknik Elektro</a>
								</li>
								<li>
									<a href="#">Teknik Informatika dan Komputer</a>
								</li>
								<li>
									<a href="#">Teknik Mekanika dan Energi</a>
								</li>
								<li>
									<a href="#">Teknik Multimedia Kreatif</a>
								</li>
								<li>
									<a href="#">Pasca Sarjana</a>
								</li>
							</ul>
							<h3 class="header">
								PROGRAM STUDI
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="#">Teknik Elektronika</a>
								</li>
								<li>
									<a href="#">Teknik Telekomunikasi</a>
								</li>
								<li>
									<a href="#">Teknik Elektro Industri</a>
								</li>
								<li>
									<a href="#">Teknik Informatika</a>
								</li>
								<li>
									<a href="#">Teknik Mekatronika</a>
								</li>
								<li>
									<a href="#">Teknik Komputer</a>
								</li>
								<li>
									<a href="#">Teknologi Multimedia Broadcasting</a>
								</li>
								<li>
									<a href="#">Sistem Pembangkitan Energi</a>
								</li>
								<li>
									<a href="#">Teknologi Game</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="sixteen wide mobile eight wide tablet three wide computer column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								DOSEN
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://lecturer.pens.ac.id">Website Dosen</a>
								</li>
								<li>
									<a href="http://mail.pens.ac.id">Email Dosen</a>
								</li>
								<li>
									<a href="http://video.pens.ac.id">Modul Ajar Video</a>
								</li>
								<li>
									<a href="http://dosenjaga.pens.ac.id">Dosen Jaga</a>
								</li>
							</ul>
							<h3 class="header">
								MAHASISWA
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://web.student.pens.ac.id">Website Mahasiswa</a>
								</li>
								<li>
									<a href="http://mail.student.pens.ac.id">Email Mahasiswa</a>
								</li>
								<li>
									<a href="http://bem.pens.ac.id">Badan Eksekutif Mahasiswa</a>
								</li>
								<li>
									<a href="http://himaelka.pens.ac.id">Hima Elektronika</a>
								</li>
								<li>
									<a href="http://himatel.pens.ac.id">Hima Telkom</a>
								</li>
								<li>
									<a href="http://himaelin.pens.ac.id">Hima Elin</a>
								</li>
								<li>
									<a href="http://himit.pens.ac.id">Hima IT</a>
								</li>
								<li>
									<a href="http://himameka.pens.ac.id">Hima Mekatronika</a>
								</li>
								<li>
									<a href="">Hima Multimedia Broadcasting</a>
								</li>
								<li>
									<a href="http://hmce.pens.ac.id">Hima (Students' Union of) Computer Engineering</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="sixteen wide mobile eight wide tablet three wide computer column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								UNIT
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://mis.eepis-its.edu" target="blank_">EEPIS Information System</a>
								</li>
								<li>
									<a href="http://umm.pens.ac.id" target="blank_">Unit Manajemen Mutu</a>
								</li>
								<li>
									<a href="http://online.mis.pens.ac.id" target="blank_">Unit Perencanaan dan Pengembangan</a>
								</li>
								<li>
									<a href="http://online.pens.ac.id" target="blank_">Unit Suku Cadang </a>
								</li>
								<li>
									<a href="http://kemahasiswaan.pens.ac.id" target="blank_">Unit Kegiatan Mahasiswa</a>
								</li>
								<li>
									<a href="http://jas.pens.ac.id" target="blank_">Job Arrangement System</a>
								</li>
								<li>
									<a href="http://p3m.pens.ac.id" target="blank_">P3M</a>
								</li>
								<li>
									<a href="http://tc.pens.ac.id" target="blank_">Training dan Sertifikasi</a>
								</li>
								<li>
									<a href="http://tc.pens.ac.id" target="blank_">Kemitraan dan Bisnis</a>
								</li>
								<li>
									<a href="http://online.mis.eepis-its.edu" target="blank_">Perpustakaan</a>
								</li>
								<li>
									<a href="http://tefl.pens.ac.id" target="blank_">Pusat Bahasa</a>
								</li>
								<li>
									<a href="http://online.mis.pens.ac.id" target="blank_">Pengadaan Barang dan Jasa</a>
								</li>
								<li>
									<a href="http://noc.pens.ac.id" target="blank_">Jaringan Komputer</a>
								</li>
								<li>
									<a href="http://edp.pens.ac.id" target="blank_">EDP</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="sixteen wide mobile eight wide tablet three wide computer column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								INFORMASI
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://online.mis.pens.ac.id">Online MIS</a>
								</li>
								<li>
									<a href="http://komurindo.pens.ac.id">Tim Komurindo PENS</a>
								</li>
								<li>
									<a href="http://pmb.pens.ac.id">Penerimaan Mahasiswa Baru</a>
								</li>
								<li>
									<a href="http://ies.pens.ac.id">Industrial Electronics Seminar</a>
								</li>
								<li>
									<a href="http://repo.pens.ac.id">EEPIS Repository</a></li>
								<li>
									<a href="http://emitter.pens.ac.id">EMITTER Int. Journal of Eng. Tech.</a>
								</li>
								<li>
									<a href="http://peduliyatim.pens.ac.id">Peduli Yatim</a>
								</li>
								<li>
									<a href="/research">Tugas Akhir Mahasiswa</a>
								</li>
							</ul>
							<h3 class="header">
								LINK LUAR
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://www.politeknik.or.id">Website Politeknik Bersama</a>
								</li>
								<li>
									<a href="http://www.its.ac.id">Institut Teknologi Sepuluh Nopember</a>
								</li>
								<li>
									<a href="http://www.dikti.go.id">Dikti</a>
								</li>
								<li>
									<a href="http://garuda.dikti.go.id/">Garuda Dikti</a>
								</li>
								<li>
									<a href="http://www.kemdiknas.go.id/">Kemendiknas</a>
								</li>
								<li>
									<a href="http://bidikmisi.dikti.go.id">Bidikmisi Nasional</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="sixteen wide mobile sixteen wide tablet four wide computer column">
						<div id="footer-menu" class="ui basic segment">
							<h4>Politeknik Elektronika Negeri Surabaya</h4><br />
							Jl. Raya ITS - Kampus PENS Sukolilo<br />
							Surabaya 60111, Indonesia<br />
							Telp: 62 31 594 7280<br />
							Fax: 62 31 594 6114
						</div>
					</div>
				</footer>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function($){
				$('.grids').masonry({
				  itemSelector: '.grids-item',
				  columnWidth: 200,
				  gutter: 10
				});

				$('.gridh').masonry({
				  itemSelector: '.gridh-item',
				  columnWidth: '.gridh-sizer',
				  percentPosition: true
				});
			});
		</script>
	</body>
</html>