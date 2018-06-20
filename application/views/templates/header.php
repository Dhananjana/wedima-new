<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/images/images/logo4.png';?>">
    <title>The Wedima</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php echo base_url().'assets/css/layout.css';?>" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />  
    <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto|Roboto+Slab" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</head>
<body>
<a href="javascript:" id="return-to-top" style="z-index: 1500"><b><i class="fa fa-angle-up custom" ></i></b></a>
<style>
    
.list1{
    float: left;
    border-left:1px solid #bbb;
    margin-left: 10px;
    height: 45px;
}


.list1:last-child {
    border-right: none;
}

.list1 a {
    display: block;
    color: white;
    text-align: center;
    padding: 13px 16px;
    text-decoration: none;
}
.list1 a:hover:not(.active) {
    color: white;
     height: 44px;
    background-color: #222;
}
</style>
<nav class="navbar navbar-expand-lg  fixed-top top-nav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url().'home';?>"><img src="<?php echo base_url().'assets/images/images/logo4.png';?>" style="height: 120px;"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto" >
                <li class="nav-item list1">
                    <a class="nav-link font-clr" href="<?php echo base_url().'home';?>" id="navbarDropdownPortfolio">Home</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item list1" >
                    <a href="<?php echo base_url() . 'Home/vendorview'; ?>" style="text-decoration: none">Vendors</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li class="nav-item list1">
                    <a class="nav-link font-clr" href="contact.html">Special Offers</a>
                </li>&nbsp;
                <?php
                if($this->session->userdata('logged')==1){
                    ?>
                    <?php
                    if($this->session->userdata('utype')=='customer') {
                        ?>

                        <li class="nav-item list1">
                            <a href="<?php echo base_url() . 'customer/bookmarksview'; ?>" style="text-decoration: none">Bookmarks</a>
                        </li>
                        <li class="nav-item list1">
                            <a href="<?php echo base_url() . 'customer/cartshow'; ?>" style="text-decoration: none"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Cart</a>
                        </li>

                        <?php
                    }
                    ?>
                    <?php
                }

                else{

                    ?>
                    <?php
                }
                ?>

                <?php
                if($this->session->userdata('logged')==1){
                    ?>
                    <?php
                    if($this->session->userdata('utype')=='vendor') {
                        ?>

                        <li class="nav-item list1">
                            <a href="<?php echo base_url() . 'vendor'; ?>" style="text-decoration: none">
                                <img src="<?php echo base_url() . 'assets/images/v1.jpg' ?>" alt="Avatar" class="avatar"
                                     style="vertical-align: middle;width: 25px;height: 25px;border-radius: 50%;">&nbsp;&nbsp;<?php
                                echo $this->session->userdata('name');
                                ?></a>
                        </li>

                        <?php
                    }
                        ?>
                    <li class="nav-item list1">
                        <a class="nav-link font-clr" href="<?php echo base_url().'login/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

                    </li>
                    <?php
                }

                else{

                    ?>
                    <li class="nav-item list1">
                        <a class="nav-link font-clr" href="<?php echo base_url() . 'login'; ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item list1">
                        <a class="nav-link font-clr" href="contact.html">Sign Up</a>
                    </li>
                    <?php
                }
                ?>



            </ul>

        </div>
    </div>

</nav>
