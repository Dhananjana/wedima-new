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

<br><br>
<div class="wrapper row2">
    <div id="breadcrumb" class="clear">
        <ul style="margin-left: 15%">
            <!--            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

            <li><a href="<?php echo base_url().'home'?>#Testinomials">Home</a></li>
            <li><a href="">Testinominals</a></li>

        </ul>
    </div>
</div>
<br>
<div class="container">
<?php
if( !empty($testinominals1) ) {
    foreach ($testinominals1 as $testinominal) {
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

<div class="container" style="margin-left: 50%"><center><?php echo "<p>".$links."</p>"; ?></center></div>
