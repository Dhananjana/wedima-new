<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */
        /*.carousel-inner img {*/
            /*width: 100%;*/
            /*height: 100%;*/
        /*}*/
        .carousel-item {
            height: 75vh;
            min-height: 490px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .portfolio-item {
            margin-bottom: 30px;
        }

        .gallery-grid {
            margin-top: 2em;
        }
        .wpf-demo-4 {
            background-color: #f44336;
            display: block;
            overflow: hidden;
            position: relative;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            width: 100%;
            height: 240px;
        }
        .wpf-demo-4 a.item-hover {
            display: block;
        }
        .wpf-demo-4 img {
            height: 100%;
            width: 100%;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            -moz-transform: scale(1.08);
            -o-transform: scale(1.08);
            -ms-transform: scale(1.08);
            -webkit-transform: scale(1.08);
            transform: scale(1.08);
        }
        .wpf-demo-4:hover img {
            height: 100%;
            margin-left: -42px;
            margin-top: -15px;
            -webkit-transform: translateY(-10%) rotate(-42deg) scale(1.5);
            -moz-transform: translateY(-10%) rotate(-42deg) scale(1.5);
            -o-transform: translateY(-10%) rotate(-42deg) scale(1.5);
            -moz-transform: translateY(-10%) rotate(-42deg) scale(1.5);
            transform: translateY(-10%) rotate(-42deg) scale(1.5);
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            transition: all 0.5s;
            width: 134%;
        }
        .wpf-demo-4:hover .view-caption {
            text-align: right;
            -webkit-transform: translateY(-111%);
            -moz-transform: translateY(-111%);
            -o-transform: translateY(-111%);
            -moz-transform: translateY(-111%);
            transform: translateY(-111%);
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            transition: all 0.5s;
            bottom: -17px;
        }
        .wpf-demo-4 .view-caption {
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            text-align: right;
            position: absolute;
            right: 0;
            bottom: -35px;
        }
        .wpf-demo-4 .view-caption p {
            color: #fff;
            font-size: 1em;
            padding-right: 7px;
        }
        /*-- jzBox-lightbox --*/
        #jzBox {
            top: 0;
            left: 0;
            z-index: 10000;
            position: fixed;
            background-color: rgba(30, 30, 30, 0.9);
            margin: 0 !important;
            text-align: center;
            width: 100%;
            height: 100%;
            display: none;
            color: #fff;
        }
        #jzBoxTargetImg {
            margin:6% 0 1% 0;
            max-width: 96%;
            max-height: 73%;
            cursor: pointer;
        }
        #jzBoxCounter {
            margin-bottom: 1%;
            font-size: 12px;
        }

        #jzBox i:hover {
            cursor: pointer;
            color: #2aabd2;
        }

        #jzBoxBottom { max-height: 22%; }

        #jzBoxNextBig, #jzBoxPrevBig {
            cursor: pointer;
            top: 0;
            left: 0;
            width: 35%;
            position: fixed;
            z-index: 10001;
        }

        #jzBoxNextBig { left: 65%; }

        .close {
            float: none;
            opacity:1;
            background: url(../../assets/images/images/close.png) no-repeat 0px 0px;
            display: block;
            width: 32px;
            height: 32px;
            margin:1em auto 0;
        }
        .arrow-left{
            background: url(../../assets/images/images/left.png) no-repeat 0px 0px;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 0 auto;
            margin-right: 2em;
        }
        .arrow-right{
            background: url(../../assets/images/images/right.png) no-repeat 0px 0px;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 0 auto;
        }
        .item-type-move .item-hover {
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
            text-decoration: none;
            background: #FF69B4;
            display:block;
        }
    </style>
</head>
<body>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

        <!-- Slide 1 - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('<?php echo base_url().'assets/images/images/v.jpg';?>')">
        </div>
        <!-- Slide 2 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/ring.jpg';?>')">
        </div>
        <!-- Slide 3 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/5.jpg';?>')">
        </div>
        <!-- Slide 4 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/g3.jpg';?>')">
        </div>
        <!-- Slide 5 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/7.jpg';?>')">
        </div>
        <!-- Slide 6 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/e.jpg';?>')">
        </div>
        <!-- Slide 7 - Set the background image for this slide in the line below -->
        <div class="carousel-item " style="background-image: url('<?php echo base_url().'assets/images/images/bride.jpg';?>')">
        </div>
        <!-- Slide 8 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/h.jpg';?>')">
        </div>
        <!-- Slide 9 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/b.jpg';?>')">
        </div>
        <!-- Slide 10 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/f.jpg';?>')">
        </div>
        <!-- Slide 11 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/pre1.jpg';?>')">
        </div>
        <!-- Slide 12 - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo base_url().'assets/images/images/cake2.jpg';?>')">
        </div>


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</body>
</html>
