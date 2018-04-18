
<br>

<style>
    *{
        font-family: 'Open Sans', sans-serif;
    }

    .well {
        margin-top:-20px;
        background-color:#007FBD;
        border:2px solid #0077B2;
        text-align:center;
        cursor:pointer;
        font-size: 25px;
        padding: 5px;
        border-radius: 0px !important;
        width: 20%;

    }

    .well:hover {
        margin-top:-20px;
        background-color:#0077B2;
        border:2px solid #0077B2;
        text-align:center;
        cursor:pointer;
        font-size: 25px;
        padding: 5px;
        border-radius: 0px !important;
        border-bottom : 2px solid rgba(97, 203, 255, 0.65);
    }

    .hed {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #fff;
        background-color: #F1F1F1;
    }



    .bg_blur
    {

        height: 300px;
        background-size: cover;
    }




    .header{
        color : #808080;
        margin-left:10%;
        margin-top:70px;
    }

    .picture{
        height:150px;
        width:150px;
        position:absolute;
        top: 75px;
        left:-75px;
    }

    .picture_mob{
        position: absolute;
        width: 35%;
        left: 35%;
        bottom: 70%;
    }

    .btn-style{
        color: #fff;
        background-color: #007FBE;
        border-color: #adadad;
        width: 33.3%;
    }

    .btn-style:hover {
        color: #333;
        background-color: #3D5DE0;
        border-color: #adadad;
        width: 33.3%;

    }


    @media (max-width: 767px) {
        .header{
            text-align : center;
        }



        .nav{
            margin-top : 30px;
        }
    }

    .dropzone{
        background: #fff;
        border: 2px dashed #ddd;
        border-radius: 5px;
    }

    .dz-message{
        color: #999;
        font-family: 'Montserrat',sans-serif;
    }

    .dz-message:hover {
        color: #464646;
    }

    .dz-message h3{
        font-size: 200%;
        font-weight: 100;
        margin-bottom: 15px;
    }

    .br-red{
        background-color: #f75353 !important;
    }

    .br-green{
        background-color: #51d466 !important;
    }

    .br-blue{
        background-color: #23527c !important;
    }

    .br-lblue{
        background-color: #32c8de !important;
    }
    .footer-widget {

        max-width: 400px;
        margin: 0 auto;
        margin-bottom: 40px;
    }

    .footer-widget h4{
        font-family: 'Droid Serif', serif;
        font-weight: 400;
        color: #777777;
    }

    .footer-widget h4 i{
        display: block;
        margin-bottom: 15px;
        width: 25px;
        height: 25px;
        line-height: 25px;
        float: left;
        font-size: 12px;
        color: #fff;
        text-align: center;
        border-radius: 30px
    }
    .footer-widget .contact-details  i {
        display: block;
        margin-bottom: 15px;
        width: 25px;
        height: 25px;
        line-height: 25px;
        float: left;
        font-size: 12px;
        color: #fff;
        text-align: center;
        border-radius: 30px
    }

    .footer-widget .contact-details i fa{
        font: normal normal normal 14px/1 FontAwesome;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
    }



</style>

<?php foreach ($details as $detail) {
    ?>
    <div class="container col-lg-12 hed" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row panel">
            <div class="col-md-4 bg_blur "
                 style="background-image:url('<?php echo base_url() . 'uploads/cover/' . $detail->cover ?>');"><button type="button" class="btn btn-info" style="margin-top: 260px;" data-toggle="modal" data-target="#coverModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>change cover</button>
            </div>
            <div class="col-md-8  col-xs-12">
                <img src="<?php echo base_url() . 'uploads/profile/' . $detail->pp ?>"
                     class="img-responsive img-thumbnail picture hidden-xs"/>
                <div class="header">
                    <h1><?php echo $detail->name; ?></h1>
<!--                    <h4>Web Developer</h4>-->
                <div class="row">
                    <span><?php echo $detail->description ?></span>
                     <button type="button" class="btn btn-info" style="margin-top:24px;margin-left: -50px;z-index:999" data-toggle="modal" data-target="#ppModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    
                                    
                </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
                    <div class="col-lg-4 col-md-3 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i> 14</div>
                    <div class="col-lg-4 col-md-3 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i> 26</div>
                </div>
            </div>
        </div>
        <br>
        
    </div>
    <div class="row">
    <div class="col-lg-3 col-sm-4 card">
        <div class="footer-widget">
            <h4 style="margin-left: 30%;margin-top: 3%"><i class="fa fa-globe br-blue" aria-hidden="true"></i>&nbsp; Intro</h4>
            <hr>
            <div class="contact-details">
                <i class="fa fa-map-marker br-red"></i><div style="margin-left: 8%">&nbsp;&nbsp;Address: <span><?php echo $detail->address; ?></span></div>
                <br>
                <i class="fa fa-phone br-green"></i><div style="margin-left: 8%">&nbsp;&nbsp;Telephone: <span><?php echo $detail->telephone; ?></span></div>
                <div class="clearfix"></div>
                <br>
                <i class="fa fa-building-o br-lblue"></i><div style="margin-left: 8%">&nbsp;&nbsp;Service Area: <span><?php echo $detail->	serviceArea; ?></span></div>
                <div class="clearfix"></div>
            </div>
            <!-- Social media icon -->

        </div> <!--/ Footer widget end -->
    </div>
<?php
}
?>
 <div class="col-lg-8 card" style="margin-left:50px;">
 <div class="row">
     <h2 class="col-lg-10">Package Details</h2>
