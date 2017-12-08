<!DOCTYPE html>
<html>
	<head>
		<title>FIX</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="masonry.pkgd.min.js"></script>
		<style type="text/css">
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
		<script type="text/javascript">
            $(document).ready(function($){
                $('.grid').masonry({
				  itemSelector: '.grid-item',
				  columnWidth: '.grid-sizer',
				  percentPosition: true,
				  horizontalOrder: true
				});

            });
        </script>
	</head>
	<body>
		<div class="ui stackable center aligned grid container">
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
	</body>
</html>