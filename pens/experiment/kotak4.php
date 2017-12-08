<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!--<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="http://masonry.desandro.com/jquery.masonry.min.js"></script>
		<style type="text/css">
			* { box-sizing: border-box; }

body { font-family: sans-serif; }

/* ---- grid-a ---- */

.grid-a {
  background: #EEE;
  max-width: 600px;
  counter-reset: grid-item;
}

/* clearfix */
.grid-a:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */

.grid-item {
  width: 160px;
  height: 120px;
  float: left;
  background: #D26;
  border: 2px solid #333;
  border-color: hsla(0, 0%, 0%, 0.5);
  border-radius: 5px;
}

.grid-item--width2 { width: 320px; }
.grid-item--width3 { width: 480px; }
.grid-item--width4 { width: 720px; }

.grid-item--height2 { height: 200px; }
.grid-item--height3 { height: 260px; }
.grid-item--height4 { height: 360px; }

.grid-item:before {
  counter-increment: grid-item;
  content: counter(grid-item);
  display: block;
  color: white;
  padding-top: 0.2em;
  text-align: center;
  font-size: 1.4rem;
}
		</style>
		<script type="text/javascript">
		$(document).ready(function($){
    		$('.grid-a').masonry({
			  itemSelector: '.grid-item',
			  columnWidth: 160,
			  horizontalOrder: true
			});
		});
		</script>
	</head>
	<body>
		<h1>Masonry - horizontalOrder</h1>

		<div class="grid-a">
		  <div class="grid-item grid-item--height2"></div>
		  <div class="grid-item grid-item--height3"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item grid-item--height2"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item grid-item--height3"></div>
		  <div class="grid-item grid-item--height2"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item grid-item--height2"></div>
		  <div class="grid-item grid-item--height3"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item grid-item--height2"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item grid-item--height2"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item grid-item--height2"></div>
		  <div class="grid-item"></div>
		  <div class="grid-item"></div>
		</div>

	</body>
</html>