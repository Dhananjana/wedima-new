<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>
<script src="<?php echo base_url().'assets/js/tinymce/jquery.tinymce.min.js';?>"></script>
<script src="<?php echo base_url().'assets/js/tinymce/tinymce.min.js';?>"></script>
<br>

<style>
 /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    *{
        font-family: 'Open Sans', sans-serif;
    }

.dropdown {
    position: relative;
    display: inline-block;
    
}
.square {
    position: absolute;
    top: -6px;
    left: 140px;
    width: 12px;
    height: 12px;
    border-top: 1px solid rgba(0,0,0,.15);
    border-left: 1px solid rgba(0,0,0,.15);
    background-color: #fff;
    transform: rotate(45deg);
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 1px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

/*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}

    .well {
        margin-top:-20px;
        background-color:#007FBD;
        border:2px solid #0077B2;
        text-align:center;
        cursor:pointer;
        font-size: 25px;
        padding: 5px;
        border-radius: 0px !important;
        width:20%;

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
    .row{
        margin-left: 0px;
        margin-right: 0px;
    }
    .row1{
        height: 325px;
    }
.auto            { cursor: auto; }
.default         { cursor: default; }
.none            { cursor: none; }
.context-menu    { cursor: context-menu; }
.help            { cursor: help; }
.pointer         { cursor: pointer; }
.progress        { cursor: progress; }
.wait            { cursor: wait; }
.cell            { cursor: cell; }
.crosshair       { cursor: crosshair; }
.text            { cursor: text; }
.vertical-text   { cursor: vertical-text; }
.alias           { cursor: alias; }
.copy            { cursor: copy; }
.move            { cursor: move; }
.no-drop         { cursor: no-drop; }
.not-allowed     { cursor: not-allowed; }
.all-scroll      { cursor: all-scroll; }
.col-resize      { cursor: col-resize; }
.row-resize      { cursor: row-resize; }
.n-resize        { cursor: n-resize; }
.e-resize        { cursor: e-resize; }
.s-resize        { cursor: s-resize; }
.w-resize        { cursor: w-resize; }
.ns-resize       { cursor: ns-resize; }
.ew-resize       { cursor: ew-resize; }
.ne-resize       { cursor: ne-resize; }
.nw-resize       { cursor: nw-resize; }
.se-resize       { cursor: se-resize; }
.sw-resize       { cursor: sw-resize; }
.nesw-resize     { cursor: nesw-resize; }
.nwse-resize     { cursor: nwse-resize; }

body {

font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";

}
.cursors {
  display: flex;
  flex-wrap: wrap;
}
.cursors > div {
  flex: 150px;
  padding: 10px 2px;
  white-space: nowrap;
  border: 1px solid #eee;
  border-radius: 5px;
  margin: 0 5px 5px 0;
}
.cursors > div:hover {
  background: #eee;
}
</style>

<?php foreach ($details as $detail) {
    ?>
   <div class="hed" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row panel">
            <div class="col-lg-3 bg_blur " style="background-image:url(' <?php echo base_url() . 'uploads/cover/' . $detail->cover ?>');"><button type="button" class="btn btn-info" style="margin-top: 260px;" data-toggle="modal" data-target="#coverModal"><i class=" fa fa-pencil-square-o" aria-hidden="true"></i>change cover</button>
            </div>
              <div class="col-lg-1"></div>
            <div class="col-lg-6" style="margin-left: -50px;">
                <img src="<?php echo base_url() . 'uploads/profile/' . $detail->pp ?>"
                     class="img-responsive img-thumbnail picture hidden-xs"/>
                <div class="header">
                    <h1><?php echo $detail->name; ?></h1>
<!--                    <h4>Web Developer</h4>-->
                <div class="row">
                    <span><?php echo $detail->description ?></span>
                     <button type="button" class="btn btn-info" style="margin-top:15px;margin-left: -165px;z-index:999" data-toggle="modal" data-target="#ppModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                </div>

                </div>
                <br>
                <div class="row " style="margin-top: 2.8%">
                    <div class="col-lg-6 col-md-6 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
                    <div class="col-lg-6 col-md-6 col-xs-4 well"><i class="fa fa-star-o"></i> 14</div>
                   
                </div>
            </div>
            <div class="col-lg-2 " style="color:black;">
                <?=$menu?>
            </div>

        </div>
        <br>
    </div>
    <div class="row">
    <div class="container col-lg-3">
    <div class="col-lg-12 card">
        <div class="footer-widget">

        <div class="row ">
             <h4 style="margin-left: 30%;margin-top: 10%"><i class="fa fa-globe br-blue" aria-hidden="true"></i>&nbsp; Intro</h4>
             <h3><i style="margin-top: 3%; margin-left:40px"  class="fa fa-pencil-square-o pointer" aria-hidden="true" onclick="edit_mobiledetail()" style="margin-top:38%" aria-hidden="true"></i></h3>
        </div>

            <hr>
            <br><br>
            <div class="contact-details">
                <i class="fa fa-map-marker br-red"></i><div style="margin-left: 8%">&nbsp;&nbsp;Address: <span><?php echo $detail->address; ?></span></div>
                <br><br>
                <i class="fa fa-phone br-green"></i><div style="margin-left: 8%">&nbsp;&nbsp;Telephone: <span><?php echo $detail->telephone; ?></span></div>
                <div class="clearfix"></div>
                <br><br>
                <i class="fa fa-building-o br-lblue"></i><div style="margin-left: 8%">&nbsp;&nbsp;Service Area: <span><?php echo $detail->	serviceArea; ?></span></div>
                <div class="clearfix"></div>
            </div>
            <br>
            <!-- Social media icon -->

        </div> <!--/ Footer widget end -->
    </div>
    </div>
<?php
}
?>



<div class="col-lg-9">
 <div class="col-lg-12 card"">
 <div class="row ">
     <h2 class="col-lg-10 ">Package Details</h2>

     <h1><i style="margin-top: 3%; margin-left:40px"  class="fa fa-plus-circle pointer" aria-hidden="true" data-toggle="modal" data-target="#packageModel" style="margin-top:38%" aria-hidden="true"></i></h1>
</div>
 <hr>
    <div class="row">
            <?php foreach ($packages as $package) {
                    ?>
                    <div class="col-lg-4 container " style="margin-top: 20px; margin-bottom: 20px;">
                        <div class=" panel">

                                <div class="container">
                                <div class="row">
                                    <h3><?php echo $package->title?></h3> &nbsp;&nbsp;
                                    <h5><i onclick="edit_mobile(<?php echo $package->id;?>)" class="fa fa-pencil-square-o pointer" style="margin-top:38%" aria-hidden="true"></i></h5>
                                </div>
                                    <p class="text-viewer"><?php echo $package->description ?></p>
                                    <h5>Rs.<?php echo $package->price ?></h5>
                                    <button type="button"  onclick="delete_packages(<?php echo $package->id; ?>)" class="btn btn-danger">Delete</button>
                                </div>

                        </div>
                    </div>


             <?php
               }
                ?>
</div>
        </div>
 </div>
</div>

<br>
<div class="col-lg-12">

    <div class="col-lg-12 card">
        <div class="row">
            <div class="col-lg-11">
                <h1 style="margin-top: 3%">Gallery</h1>
            </div>
            <div class="col-lg-1">
            
            </div>
        </div>
        <br>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:520px;height:170px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1000px;height:150px;overflow:hidden;">
             <?php
            if( !empty($images) ) {
            foreach ($images as $image) {
            ?>
                <div data-p="30.00">
                 <img data-u="image" src="<?php echo base_url().'uploads/gallery/'.$image->folder.'/'.$image->imageName;?>" alt=" " class="img-responsive" />
                </div>

             <?php
            }}
            ?>
        </div>
    </div>
  </div>
</div>
<br>
<div class="container col-lg-12">

    <div class="col-lg-12 card">
        <div class="row">
            <div class="col-lg-11">
                <h1 style="margin-top: 3%">Albums</h1>
            </div>
            <div class="col-lg-1">
            
            </div>
        </div>

            <div class="contact-details">
                <div class="row " >
                  <div class="col-lg-2 col-sm-6 col-xs-3 portfolio-item" >
                     <div class="card h-100 pointer ">
                       <img data-toggle="modal" style="margin-left: 20%;margin-right: 20%;margin-top: 18%;margin-bottom: 20%" data-target="#folderModel" src="<?php echo base_url().'assets/images/plus.png'?>" alt="Card image cap">
                   
                     </div>

                  </div>
                <?php foreach ($albums as $album) {
                    ?>
                    <a href="<?php echo base_url().'home/albums/'.$album->id;?>"><div class="col-lg-2 col-sm-6 col-xs-3 portfolio-item" style="height: 200px;width: 250px">
                        <div class="card h-100">
                            <img style="height: 120px;width: 90s%" class="card-img-top cell" src="<?php echo base_url().'albums/'.$album->album_name.'/'.$album->image_name?>" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-text"><a href="" style="text-decoration: none"><?php echo $album->album_name;?></a></h6>
                              <div class="dropdown" style="float:right;margin-top:-20px;color: gray">
                              <h1>...</h1>
                                <div class="dropdown-content">
                                <div class="square"></div>
                                  <a href="#">Edit</a>
                                  <a href="#">Delete</a>
                                </div>
                              </div>

                            </div>
                        </div>
                    </div></a>
                    <?php
                };?>
                </div>
            </div>
            <!-- Social media icon -->
<br>
    </div>

</div>
<br>


<div class="modal fade" id="packageModel" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body form">
        <form action="#" id="Pform" class="form-horizontal">
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
          <div class="form-group">
              <label class="control-label col-md-3">Title</label>
              <div class="col-md-9">
                <input name="title" placeholder="Premium" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Descripton</label>
              <div class="col-md-9">
                <input name="description" placeholder="description" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Price</label>
              <div class="col-md-9">
                <input name="price" placeholder="5000" class="form-control" type="text">
              </div>
            </div>

          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="addP()" class="btn btn-success">Add</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
<div class="modal fade" id="detailModel" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body form">
        <form action="#" id="Dform" class="form-horizontal">
          <input type="hidden" id="id" name="id">
          <div class="form-body">
          <div class="form-group">
              <label class="control-label col-md-3">Description</label>
              <div class="col-md-9">
                <input  name="description" placeholder="description" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Address</label>
              <div class="col-md-9">
                <input name="address" placeholder="182,Palanwatta,Pannipitiya." class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Telephone</label>
              <div class="col-md-9">
                <input name="telephone" placeholder="0114523698" class="form-control" type="text">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-md-3">Service Area</label>
              <div class="col-md-9">
                <input name="serviceArea" placeholder="Colombo" class="form-control" type="text">
              </div>
            </div>

          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="savedetails()" class="btn btn-success">Edit</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>



<!-- Bootstrap modal for package1-->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
           <div class="form-group">
              <label class="control-label col-md-3">Title</label>
              <div class="col-md-9">
                <input name="title" placeholder="premium" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Descripton</label>
              <div class="col-md-9">
                <input name="description" placeholder="description" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Price</label>
              <div class="col-md-9">
                <input name="price" placeholder="price" class="form-control" type="text">
              </div>
            </div>

          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal for package1-->

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
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <?php echo form_open("vendor/add_package2");?>
                <div class="form-group">
                  <label class="control-label col-md-3">Descripton</label>
                  <div class="col-md-9">
                    <textarea name="description" rows="7" placeholder="description" class="form-control"></textarea>
                  </div>
                </div>
               <div class="form-group">
                  <label class="control-label col-md-3">Price</label>
                  <div class="col-md-9">
                    <input name="price" placeholder="price" class="form-control" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3"></label>
                  <div class="col-md-9">
                    <input name="packageName" value="Premium" class="form-control" type="hidden">
                  </div>
                </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add</button>
          <?php echo form_close();?><br>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
 
 <!-- Modal -->
  <div class="modal fade" id="folderModel" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
          <?php

          echo form_open_multipart('vendor/create_album')?>

               <div class="form-group">
                  <label class="control-label col-md-4">Album Name</label>
                  <div class="col-md-8">
                    <input name="Album_Name" placeholder="Dinuka & Nayani" class="form-control" type="text">
                  </div>
                </div>

             <div class="form-group">
                 <label class="control-label col-md-4">Add Images To The Album</label>
                 <div class="col-md-8">
                     <input name="image[]"  class="form-control" type="file" multiple="multiple">
                 </div>
             </div>
          <button type="submit" class="btn btn-success" >Create Album</button>
        <?php echo form_close()?>

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
<!--     dfghjkl. -->
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

  <script type="text/javascript">


    function edit_mobile(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('vendor/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
             $('[name="title"]').val(data.title);
            $('[name="description"]').val(data.description);
            $('[name="price"]').val(data.price);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

function edit_mobiledetail()
    {

      save_method = 'update';
      $('#Dform')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('vendor/ajax_edit_details')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            
            $('[name="description"]').val(data.description);
             $('[name="address"]').val(data.address);
            $('[name="telephone"]').val(data.telephone);
             $('[name="serviceArea"]').val(data.serviceArea);

            $('#detailModel').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }



    function save()
    {
      var url;


       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('vendor/mobile_update')?>',
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
     function savedetails()
    {
      var url;

       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('Vendor/mobile_updatedetails')?>',
            type: "POST",
            data: $('#Dform').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#detailModel').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function addP()
    {
      var url;


       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('vendor/add_packages')?>',
            type: "POST",
            data: $('#Pform').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#packageModel').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
 
    

  function create_album()
    {
      var url;


       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('vendor/create_album')?>',
            type: "POST",
            data: $('#folder').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

  </script>
  <script type="text/javascript">
            function delete_packages(id) {

            console.log(id);

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
                        url : "<?php echo site_url('vendor/delete_packages')?>/"+id,
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

        //  function delete_package2(id) {

        //     console.log(id);

        //     swal({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         type: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!',
        //         closeOnConfirm: false,
        //     }).then(function(isConfirm) {
        //         if (isConfirm) {

        //             // ajax delete data to database
        //             $.ajax({
        //                 url : "<?php echo site_url('vendor/delete_package2')?>/"+id,
        //                 //dataType: "JSON",
        //                 success: function(data)
        //                 {
        //                     swal(
        //                         'Deleted!',
        //                         'Your file has been deleted.',
        //                         'success'
        //                     );

        //                     window.setTimeout(function(){
        //                         location.reload();
        //                     } ,1000);

        //                 },
        //                 error: function (jqXHR, textStatus, errorThrown)
        //                 {
        //                     alert('Error adding / update data');
        //                 }
        //             });


        //         }
        //     })
        // }

        //  function delete_package3(id) {

        //     console.log(id);

        //     swal({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         type: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!',
        //         closeOnConfirm: false,
        //     }).then(function(isConfirm) {
        //         if (isConfirm) {

        //             // ajax delete data to database
        //             $.ajax({
        //                 url : "<?php echo site_url('vendor/delete_package3')?>/"+id,
        //                 //dataType: "JSON",
        //                 success: function(data)
        //                 {
        //                     swal(
        //                         'Deleted!',
        //                         'Your file has been deleted.',
        //                         'success'
        //                     );

        //                     window.setTimeout(function(){
        //                         location.reload();
        //                     } ,1000);

        //                 },
        //                 error: function (jqXHR, textStatus, errorThrown)
        //                 {
        //                     alert('Error adding / update data');
        //                 }
        //             });


        //         }
        //     })
        // }

  </script>


    <!-- <script src="<?php echo base_url().'assets/js/jquery-1.11.3.min.js';?>" type="text/javascript"></script> -->
    <script src="<?php echo base_url().'assets/js/jssor.slider-27.1.0.min.js';?>" type="text/javascript"></script>
<script>
    $(function(){
        // here the code for text minimiser and maxmiser by faisal khan
        var minimized_elements = $('p.text-viewer');

        minimized_elements.each(function(){
            var t = $(this).text();
            if(t.length < 300) return;

            $(this).html(
                t.slice(0,300)+'<span>... </span><a href="#" class="more"> Read More>> </a>'+
                '<span style="display:none;">'+ t.slice(300,t.length)+' <a href="#" class="less"> << </a></span>'
            );
        });

        $('a.more', minimized_elements).click(function(event){
            event.preventDefault();
            $(this).hide().prev().hide();
            $(this).next().show();
        });

        $('a.less', minimized_elements).click(function(event){
            event.preventDefault();
            $(this).parent().hide().prev().show().prev().show();
        });
    });

   jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 130,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1180;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
</script>
