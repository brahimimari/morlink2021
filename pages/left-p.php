<?php 
$path = $_SERVER['PHP_SELF']; // $path = /home/httpd/html/index.php
$file = basename ($path);
?>
<style>
@media screen and (max-width: 50em) {
			
			aside{
					display:none !important;
			}
		}
</style>		
<aside class="col-lg-3 col-md-4 col-sm-4 m_xs_bottom_30 p_top_4">
	<section class="m_bottom_30">
								<h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Categories</h5>
								<hr class="divider_bg m_bottom_23">
								<ul class="categories_list second_font w_break">
									<?php
												error_reporting(0);
												include('pages/database.php');
												$sql_menu = 'SELECT * FROM `categorie` ORDER BY `id` ASC';
												$res = mysql_query($sql_menu);
												while($data = mysql_fetch_array($res))
												{
												?>
									
									<li class="relative"><a class="fs_large_0 d_inline_b tr_delay" href="<?php echo ($data['categorie']); ?>-<?php echo $data['id']; ?>.html"><?php echo ($data['categorie']); ?></a><button class="open_sub_categories fs_medium"></button>
										<!--second level-->
										<ul class="d_none">
											<?php
											error_reporting(0);
												$id_categ = $data['id'];
												$sql_2 = "SELECT * FROM `famille` where id_categ = $id_categ ORDER BY `id` ASC";
												$res2 = mysql_query($sql_2);
												while($data2 = mysql_fetch_array($res2))
												{
												?>
											<li style="margin-left:13px;" class="relative"><a href="<?php echo ($data2['famille']); ?>-<?php echo $data2['id']; ?>-<?php echo $id_categ; ?>.html" class="tr_delay d_inline_b">- <?php echo ($data2['famille']); ?></a></li>
											<?php }?>
										</ul>
									</li>
									 <?php } ?>
									 
								</ul>
							</section>
 </aside>
