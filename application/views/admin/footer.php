<script>
    $(document).ready(function() {
    
        $.ajax({
                url: '<?php echo base_url();?>/Admin/vendorAccess',
                type: 'GET',
                dataType:'json',
                async: true,
                success: function(res) {
                    
                    if(res && res.length) {
                        $('#numOfNot').show();
                        $('#notify').html('<a href="#" class="dropdown-item"><i class="fa fa-file mr-2"></i> '+res.length+' vendors will expire in a week</a>');
                    
                    }
                    else{
                        $('#numOfNot').hide();
                        $('#notify').html('<div class="dropdown-item">No notifications</div>');
                    }
                },
                error: function(){
                    console.log('error loading notifications');
                },
                timeout: 3000
            });    
        });
    
</script>

