<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- <title>My Event Calendar (Evencal)</title> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/colorbox.css"/>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.colorbox-min.js"></script>
	
</head>

<body>
	<div >
		<div class="calendar">
			<?php echo $notes?>			
			<div class="detail_event col-lg-12" >
			<!-- <h6 class="s_date">Detail Event <?php echo "$day $month $year";?></h6> -->
				<?php 
					if(isset($events)){
						$i = 1;
						foreach($events as $e){
						 if($i % 2 == 0){
								echo '<div class="info1"><h4>'.$e['time'].'<img src="'.base_url().'assets/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>'.$e['event'].'</p></div>';
							}else{
								echo '<div class="info2"><h4>'.$e['time'].'<img src="'.base_url().'assets/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>'.$e['event'].'</p></div>';
							} 
							$i++;
						}
					}else{
						
					}
				?>
				<input type="button" name="add" value="Add Event" val="<?php echo $day;?>" class="add_event"/>
			</div>
		</div>
	</div>
	<script>
		$('body').on('click','.detail',function(){
			$(".s_date").html("Detail Event for "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '<input type="button" name="add" value="Add Event" val="'+day+'" class="add_event"/>';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("evencal/detail_event");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info1"><h4>'+value.time+'<img src="<?php echo base_url();?>assets/images/delete.png" class="delete" alt="" title="delete this event" day="'+day+'" val="'+value.id+'" /></h4><p>'+value.event+'</p></div>';
							}else{
								html = html+'<div class="info2"><h4>'+value.time+'<img src="<?php echo base_url();?>assets/images/delete.png" class="delete" alt="" title="delete this event" day="'+day+'" val="'+value.id+'" /></h4><p>'+value.event+'</p></div>';
							} 
							i++;
						});
					}else{
						
					}
					html = html+add;
					$( ".detail_event" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
		});
		$("body").on("click",'.delete', function() {
			if(confirm('Are you sure delete this event ?')){
				var deleted = $(this).parent().parent();
				var day =  $(this).attr('day');
				var add = '<input type="button" name="add" value="Add Event" val="'+day+'" class="add_event"/>';
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: "<?php echo site_url("evencal/delete_event");?>",
					data:{<?php echo "year: $year, mon: $mon";?>, day: day,del: $(this).attr('val')},
					success: function(data) {
						if(data.status){
							if(data.row > 0){
								$('.d'+day).html(data.row);
							}else{
								$('.d'+day).html('');
								$( ".detail_event" ).fadeOut("slow").fadeIn("slow");
							}
							deleted.remove();
						}else{
							alert('an error for deleting event');
						}
					}
				});
			}
		});
		$("body").on('click','.add_event', function(){
			$.colorbox({ 
					overlayClose: false,
					href: '<?php echo site_url('evencal/add_event');?>',
					data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>, day: $(this).attr('val')}
			});
		});
</script>
</body>
</html>