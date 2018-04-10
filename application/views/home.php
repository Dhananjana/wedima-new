
<?=$nav1?>
<br><br>
<?=$sli?>
<style type="text/css">
.space{
       height: 64px;
    }
    .rounded1{
        height:90%;
        max-height: 175px;
        width:100%;
    }
    .animate {
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    @-webkit-keyframes rollIn {
      from {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
      }

      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }
    .ac{
         -webkit-animation-name: rollIn; /* Safari 4.0 - 8.0 */
        -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
        -webkit-animation-delay: 2s; /* Safari 4.0 - 8.0 */
        -webkit-animation: rollIn 5s infinite; /* Safari 4.0 - 8.0 */
        animation-name: rollIn;
        animation-duration: 4s;
        animation-delay: 2s;
    }

    .rollIn {
      -webkit-animation-name: rollIn;
      animation-name: rollIn;
    }
        .title-arch {
            text-align: center;
            margin: 50px 0;
            font-size: 22px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }



    .project {
        width: 100%;
        height: 500px;
        background-image: url(<?php echo base_url().'assets/images/images/hotel.jpg';?>);
        background-size: cover;
        background-position: center;
        padding: 0 !important;
        float:left;
    }

/*.actions {*/
    /*display: table-cell;*/
    /*position: absolute;*/
    /*bottom: 0px;*/
    /*top: 50%;*/
    /*left:0;*/
    /*right:0;*/
    /*z-index: 1;*/
    /*opacity: 500;*/
    /*background-color: rgba(29,29,29,.5);*/
    /*-ms-transition: all .2s ease-out;*/
    /*-webkit-transition: all .2s ease-out;*/
    /*-moz-transition: all .2s ease-out;*/
    /*-o-transition: all .2s ease-out;*/
    /*transition: all .2s ease-out;*/
    /*color:#fff;*/
    /*font-size:2em;*/
    /*padding:2%;*/
    /*font-weight:400;*/
    /*text-align:center;*/
    /*vertical-align: middle;*/
/*}*/


    .project-2 {
       background-image: url(<?php echo base_url().'assets/images/images/bride1.jpg';?>);
    }


    .project-4 {
            background-image: url(<?php echo base_url().'assets/images/images/saloon.jpg';?>);

    }
    .project-5 {
            background-image: url(<?php echo base_url().'assets/images/images/photo.jpg';?>);

    }
     .project-6 {
       background-image: url(<?php echo base_url().'assets/images/images/cars.jpg';?>);
    }

    .project-7 {
             background-image: url(<?php echo base_url().'assets/images/images/cake.jpg';?>);

    }
    .project-8 {
             background-image: url(<?php echo base_url().'assets/images/images/jwel.jpg';?>);

    }

    .project-9 {
            background-image: url(<?php echo base_url().'assets/images/images/cards.jpg';?>);

    }
     .project-10 {
            background-image: url(<?php echo base_url().'assets/images/images/flower.jpg';?>);

    }
    .project-11 {
            background-image: url(<?php echo base_url().'assets/images/images/ashtaka.jpg';?>);

    }
    .project-12 {
            background-image: url(<?php echo base_url().'assets/images/images/dj.jpg';?>);

    }

    .project-15 {
       background-image: url(<?php echo base_url().'assets/images/images/groom.jpg';?>);
    }


    .project-hover {
        width: 100%;
        height: 100%;
        color: #000;
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        background-color: rgba(255, 180,00, 0.7);
        padding: 40% 30px !important;
    }

    .project-hover hr {
        height: 30px;
        width: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        background-color: rgba(255, 255, 255, 1);
        border: 0;
    }

    .project-hover a {
        color: rgba(255, 255, 255, 1);
        padding: 2px 22px;
        line-height: 40px;
        border: 2px solid rgba(255, 255, 255, 1);
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .project-hover a:hover {
        border-color: rgba(51, 51, 51, 1);
        color: rgba(51, 51, 51, 1);
        background-color: #FFF;
    }

    .project:hover .project-hover {
        opacity: 1;
    }

    .project:hover .project-hover hr {
        width: 100%;
        height: 5px;
    }

    #navbar {
  overflow: hidden;
  background-color: #333;
  z-index:500;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky1 {
  position: fixed;
  top:83px;
  width: 100%;
}

</style>


<form action="<?php base_url();?>home/finalResult" method="post">

    <div id="navbar">
        <div class=" border-secondary">
            <div style="background-color:#333;border-color:#333;border-width: 5px;height: 55px;">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div  style="padding-top: 10px;">
                            <div class="form-group">
                                <?php

                                echo form_input('vendorName','','id="id",onkeyup = "enab();"');
                                ?>
                                <ul>
                                    <div class="well" id="result"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="padding-top: 10px">
                            <div class="form-group" >
                                <select class="form-control" name="loc" id="locate">
                                    <option selected value="Island_wide">Select Area</option>
                                    <option value='Island_wide' >Island wide</option>
                                    <option value='Ampara'>Ampara</option>
                                    <option value='Anuradhapura'  >Anuradhapura</option>
                                    <option value='Badulla'  >Badulla</option>
                                    <option value='Batticaloa'  >Batticaloa</option>
                                    <option value='Colombo'>Colombo</option>
                                    <option value='Galle'  >Galle</option>
                                    <option value='Gampaha'  >Gampaha</option>
                                    <option value='Hambantota'  >Hambantota</option>
                                    <option value='Jaffna'  >Jaffna</option>
                                    <option value='Kalutara'  >Kalutara</option>
                                    <option value='Kandy'  >Kandy</option>
                                    <option value='Kegalle'  >Kegalle</option>
                                    <option value='Kilinochchi'  >Kilinochchi</option>
                                    <option value='Kurunegala'  >Kurunegala</option>
                                    <option value='Mannar'  >Mannar</option>
                                    <option value='Matale'  >Matale</option>
                                    <option value='Matara'  >Matara</option>
                                    <option value='Moneragala'  >Moneragala</option>
                                    <option value='Mullativu'  >Mullativu</option>
                                    <option value='Nuwara_Eliya'  >Nuwara Eliya</option>
                                    <option value='Polonnaruwa'  >Polonnaruwa</option>
                                    <option value='Puttalam'  >Puttalam</option>
                                    <option value='Rathnapura'  >Rathnapura</option>
                                    <option value='Trincomalee'  >Trincomalee</option>
                                    <option value='Vavuniya'  >Vavuniya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div  style="padding-top: 10px">
                            <div class="form-group" >
                                <select class="form-control" name="cat"  id="categ">
                                    <option value="select">Select Category</option>
                                    <option value="locations">Locations</option>
                                    <option value="photographers">Photographers</option>
                                    <option value="transporters">Transporters</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="bridalWear">Bridal Wear</option>
                                    <option value="stationary">Stationary</option>
                                    <option value="beautician">Beautician</option>
                                    <option value="weddingCake">Wedding Cake</option>
                                    <option value="jewellary">Jewellary</option>
                                    <option value="flowerWorks">Flower Works</option>
                                    <option value="traditionalTeams">Traditional Teams</option>
                                    <option value="groomsWear">Grooms Wear</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div  style="padding-top: 10px">
                        <button type="submit" id="sub1" class="btn btn-outline-info btnw"> Search </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<div class="container-fluid">
<div class="title-arch">The Wedima<p> “If you can’t stop dreaming about it, don’t stop planing  for it.”</p></div>
    
</div>

<div id="Services" class="container-fluid" style="z-index:499;">
    <div class="">
        <div class="space"></div>
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Services
        </h1>


<!--         Project One-->
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated animated4 fadeInLeft">
<!--        <span class="actions">-->
<!--                        <span class="project-details">Mélamine Tafisa</span>-->
<!--        </span>-->
        <div class="project-hover">
            <h2>Locations</h2>
            <hr />
            <h6>1.Locations <br>2.Hotels <br>3.Honeymoon <br>4.Destinations</h6>
            <a href="<?php echo base_url().'home/vendorList/1';?>">See More</a>
        </div>

    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-2 wow animated animated3 fadeInLeft">
        <div class="project-hover">
            <h2>Bridal Boutique</h2>
            <hr />
            <h6>1.Bridal Dress<br>2.bridesmaid Dress<br>2.Dress Designers </h6>
            <a href="<?php echo base_url().'home/vendorList/2';?>">See More</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-15 wow animated fadeInLeft">
        <div class="project-hover">
            <h2>Groom Boutique</h2>

            <hr />
            <h6>1.Grooms Dress<br>2.groomsmaid Dress<br>2.Dress Designers </h6>
            <a href="<?php echo base_url().'home/vendorList/3';?>">See More</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-4 wow animated fadeInLeft">
        <div class="project-hover">
            <h2>Beauticiens</h2>

            <hr />
            <h6>1.Bridal <br>2.Groom<br>3.Hair & Beauty care</h6>
            <a href="<?php echo base_url().'home/vendorList/4';?>">See More</a>
        </div>
    </div>

    <br>

    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-8 wow animated animated2 fadeInLeft">
        <div class="project-hover">
            <h2>Jwellaries</h2>
            <hr />
            <h6>1.Earings <br>2.Necklace<br>3.Bangle<br>4.Bracelet<br>5.Wedding & Engagement Rings</h6>
            <a href="<?php echo base_url().'home/vendorList/5';?>">See More</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-5 wow animated animated5 fadeInLeft">
        <div class="project-hover">
        <h2>Photographers</h2>

            <hr />
            <h6>1.Wedding photography<br>2.Pre-Wedding/Post-wedding Shoots<br>3.Videography</h6>
            <a href="<?php echo base_url().'home/vendorList/6';?>">See More</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-6 wow animated animated3 fadeInLeft">
        <div class="project-hover">
                <h2>Cars</h2>
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="<?php echo base_url().'home/vendorList/7';?>">See More</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-7 wow animated animated2 fadeInLeft">
        <div class="project-hover">
            <h2>Wedding Cakes</h2>
            <hr />
            <h6>1.Cake Structures<br>2.Cake Pieces</h6>
            <a href="<?php echo base_url().'home/vendorList/8';?>">See More</a>
        </div>
    </div>

    <br>
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-9 wow animated animated5 fadeInLeft">
        <div class="project-hover">
            <h2>Stationaries</h2>
            <hr />
       <h6>1.Invitation Cards<br>2.Cake Boxes</h6>
            <a href="<?php echo base_url().'home/vendorList/9';?>">See More</a>
        </div>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-10 wow animated animated3 fadeInLeft">
        <div class="project-hover">
            <h2>Flower Works</h2>
            <hr />
            <h6>1.Florists<br>2.Flower Boquets</h6>
            <a href="<?php echo base_url().'home/vendorList/10';?>">See More</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-11 wow animated animated2 fadeInLeft">
        <div class="project-hover">
            <h2>Traditional Terms</h2>
            <hr />
           <h6>1.Ashtaka<br>2.Jayamangala Gatha<br>3.Welcome Songs<br>4.Kandyan dance</h6>
            <a href="<?php echo base_url().'home/vendorList/11';?>">See More</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-12 wow animated fadeInLeft">
        <div class="project-hover">
            <h2>Entertainment</h2>
            <hr />
           <h6>1.DJ<br>2.Musical Groups<br>3.Dancing Groups</h6>
            <a href="<?php echo base_url().'home/vendorList/12';?>">See More</a>
        </div>
    </div>
    <br>
   <div class="clearfix"></div>

   
  </div>

    <!-- /.container -->

</div>

<hr>
<!-- Page Content -->
<div id="Gallery" class="container-fluid">
    <div class="container">
        <div class="space"></div>
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Gallery
        </h1>
        <!-- Project One -->
<!--        --><?php
//        if( !empty($images) ) {
//        foreach ($images as $image) {
//        ?>
        <div class="row" >
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/beauty.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/pre6.jpg';?>" alt="">
                </a>
            </div>

            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/yellow.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/clr.jpg';?>" alt="">
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/child.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/grl.jpg';?>" alt="">
                </a>
            </div>

            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/pre2.jpg';?>" alt="">
                </a>
            </div>

            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/red.jpg';?>" alt="">
                </a>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">

            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/run.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/cakez.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/prasadi.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-3 doc-item">
                <a href="#">
                    <img class="img-fluid rounded rounded1 mb-3 mb-md-0 doc-img animate attachment-gallery-post-single wp-post-image" src="<?php echo base_url().'assets/images/images/glry/pre9.jpg';?>" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->
<!--        --><?php
//        if($image->id%4==0) {
//            ?>
<!--            <br>-->
<!--            --><?php
//        }
//        }}
//        ?>

    </div>
    <!-- /.container -->
</div>
<hr>
<!--Testimonials -->
<div id="Testinomials" class="container-fluid" >
    <div class="container" >
        <div class="space"></div>
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Testinominals
        </h1>
        <?php
        if( !empty($testinominals) ) {
            foreach ($testinominals as $testinominal) {
                ?>
                <!-- Project One -->
                <div class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <img class="img-fluid rounded mb-3 mb-md-0"
                                 src="<?php echo base_url() . 'uploads/testinominals/' . $testinominal->image; ?>"
                                 alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <h3><?php echo $testinominal->weddingName; ?></h3><?php echo $testinominal->date; ?>
                        <p><?php echo $testinominal->description; ?></p>

                    </div>
                </div>

                <!-- /.row -->

                <hr>
                <?php
            }
        }
        ?>

    </div>
    <!-- /.container -->

</div>



<!--about us -->
<div id="AboutUs" >
    <div class="welcome">
        <div class="container" >
            <div class="space"></div>
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3" >About us
            </h1>

            <br>
            <div class="welcome-grids row">
            

                <div class="col-md-6 w3ls-welcome-left">
                    <div class="w3ls-welcome-left-img">

                    </div>
                </div>
                <div class="col-md-6 w3ls-welcome-right">
                <br><br>
                    <div class="w3ls-welcome-right-info">
                        <h2>Some Words <span>About Us</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero justo, mollis et elementum eget, mollis sit amet justo. Praesent aliquet nibh quis massa dapibus, eu volutpat ligula rutrum. Phasellus consectetur orci at cursus pellentesque. Fusce accumsan eros et eros pretium volutpat. <span>Nullam metus lorem, interdum at nisi nec, gravida accumsan ante. Ut dolor lectus, consectetur in rutrum a, eleifend quis est. Quisque eu porta dui. Praesent sit amet pulvinar velit. Quisque eget metus ac velit interdum laoreet.</span></p>
                    </div>
                    <div class="agileits-border">
                        <div class="agileinfo-red"> </div>
                        <div class="agileinfo-red agileinfo-green"> </div>
                        <div class="agileinfo-red agileinfo-blue"> </div>
                        <div class="agileinfo-red agileinfo-yellow"> </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>  
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">  
        $(this).ready( function() {  
            $("#id").autocomplete({  
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "http://localhost/wedima-new/home/lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){  
                                add(data.message);  
                                console.log(data);
                            }  
                        },  
                    });  
                },  
                     
            });  
        });  

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky1")
  } else {
    navbar.classList.remove("sticky1");
  }
}
</script>
