

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'fonts/Linearicons-Free-v1.0.0/icon-font.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'vendor/animate/animate.css';?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'vendor/css-hamburgers/hamburgers.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'vendor/animsition/css/animsition.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'vendor/select2/select2.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'vendor/daterangepicker/daterangepicker.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/util.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css';?>">



<body style="background-color: #666666;height:20px">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?php echo base_url().'login/validate';?>" method="post">
					<span class="login100-form-title p-b-43">
						Login
					</span>


                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="name">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" name="password" type="password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>



                <div class="container-login100-form-btn">
                    <button style="background-color: #333333;" class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
            </form>

            <div class="login100-more" style="background-image: url(<?php echo base_url().'assets/images/bg-08.jpg';?>); height: 880px;">
            </div>
        </div>
    </div>
</div>