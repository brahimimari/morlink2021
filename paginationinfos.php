<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
		
		include('pages/database.php');

        $total_pages_sql = "SELECT COUNT(*) FROM from infos order by id DESC";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result);
        $total_pages = ceil($total_rows / $no_of_records_per_page);

       echo $sql = "SELECT * FROM infos order by id DESC LIMIT $offset, $no_of_records_per_page ";
	   
        $res_data = mysqli_query($conn,$sql);
        while($data33 = mysqli_fetch_array($res_data)){
          ?>
		  
		  <div class="category_isotope_item list_view_type">
									<figure class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container">
										<!--image & buttons & label-->
										
										<figcaption class="bg_white relative p_bottom_0">
											<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div style="margin: 9px !important;">
													<div class="d_block">
														<img src="images/infos/<?php echo utf8_encode($data33['photo']); ?>" alt="" class="">
													</div>
													 
												</div>
 										</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<h4 class="second_font sc_hover d_xs_block m_bottom_10"><?php echo utf8_encode($data33['titre']); ?> </h4> 
													<h6 class="second_font"><?php echo utf8_encode($data33['date']); ?> </h6> 
													 
													<hr class="d_none divider_light m_bottom_15">
													<p class="fw_light d_none m_bottom_14 color_grey">
													
													<?php 
													if($data33['plus'] == 0)
													{
														echo utf8_encode($data33['desc']);
													} else {
													echo substr(utf8_encode($data33['desc']), 0, 100); ?>
													
													<?php 
													}
													if(!empty($data33['lien'])) ?>
													
													<a  style="color:#000;font-weight: bold;" target ="_blank" href="<?php echo $data33['lien']; ?>">  <?php echo $data33['lien']; ?></a>
													  
													<?php 
													if($data33['plus'] == '1'){
													?>
													<br />
													<a  style="float:right;color:#ee7f01;font-weight: bold;" href="LirelaSuite.php?id=<?php echo $data33['id']; ?>">  Lire la Suite</a>		
													<?php } ?>
													
													  
													</p>
													 
 												</div>
												 
											</div>
 											<button class="grey state_2 tr_delay ">
 											 </button>
 											
										</figcaption>
									</figure>
								</div>
								
		  <?php 
        }
        mysqli_close($conn);
    ?>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>