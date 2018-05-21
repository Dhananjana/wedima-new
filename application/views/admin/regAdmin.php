<style>
    .card{
	background-image: url("<?php echo base_url().'assets/dist/img/logbc.jpg';?>");
    }
    .register-page{
		background-image: url("<?php echo base_url().'assets/dist/img/ring.jpg';?>");
        background-repeat: no-repeat;
        background-size: 100%;
    }
    .logR{
	color: #fff;
}
</style>
<title>The Wedima | Register</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-lg-12 connectedSortable">
                <div class="register-box">
                    <div class="register-logo">
                        <a href="index2.html"><b>Admin - </b>The Wedima</a>
                    </div>
                    
                    <div class="card">
                        <div class="card-body register-card-body">
                        <p class="login-box-msg">Register a new Admin</p>
                    
                        
                        <form>  
                            <div class="form-group has-feedback">
                            <span class="fa fa-envelope form-control-feedback"></span>
                            <input type="email" class="form-control" id="email"  placeholder="Email">
                            </div>
                            <div class="form-group has-feedback">
                            <span class="fa fa-lock form-control-feedback"></span>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group has-feedback">
                            <span class="fa fa-lock form-control-feedback"></span>
                            <input type="password" class="form-control" id="password2" placeholder="Retype password">
                            </div>
                            <div class="row">
                            <!-- <div class="col-8">
                                <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                                </div>
                            </div> -->
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" id="submitBtn" class="btn btn-primary btn-block btn-flat">Register</button>
                            </div>
                            <!-- /.col -->
                            </div>
                        </form>
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->
                </div>
                    <!-- /.register-box -->                
          </section>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url().'assets/dist/js/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>

<script>
$(function () {
	$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
<script>
$(document).ready(function(){
  
  $('#password2').blur(function(){
    var password = $('#password').val();
    var password2 = $('#password2').val();
    if(password != password2){
      $(this).css("color", "red");
      $('#submitBtn').hide();
    }else{
      $('#submitBtn').show();
      $(this).css("color","black");  
      $('#submitBtn').click(function(){
      var email = $('#email').val();
      var password = $('#password').val();
      $.post("<?php echo base_url().'admin/register';?>",{email:email, password:password},function(data,status){
        alert('Admin Added successfully');
      });
    });
    }  
  });

//  $('#email').blur(function(){
//    var email = $(this).val();
//     //  $.get("",, function(data, status){
      
//     //  });
//     $.ajax({
//       url:"<?php echo base_url().'admin/checkMail';?>",
//       type:'GET',
//       data:"{email: email}",
//       success:function(data){
//         alert(data);  
//         return data;
//       }
//     })
//    });

});
</script>
</body>
</html>