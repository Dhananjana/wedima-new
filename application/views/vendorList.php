<br><br>
<style>
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
<div class="wrapper row2">
    <div id="breadcrumb" class="clear">
        <ul style="margin-left: 15%">
<!--            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

            <li><a href="<?php echo base_url().'home'?>#Services">Home</a></li>
            <li><a href="">Vendors</a></li>
            <li><a href="">
                    <?php
                    if($this->uri->segment(3)==1){
                        echo "Locations";
                    }
                    if($this->uri->segment(3)==2){
                        echo "Bridal Wear";
                    }
                        if($this->uri->segment(3)==3){
                            echo "Groom Wear";
                        }

                    if($this->uri->segment(3)==4){
                        echo "Beauticiens";
                    }

                    if($this->uri->segment(3)==5){
                        echo "Jwellaries";
                    }

                    if($this->uri->segment(3)==6){
                        echo "Photographers";
                    }

                    if($this->uri->segment(3)==7){
                        echo "Cars";
                    }

                    if($this->uri->segment(3)==8){
                        echo "Wedding Cakes";
                    }

                    if($this->uri->segment(3)==9){
                        echo "Stationaries";
                    }

                    if($this->uri->segment(3)==10){
                        echo "Flower Works";
                    }

                    if($this->uri->segment(3)==11){
                        echo "Traditional Terms";
                    }

                    if($this->uri->segment(3)==12){
                        echo "Entertainment";
                    }
                    ?></a></li>
        </ul>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <?php foreach($vendors as $vendor){?>
        <div class="col-lg-4 col-sm-6 col-xs-3 portfolio-item">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo base_url().'uploads/profile/'.$vendor->pp?>" alt="Card image cap" style="max-height: 350px;max-width: 350px">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo  $vendor->name?></p>
                    </h4>
                    <p class="card-text"><?php
                        $limited_word= word_limiter($vendor->description,40);
                        echo $limited_word;

                        ?></p>
                    <a href="#" class="btn btn-primary">Look In</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<br>
