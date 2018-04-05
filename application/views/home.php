
<?=$nav1?>
<br><br>
<?=$sli?>

<style >
    .space{
        height: 60px;
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

</style>

<form action="<?php base_url();?>home/finalResult" method="post">

    <div class="container">
        <div class="border border-secondary">
            <div class="container bg-secondary ">
                <div class="row">
                    <div class="col  topC" style="padding-top: 10px">
                        <div class="form-group">
                            <?php 
                                 
                                echo form_input('vendorName','','id="id"');  
                            ?> 
                            <ul>  
                                <div class="well" id="result"></div>  
                            </ul>
                        </div>
                    </div>
                    <div class="col  topC" style="padding-top: 10px">
                        <div class="form-group">
                            <select class="form-control" name="loc" id="exampleSelect1">
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
                    <div class="col  topC" style="padding-top: 10px">
                        <div class="form-group" >
                            <select class="form-control" name="cat"  id="exampleSelect1">
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
                    <div class="col topC" style="padding-top: 10px">
                        <button type="submit" class="btn btn-outline-info btnw"> Search </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<div id="Services" class="container-fluid" >
    <div class="container" >
        <div class="space"></div>
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Services
        </h1>
        <!-- Project One -->
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0 " src="<?php echo base_url().'assets/images/images/glry/ancient.jpg';?>" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url().'assets/images/images/glry/clr.jpg';?>" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <hr>
        <!-- Project Three -->
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url().'assets/images/images/glry/red1.jpg';?>" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

    </div>

    <!-- /.container -->

</div>

<!-- Page Content -->
<div id="Gallery" class="container-fluid">
    <div class="container">
        <div class="space"></div>
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Gallery
        </h1>
        <!-- Project One -->
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
        <!-- Project One -->
        <div class="row">
            <div class="col-md-3">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url().'assets/images/images/glry/ancient.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3>Angelo and Sheril</h3>2018.03.19
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>

            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url().'assets/images/images/glry/clr.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3>Shiran and Nayomi</h3>2018.03.09
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>

            </div>
        </div>
        <!-- /.row -->

        <hr>
        <!-- Project Three -->
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url().'assets/images/images/glry/red1.jpg';?>" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3>Tharka and Nimali</h3>2018.02.20
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>

            </div>
        </div>
        <!-- /.row -->
        <br><br>
    </div>
    <!-- /.container -->

</div>

<style></style>
<!--about us -->
<div id="section4" >
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
                        url: "http://localhost/wedima-n/home/lookup",  
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
        </script>