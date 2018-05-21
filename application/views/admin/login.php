<!DOCTYPE html>

	<style>
		.card{
			background-image: url("<?php echo base_url().'assets/dist/img/logbc.jpg';?>");
		}
		.login-page{
			background-image: url("<?php echo base_url().'assets/dist/img/ring.jpg';?>");
			background-repeat: no-repeat;
			background-size: 100%;
		}
		.logR{
			color: #fff;
		}
	</style>

<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="index2.html"><label class="logR">The <b>Wedima</b></label></a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to start your session</p>

			<form action="index2.html" method="post">
				<div class="form-group has-feedback">
					<span class="fa fa-envelope form-control-feedback"></span>
					<input type="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group has-feedback">
					<span class="fa fa-lock form-control-feedback"></span>
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="row">
					<div class="col-8">
						<div class="checkbox icheck">
							<label>
								<input type="checkbox"> <label class="logR">Remember Me</label>
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<p class="mb-1">
				<a href="#">I forgot my password</a>
			</p>

		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url().'assets/dist/js/plugins/jquery/node_modules/jquery/dist/jquery.min.js';?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url().'assets/dist/js/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/dist/js/plugins/iCheck/icheck.min.js';?>"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass   : 'iradio_square-blue',
			increaseArea : '20%' // optional
		})
	})
</script>
</body>
</html>
