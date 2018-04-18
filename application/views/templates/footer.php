<style>
    #return-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.7);
        color: white;
        font-weight: 200;
        width: 50px;
        height: 50px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top i {
        color: #fff;
        margin: 0;
        position: relative;
        left: 16px;
        top: 13px;
        font-size: 19px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top:hover {
        background: rgba(0, 0, 0, 0.9);
    }
    #return-to-top:hover i {
        color: #fff;
        top: 5px;
    }
</style>
<footer id="contactUs">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-top-left">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +94 71 171 8822</p>
                </div>
                <div class="col-md-6 footer-top-left">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> Email :<a href="mailto:example@email.com"> teamforesight@gmail.com</a></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-grids">
                <div class="row">
                    <div class="col-md-3 footer-bottom-right">
                        <h5 style="text-align: center;">Contact Us</h5>

                        <p style="text-align: center;">We’d love to hear from you</p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-md-4 footer-bottom-right">
                        <h5 style="text-align: center;">Newsletter</h5>

                        <form action="#" method="post" >
                            <input type="text" placeholder="Subscribe" name="Subscribe" required="">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-md-3 footer-bottom-right">
                        <h5 style="text-align: center;">We are social</h5>
                        <div class="agileinfo-social-grids" style="text-align: center;">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Copyright © 2018. All rights reserved | Design by <a href="https://www.facebook.com/TeamForesight1/">Team Foresight</a></p>
        </div>
    </div>
</footer>



<script>
    // ===== Scroll to Top ====
    $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
    scrollTop : 0                       // Scroll to top of body
    }, 500);
    });
</script>

</body>
</html>
