<br><br><br><br><br>
<div class="container">
    <div class="row">
        <?php foreach($vendors as $vendor){?>
        <div class="col-lg-4 col-sm-6 col-xs-3 portfolio-item">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo base_url().'uploads/profile/'.$vendor->pp?>" alt="Card image cap" style="max-height: 350px;max-width: 350px">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo  $vendor->name?></p>
                    </h4>
                    <p class="card-text"><?php
                        $limited_word= word_limiter($vendor->description,40);
                        echo $limited_word;

                        ?></p>
                    <a href="#" class="btn btn-primary">Look In</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<br>
