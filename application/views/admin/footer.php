<script>
$(function(){
	//$('#numOfNot').html('New');
    var tmp=null;
	$.ajax({
        type: "GET",
        url: "<?php echo base_url();?>/Admin/vendorAccess",
        success: function(data){
            console.log('success',data);
        }
    });
});
</script>