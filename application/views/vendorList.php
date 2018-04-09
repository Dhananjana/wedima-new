<br><br><br><br><br>
<div class="container">
    <?php foreach ($vendors as $vendor) {
        ?>
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo  $vendor->name?></h5>
<!--                    <p class="card-text">--><?php //echo  $vendor->description?><!--.</p>-->
                    <a href="#" class="btn btn-primary">Look In</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<br>
