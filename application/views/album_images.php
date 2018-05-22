 <style>
    .gallery-grid {
        margin-top: 2em;
        float: left;
        width: 50%;
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
        height: 220px;
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
        margin-top: -7px;
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
        background: url(<?php echo base_url().'assets/images/close.png';?>) no-repeat 0px 0px;
        display: block;
        width: 32px;
        height: 32px;
        margin:1em auto 0;
    }
    .arrow-left{
        background: url(<?php echo base_url().'assets/images/left.png';?>) no-repeat 0px 0px;
        display: inline-block;
        width: 50px;
        height: 50px;
        margin: 0 auto;
        margin-right: 2em;
    }
    .arrow-right{
        background: url(<?php echo base_url().'assets/images/right.png';?>) no-repeat 0px 0px;
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

    .row2{border-bottom:1px solid;}
    .row2{color:#888888; background-color:#FFFFFF; border-color:#F3F3F3;}
    #breadcrumb a{color:inherit; background-color:inherit;}
    #breadcrumb li:last-child a{color:#11b3e0;}
    #breadcrumb{
        line-height:normal;
    }
    #breadcrumb li a::after, .sidebar nav a::after{position:absolute; font-family:"FontAwesome"; font-size:10px; line-height:10px;}
    #breadcrumb{padding:15px 0;}
    #breadcrumb ul{margin:0; padding:0; list-style:none; text-transform:uppercase;}
    #breadcrumb li{display:inline-block; margin:0 6px 0 0; padding:0;}
    #breadcrumb li a{display:block; position:relative; margin:0; padding:0 12px 0 0; font-size:12px;}
    #breadcrumb li a::after{top:3px; right:0; content:"\f101";}
    #breadcrumb li:last-child a{margin:0; padding:0;}
    #breadcrumb li:last-child a::after{display:none;}
</style>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<br><br>
 <div class="wrapper row2">
     <div id="breadcrumb" class="clear">
         <ul style="margin-left: 15%">
             <!--            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

             <li><a href="<?php echo base_url().'home'?>">Home</a></li>
             <li>Albums</li>
             <li><a href=""><?php echo $album_name;?></a></li>

         </ul>
     </div>
 </div>
 <br>
<div class="gallery">
<div class="container">
    <div id="jzBox" class="jzBox">
        <div id="jzBoxNextBig"></div>
        <div id="jzBoxPrevBig"></div>
        <img src="#" id="jzBoxTargetImg" alt=""/>
        <div id="jzBoxBottom">
            <div id="jzBoxTitle"></div>
            <div id="jzBoxMoreItems">
                <div id="jzBoxCounter"></div>
                <i class="arrow-left" id="jzBoxPrev"></i>
                <i class="arrow-right" id="jzBoxNext"></i>
            </div>
            <i class="close" id="jzBoxClose"></i>
        </div>
    </div>
    <h3 style="margin-left: 10%"><?php echo $album_name;?></h3>
    <div class="gallery-grids-row">
        <?php
        if( !empty($images) ) {
        foreach ($images as $image) {
        ?>

        <div class="col-md-4 gallery-grid">
            <div class="wpf-demo-4">
                <a href="<?php echo base_url().'albums/'.$album_name.'/'.$image->image_name;?>" class="jzBoxLink item-hover" title="Events Venue">
                    <img src="<?php echo base_url().'albums/'.$album_name.'/'.$image->image_name;?>" alt=" " class="img-responsive" />
                    <div class="view-caption">
                        <p>Full View</p>
                    </div>
                </a>
            </div>
        </div>
            <?php
        }}
        ?>
        <div class="clearfix"> </div>
    </div>
    <script src="<?php echo base_url().'assets/js/jzBox.js';?>"></script>
</div>
</div>
<br>

