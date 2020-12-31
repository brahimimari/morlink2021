	 
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.min.css">
		<link rel="stylesheet" href="js/dist/youCover.css">
					<div class="box-wrapper">
						 <?php
							include('pages/database.php');
							$sql_menu = "select * from video order by id DESC limit 0,6 ";
							$res = mysql_query($sql_menu);
							while($data = mysql_fetch_array($res))
							{
							?>
								<div style="margin-bottom:12px" class="col-md-6">
									<div data-youcover data-fancybox data-image='https://img.youtube.com/vi/<?php echo utf8_encode($data['video']); ?>/hqdefault.jpg' data-id='<?php echo utf8_encode($data['video']); ?>'></div>
									<h3 style="color: #ee7f01;font-size:12px;margin-top:12px"><?php echo utf8_encode($data['titre']); ?></h3>
								</div>	
						<?php } ?>
					</div> 
				 

 	<script src='js/dist/youCover.js'></script>
