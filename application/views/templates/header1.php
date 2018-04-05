<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->

<style>


li {
    float: left;
    border-left:1px solid #bbb;
    margin-left: 10px;
}


li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.list a:hover:not(.active) {
    background-color:#111;
    color: white;
    height: 50px;
}
li a:hover:not(.active) {
    color: white;
     height: 41px;
    background-color: #222;
}
.list{
    float:right;
    align-content: center;
    margin-right: 102px;
    height: 50px;
}


        /*.sticky{*/
            /*position: sticky;*/
            /*top: 44px;*/
            /*!*z-index:1002;*!*/

        /*}*/
        .ui-menu {  
                list-style:none;  
                padding: 2px;  
                margin: 0;  
                display:block;  
            }  
            .ui-menu .ui-menu {  
                margin-top: -3px;  
            }  
            .ui-menu .ui-menu-item {  
                margin:0;  
                padding: 0;  
                zoom: 1;  
                float: left;  
                clear: left;  
                width: 100%;  
                font-size:80%;  
            }  
            .ui-menu .ui-menu-item a {  
                text-decoration:none;  
                display:block;  
                padding:.2em .4em;  
                line-height:1.5;  
                zoom:1;  
            }  
            .ui-menu .ui-menu-item a.ui-state-hover,  
            .ui-menu .ui-menu-item a.ui-state-active {  
                font-weight: normal;  
                margin: -1px;  
            } 
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
<ul class="fixed-top sticky top-nav" style="margin-top: 43px;z-index: 500; background-color: #222;">
              <li class="list"> <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#Services">Services</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="list"><a class="nav-link font-clr" href="<?php echo base_url().'home';?>#Gallery">Gallery</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="list"><a class="nav-link font-clr" href="<?php echo base_url().'home';?>#Testinomials">Testinomials</a></li>
              <li class="list"> <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#AboutUs">About Us</a></li>
              <li class="list"> <a class="nav-link font-clr" href="<?php echo base_url().'home';?>#contactUs">Contact Us</a></li>
</ul>
<!-- Navigation -->


</body>
</html>