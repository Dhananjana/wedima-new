<style>
    body {
        padding-top: 90px;
    }
    .panel-register {
        border-color: #ccc;
        -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    }
    .panel-register>.panel-heading {
        color: #00415d;
        background-color: #fff;
        border-color: #fff;
        text-align:center;
    }
    .panel-register>.panel-heading a{
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-register>.panel-heading a.active{
        color: #029f5b;
        font-size: 18px;
    }
    .panel-register>.panel-heading hr{
        margin-top: 10px;
        margin-bottom: 0px;
        clear: both;
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    }
    .panel-register input[type="text"],.panel-register input[type="email"],.panel-register input[type="password"] {
        height: 45px;
        border: 1px solid #ddd;
        font-size: 16px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-register input:hover,
    .panel-register input:focus {
        outline:none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-color: #ccc;
    }
    .btn-login {
        background-color: #59B2E0;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #59B2E6;
    }
    .btn-login:hover,
    .btn-login:focus {
        color: #fff;
        background-color: #53A3CD;
        border-color: #53A3CD;
    }
    .forgot-password {
        text-decoration: underline;
        color: #888;
    }
    .forgot-password:hover,
    .forgot-password:focus {
        text-decoration: underline;
        color: #666;
    }

    .btn-register {
        background-color: #1CB94E;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #1CB94A;
    }
    .btn-register:hover,
    .btn-register:focus {
        color: #fff;
        background-color: #1CA347;
        border-color: #1CA347;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="panel panel-register">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3"><a href="#" class="active" id="customer-form-link"> Customer</a></div>
                        <div class="col-md-3"><a href="#" id="vendor-form-link">Vendor</a></div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body" style="margin-left: 5%">
                    <div class="row">
                        <form id="customer-form" action="<?php echo base_url().'register/customer';?>" method="post" role="form" style="display: block;">
                            <div class="container">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name: </label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sunil" name="name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email: </label>
                                    <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Sunil@gmail.com">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password: </label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                </div>

                                <button class="btn btn-success" type="submit">Register</button>
                            <br>
                    </div>
                        </form>
                        <form id="vendor-form" action="<?php echo base_url().'register/vendor';?>" method="post" role="form" style="display: none;">
                            <div class="container">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name: </label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sunil" name="name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email: </label>
                                    <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Sunil@gmail.com">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password: </label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Comapany Name: </label>
                                    <input name="company" type="text" class="form-control" id="exampleInputPassword1" placeholder="Sunil Bridal Dressing">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Category: </label>
                                    <select name="category">
                                        <option value="1">locations</option>
                                        <option value="2">photographers</option>
                                        <option value="3">transporters</option>
                                        <option value="4">entertainment</option>
                                        <option value="5">bridalwear</option>
                                        <option value="6">stationary</option>
                                        <option value="7">beautician</option>
                                        <option value="8">weddingCake</option>
                                        <option value="9">jewellary</option>
                                        <option value="10">flowerWorks</option>
                                        <option value="11">traditionalTeams</option>
                                        <option value="12">groomWear</option>

                                    </select>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Service Area: </label>
                                    <input name="service" type="text" class="form-control" id="exampleInputPassword1" placeholder="Colombo,Kaluthara">
                                </div>
                                <br>

                                <button class="btn btn-success" type="submit">Register</button>
                                <br>
                            </div>
                        </form>
                </div>
                    <br>
            </div>
        </div>
    </div>
</div>
    <br>
</div>


<script>
    $(function() {

        $('#customer-form-link').click(function(e) {
            $("#customer-form").delay(100).fadeIn(100);
            $("#vendor-form").fadeOut(100);
            $('#vendor-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#vendor-form-link').click(function(e) {
            $("#vendor-form").delay(100).fadeIn(100);
            $("#customer-form").fadeOut(100);
            $('#customer-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });

</script>