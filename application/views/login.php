<style>
    @import url(http://fonts.googleapis.com/css?family=Roboto:400);
    body {
        background-color:#fff;
        -webkit-font-smoothing: antialiased;
        font: normal 14px Roboto,arial,sans-serif;
    }

    .container {
        padding: 25px;
        position: fixed;
    }

    .form-login {
        background-color: #EDEDED;
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 15px;
        border-color:#d2d2d2;
        border-width: 5px;
        box-shadow:0 1px 0 #cfcfcf;
    }

    h4 {
        border:0 solid #fff;
        border-bottom-width:1px;
        padding-bottom:10px;
        text-align: center;
    }

    .form-control {
        border-radius: 10px;
    }

    .wrapper {
        text-align: center;
    }

</style>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <?php echo form_open("login/validate"); ?>
            <div class="form-group">
                <label for="exampleFormControlFile1">Email</label>
                <input class="form-control" name="name" type="email" placeholder="Enter user Name">
                <?php echo form_error('name'); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Password</label>
                <input class="form-control" name="password" type="password" >
                <?php echo form_error('firstname'); ?>
            </div>

            <button type="submit" class="btn btn-primary">Sign In</button>
            <?php echo form_close(); ?>


        </div>
    </div>
</div>