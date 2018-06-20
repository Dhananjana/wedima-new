<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>
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
<body onload="ifinitial();total();" >
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
    <div class="card col-lg-3" id="form1" style="display: block;margin-left: 2px;">
        <form action="" id="form" onsubmit="set_initial()">
            <br>
            <h3>Plan By budget</h3>
            <br>
            <div class="form-group">
                <label class="control-label">Ammount :</label>
                <div class="col-md-9">
                    <input id="amnt" type="text" name="ammount"  placeholder="100000" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Start Plan</button>
        </form><br>
    </div>
    <br>
    <div class="card col-lg-3" id="initial" style="display: none;height: 100px">
        <br>
        <?php if($ammount!=null){
            foreach($ammount as $ammount) {
                ?>
               <h4>Your Budget Is<br> RS: <?php echo $ammount->initial_ammount;?> </h4>
                <?php
            }
        }?>
        <br>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="card col-lg-8">
        <div class="table-responsive">
            <table class="table">
                <thead class="text-primary">
                <th>Vendor Name</th>
                <th>Package Name</th>
                <th>Price</th>
                <th>Vendor Confiremation</th>

                </thead>
                <tbody>
                <?php
                foreach($items as $item) {
                    ?>
                    <tr>
                        <td><?php echo $item->vendor_name?></td>
                        <td><?php echo $item->package_name?></td>
                        <td><?php echo $item->price?></td>
                        <td><?php echo $item->confremation?></td>
                        <td>
<!--                            <a href="" class="btn btn-sm btn-info" ><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>-->
                            <button class="btn btn-sm btn-danger" onclick="delete_item(<?php echo $item->id?>)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>

            </table>
            <div class="row">
                <div class="col-lg-4" id="to" style="background-color: transparent"><h6>Current Total - Rs : <?php echo $total;?></h6></div>
                <div class="col-lg-4"><h6>Current Outstanding - Rs : <?php echo $current;?></h6></div>
                <div class="col-lg-4"> <button class="btn btn-sm btn-success" onclick="book()">Book Now</button></div>
            </div>
            <br>
        </div>
    </div>
    </div>
</div>
<br>
</body>

<script>
    function ifinitial() {
        var x = document.getElementById("form1");
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

    function total() {
        var x = document.getElementById("to");
        $.ajax({
            url : "<?php echo site_url('Customer/total')?>",
            type: "GET",
            dataType: "JSON",
            success: function(json)
            {
                if(json.data=='yes'){
                    x.style.backgroundColor="red";
                    swal({
                        title: "Look!",
                        text: "You are exceding Your Budget.",
                        imageUrl: 'https://cdn1.iconfinder.com/data/icons/hawcons/32/700144-icon-61-warning-128.png'
                    });
                }


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function book() {
        $.ajax({
            url : '<?php echo site_url('customer/book')?>',
            type: "POST",
            dataType: "JSON",
            success: function(json)
            {
                if(json.data=='yes'){
                    $.ajax({
                        url : "<?php echo site_url('Customer/bookconfirm')?>",
                        type: "POST",
                        dataType: "JSON",
                        success: function(json)
                        {
                            setTimeout(function(){
                                location.reload();
                            }, 1500);
                            swal("Good job!", "You Have successfully done your booking with Wedima!", "success");



                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error get data from ajax');
                        }
                    });

                }

                else{
                    swal({
                        title: "Wait!",
                        text: "Some of your packages in the cart have not been confiremed by vendors so wait.Or you can remove them."
                    });
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_item(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false,
        }).then(function(isConfirm) {
            if (isConfirm) {

                // ajax delete data to database
                $.ajax({
                    url : "<?php echo site_url('Customer/delete_item')?>/"+id,
                    //dataType: "JSON",
                    success: function(data)
                    {
                        swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );

                        window.setTimeout(function(){
                            location.reload();
                        } ,1000);

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });


            }
        })
    }
</script>
