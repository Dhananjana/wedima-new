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
<body onload="ifinitial();">
<br><br>
<div class="wrapper row2">
    <div id="breadcrumb" class="clear">
        <ul style="margin-left: 15%">
            <!--            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

            <li><a href="<?php echo base_url().'home'?>">Home</a></li>
            <li><a href="">Cart</a></li>

        </ul>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
    <div class="card col-lg-4" id="form" style="display: block;margin-left: 2px">
        <form action="" id="form" onsubmit="set_initial()">
            <br>
            <h3>Plan By budget</h3>
            <br>
            <div class="form-group">
                <label class="control-label">Ammount :</label>
                <div class="col-md-9">
                    <input type="text" name="ammount"  placeholder="100000" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Plan</button>
        </form><br>
    </div>
    <br>
    <div class="card col-lg-3" id="initial" style="display: none">
        <br>
        <?php if($ammount!=null){
            foreach($ammount as $ammount) {
                ?>
               <h4>Your Budget Is <?php echo $ammount->initial_ammount;?> </h4>
                <?php
            }
        }?>
        <br>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="card col-lg-8">
        
    </div>
    </div>
</div>
</body>

<script>
    function ifinitial() {
        var x = document.getElementById("form");
        var y = document.getElementById("initial");
        $.ajax({
            url : "<?php echo site_url('Customer/initial')?>",
            type: "GET",
            dataType: "JSON",
            success: function(json)
            {
                if(json.data=='yes'){
                    x.style.display="none";
                    y.style.display="block";
                }


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }


    function set_initial() {
        $.ajax({
            url : '<?php echo site_url('customer/set_initial')?>',
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
</script>
