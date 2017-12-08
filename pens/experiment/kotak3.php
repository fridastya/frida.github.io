<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="masonry.pkgd.min.js"></script>
        <style type="text/css">
            * { box-sizing: border-box; }

            body { font-family: sans-serif; }

            /* ---- grid-b ---- */

            .grid-b {
                max-width: 100%;
                counter-reset: grid-item;
            }

            /* clearfix */
            .grid-b:after {
                content: '';
                display: block;
                clear: both;
            }

            /* ---- grid-item ---- */

            .grid-item {
                width: 30%;
                height: auto;
                float: left;
                border-radius: 5px;
                margin-left: 2.5%; 
                margin-top: 2.5%;
                background: #ffffff;

                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            }

            .widget {
                width: 100%;
                height: auto;
                float: left;
                border-radius: 5px;
                margin-left: 2.5%; 
                margin-top: 2.5%;
                background: #ffffff;

                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            }

            .grid-item:hover, .widget:hover {
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            }

            .grid-item-img {
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
            .grid-item:before {
                counter-increment: grid-item;
                content: counter(grid-item);
                display: block;
                color: white;
                text-align: center;
                font-size: 1.4rem;
                height: 0;
                width: 0;
            }
        </style>
        <script type="text/javascript">
        </script>
    </head>
    <body>
        <div class="ui stackable center aligned grid container">
            <div class="row">
                <div class="twelve wide column" style="text-align: left;">
                    <h2 class="ui header">LATEST NEWS</h2>
                </div>
            </div>
            <div class="row">
                <div class="nine wide computer sixteen wide mobile column grid-b">
                    <div class="grid-item">
                        <div class="grid-item-img" style="background-image: url(img/4.jpg);">
                            <img src="img/4.jpg">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item-img" style="background-image: url(img/a.jpg);">
                            <img src="img/a.jpg">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item-img" style="background-image: url(img/4.jpg);">
                            <img src="img/pp.jpg">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item-img">
                            <img src="img/Awaiting.jpg">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item-img">
                            <img src="img/4.jpg">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item-img">
                            <img src="img/a.jpg">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item-img">
                            <img src="img/pp.jpg">
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item-img">
                            <img src="img/Awaiting.jpg">
                        </div>
                    </div>
                </div>
                <div class="three wide computer sixteen wide mobile column">
                    <div class="widget">
                        <div class="grid-item-img">
                            <img src="img/Awaiting.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>