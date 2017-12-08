<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<title>Politeknik Elektronika Negeri Surabaya</title>
		<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
		<script src="jquery.js"></script>
		<script src="dist/semantic.min.js"></script>
		<style type="text/css">
			body {
				width: 100%;
				background-
			}
			.card {
			  background: #fff;
			  border-radius: 10px;
			  display: inline-block;
			  height: 190px;
			  margin: 0.5rem;
			  position: relative;
			  width: 190px;
			}

			.card-1 {
			  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
			}

			.card-1:hover {
			  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
			}

			@media only screen and (max-width: 767px){
				.card {
					margin: 1em;
				}
			}

			@media only screen and (min-width: 1023px){
				.card {
					margin: 2em;
				}
			}

			* { box-sizing: border-box; }

			body { font-family: sans-serif; }

			/* ---- grid ---- */

			.grid {
			  background: #EEE;
			}

			/* clearfix */
			.grid:after {
			  content: '';
			  display: block;
			  clear: both;
			}

			/* ---- grid-item ---- */

			.grid-sizer,
			.grid-item {
			  width: 20%;
			}

			.grid-item {
				height: 100px;
			  float: left;
			  background: #D26;
			  border: 2px solid #333;
			  border-color: hsla(0, 0%, 0%, 0.5);
			  border-radius: 5px;
			}

			.ya {
				width: 900px;
			}
			@media only screen and (max-width: 1024px) {
			    .grid {
			        max-width:75%;
			    }

			    .grid-item {
			    	height: 200px;
			    }
			}

			@media only screen and (max-width: 320px) {
			    .grid {
			        max-width:100%;
			    }

			    .grid-sizer,
				.grid-item {
				  width: 320px;
				}

				.grid-item {
					height: 320px;
				}
			}
		</style>
	</head>
	<body>
		<div id="wrapper-contact-bar" style="background-color: #000; position: relative;">
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
		<div style="background-color: #284f92;">
			<div class="ui stackable center aligned grid container" style="margin: 0;">
				<div class="row">
			    	<div class="twelve wide column">
			    		<div class="ui stackable text menu" style="margin: 0">
							<a class="item">Home</a>
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
			</div>
		</div>
		<div class="ui stackable center aligned grid container">
			<div class="row">
		    	<div class="twelve wide column" style="text-align: left;">
					<h2 class="ui header">LATEST NEWS</h2>
				</div>
			</div>
			<div class="row">
				<div class="nine wide column" style="text-align: left; padding-right: 0; padding-left: 32px;">
					<div class="ya">
						<div class="grid">
							<div class="grid-sizer"></div>
							<div class="grid-item"></div>
							<div class="grid-item"></div>
							<div class="grid-item"></div>
							<div class="grid-item"></div>
							<div class="grid-item"></div>
						</div>
					</div>
				</div>
				<div class="three wide column" style="padding-left: 0;">
					<div class="ui one column doubling stackable grid container">
						<div class="column">
							<div class="card card-1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>