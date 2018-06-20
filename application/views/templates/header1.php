<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->

<style>


.lis {
    float: left;
    border-left:1px solid #bbb;
    margin-left: 10px;
    height: 45px;
}

.lis:last-child {
    border-right: none;
}

.lis a {
    display: block;
    color: white;
    text-align: center;
    padding: 13px 16px;
    text-decoration: none;
}
.lis a:hover:not(.active) {
    color: white;
     height: 44px;
    background-color: #222;
}
.list a:hover:not(.active) {
    background-color:#111;
    color: white;
    height: 44px;
}

.list{
    float:right;
    align-content: center;
    margin-right: 102px;
    height: 45px;
}




    </style>


</head>
<body>
<ul class=" sticky top-nav" style="margin-top: 20px;z-index: 500; background-color: #222; margin-bottom:0px;">
              <li class="list lis"> <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#Services">Services</a></li>
              <li class="list lis"><a class="nav-link font-clr" href="<?php echo base_url().'home';?>#Gallery">Gallery</a></li>
              <li class="list lis"><a class="nav-link font-clr" href="<?php echo base_url().'home';?>#Testinomials">Testinomials</a></li>
              <li class="list lis"> <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#AboutUs">About Us</a></li>
              <li class="list lis"> <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#contactUs">Contact Us</a></li>
</ul>
<!-- Navigation -->


</body>
</html>
