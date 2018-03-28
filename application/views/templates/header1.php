<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <style>
        /*.sticky{*/
            /*position: sticky;*/
            /*top: 44px;*/
            /*!*z-index:1002;*!*/

        /*}*/
        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 44px;
            z-index:1002;

        }
        .font-clr{
            color: #f5f5f5;
        }
        .top1{
            background-color:#454545;
            height: 31px;
            margin-top: -1px;
            box-shadow: 0px 5px 10px #333;

        }
        .ul1 {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #454545;
        }

        .li1 {
            float: left;
            border-left:1px solid #bbb;
            margin-top: -5px;
        }

        .li1:last-child {
            border-right: none;
        }
        li1 a:hover {
            background-color: #333;
            height:38px;
        }
        li1 a {
            display: block;
            color: white;
            text-align: center;
            font-size:15px;
        }

    </style>

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg  sticky top top1" >
    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto ul1" >

                <li1 class="nav-item li1" >
                    <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#section5">Services</a>
                </li1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item li1">
                    <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#section1">Gallery</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li class="nav-item li1">
                    <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#section3">Testinomials</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li class="nav-item li1">
                    <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#AboutUs">About Us</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li class="nav-item li1">
                    <a class="nav-link font-clr" href="<?php echo base_url().'home';?>">Contact Us</a>
                </li>

            </ul>

        </div>
    </div>

</nav>

</body>
</html>