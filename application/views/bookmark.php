<style>
    .row{
        margin-left: 0px;
        margin-right: 0px;
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
<br><br>
<div class="wrapper row2">
    <div id="breadcrumb" class="clear">
        <ul style="margin-left: 15%">
            <!--            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

            <li><a href="<?php echo base_url().'home'?>">Home</a></li>
            <li><a href="">Bookmarks</a></li>

        </ul>
    </div>
</div>
<br>
<div class="container">
    <?php
        foreach($bookmarks as $bookmark) {
            ?>
                <div class="card ">
                    <div class="row">
                        <div class="col-lg-2"><div id="bookmark" style="display: inline" class="col-lg-3 col-md-3 col-xs-4 well"
                                                   onclick="unbookmark('<?php echo $bookmark->vendor_name; ?>');"><i class="fa fa-star" aria-hidden="true" style="
color: #f1d40f;border-color: #f1d40f"></i>
                            </div></div>

                        <div class="col-lg-3"><a href="<?php echo base_url().'vendor/profileView/'.urlencode($bookmark->vendor_name)?>" style="text-decoration: none"><?php echo $bookmark->vendor_name; ?></a></div>
                        <div class="col-lg-2"><?php echo $bookmark->category; ?></div>

                    </div>
                </div>
            <?php
        }
    ?>
</div>
<br><br>

<script>
    function unbookmark(object)
    {


//        console.log(object);

        //Ajax Load data from ajax
        $.ajax({
            type: "POST",
            url : '<?php echo site_url('Vendor/unbookmark')?>',
            data :{"name":object},
            dataType: "JSON",
            success: function(data)
            {
                console.log("succes");
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error removing bookmark');
            }
        });
    }
</script>