</div>
            <div class="row">

                <?php foreach ($package1 as $package) {
                    ?>
                    <div class="col-lg-4 " style="margin-top: 20px; margin-bottom: 20px;">
                        <div class=" panel">
                           
                                <div class="container">
                                <div class="row">
                                    <h3><?php echo $package->packageName; ?></h3> &nbsp;&nbsp;
                                    <h5><i class="fa fa-pencil-square-o" style="margin-top:38%" aria-hidden="true"></i></h5>
                                </div>
                                    <p><?php echo $package->description ?></p>
                                    <h5>Rs.<?php echo $package->price ?></h5>
                                </div>

                        </div>
                        
                    </div>
                  
                <?php
                }
                ?>

                 <?php foreach ($package2 as $package) {
                    ?>
                    <div class="col-lg-4 " style="margin-top: 20px; margin-bottom: 20px;">
                        <div class=" panel">
                           
                                <div class="container">
                                   <div class="row">
                                    <h3><?php echo $package->packageName; ?></h3> &nbsp;&nbsp;
                                    <h5><i class="fa fa-pencil-square-o" style="margin-top:38%" aria-hidden="true"></i></h5>
                                </div>
                                    <p><?php echo $package->description ?></p>
                                    <h5>Rs.<?php echo $package->price ?></h5>
                                </div>

                        </div>
                        
                    </div>
                  
                <?php
                }
                ?>


                 <?php foreach ($package3 as $package) {
                    ?>
                    <div class="col-lg-4 " style="margin-top: 20px; margin-bottom: 20px;">
                        <div class=" panel">
                           
                                <div class="container">
                                   <div class="row">
                                    <h3><?php echo $package->packageName; ?></h3> &nbsp;&nbsp;
                                    <h5><i class="fa fa-pencil-square-o" style="margin-top:38%" aria-hidden="true"></i></h5>
                                </div>
                                    <h5>Rs.<?php echo $package->price ?></h5>
                                </div>

                        </div>
                        
                    </div>
                  
                <?php
                }
                ?>
            </div>
        </div>
 </div>

<br>

<br>

<!-- Modal1 -->
<div class="modal fade" id="ppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="content">
                    <div id="my-dropzone" class="dropzone">
                        <div class="dz-message">
                            <h3>Drop files here</h3> or <strong>click</strong> to upload
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="<?php echo base_url().'vendor';?>">
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="coverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cover Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="content">
                    <div id="my-dropzone1" class="dropzone">
                        <div class="dz-message">
                            <h3>Drop files here</h3> or <strong>click</strong> to upload
                        </div>
                    </div>
                </div>
            </div>
           <div class="modal-footer">
                <form action="<?php echo base_url().'vendor';?>">
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
<script>
    Dropzone.autoDiscover =false;
    var myDropzone =new Dropzone("#my-dropzone",{
        url : "<?php echo site_url('vendor/ppUp')?>",
        addRemoveLinks:true,
        removedfile: function (file) {
            var name=file.name;

            $.ajax({
                type: "post",
                url: "<?php echo site_url('vendor/remove')?>",
                data: {file: name},
                dataType: 'html'

            });

            // remove the thubnail
            var previewElement;
            return (previewElement=file.previewElement) !=null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);

        }
    });
</script>
<script>
    Dropzone.autoDiscover =false;
    var myDropzone =new Dropzone("#my-dropzone1",{
        url : "<?php echo site_url('vendor/coverUp')?>",
        addRemoveLinks:true,
        removedfile: function (file) {
            var name=file.name;

            $.ajax({
                type: "post",
                url: "<?php echo site_url('vendor/Cremove')?>",
                data: {file: name},
                dataType: 'html'

            });

            // remove the thubnail
            var previewElement;
            return (previewElement=file.previewElement) !=null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);

        }
    });
</script>

