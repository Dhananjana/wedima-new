    <?=$nav1?>
    <br><br>
    <br>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Sidebar Page
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Home
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group">
            <div class="list-group-item">Search By Budget: </div>
            <div class="list-group-item"><form>
              From
              Rs:<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"><br>
              To
              Rs:<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0">
            </form></div>
            <div class="list-group-item"><center><button type="submit" class="btn btn-primary">Submit</button></center></div>
            <!-- <a href="contact.html" class="list-group-item">Contact</a>
            <a href="portfolio-1-col.html" class="list-group-item">1 Column Portfolio</a>
            <a href="portfolio-2-col.html" class="list-group-item">2 Column Portfolio</a>
            <a href="portfolio-3-col.html" class="list-group-item">3 Column Portfolio</a> -->
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
          <div class="row">
            <?php foreach ($sres as $row) {
            ?>
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-5">
          
          <h3><?php echo $row->name;?></h3>
          <p><?php echo $row->description;?></p>
          <a class="btn btn-primary" href="<?php echo base_url().'vendor/profileView/'.urlencode($row->name)?>">More...
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          
        </div>
        <?php          } ?>
      </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    

  </body>

</html>
