<?php echo $this->render('views/base/header/head.htm',$this->mime,get_defined_vars(),0); ?>
<body>

<?php echo $this->render('views/base/header/nav.htm',$this->mime,get_defined_vars(),0); ?>
<div id="a_main_wrapper">
    <header class="a_header">
	      
        <!--login  Modal -->
		<?php echo $this->render('views/base/header/modal.htm',$this->mime,get_defined_vars(),0); ?>
        <!--main menu section-->
		<?php echo $this->render('views/base/header/burger-menu.htm',$this->mime,get_defined_vars(),0); ?>
        <!--Search  Modal -->
		<?php echo $this->render('views/commitees/blogs/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
   <main class="a_main">
	   <!--listing  section start here-->
        <div class="a_section a_view_section">
            <div class="container">
                <div class="row">
			        <div class="a_section a_view_section">
			            <div class="container">
			                <div class="row">
				                	<?php foreach (($bnews?:array()) as $bnew): ?>
					                	<div class="col-sm-4">
				                        <div class="a_profile">
				                            <span><?php echo $bnew['bnd']; ?></span>
				                            <h5 class="a_h5"><?php echo $bnew['bnname']; ?></h5>
				                             <a href="/counsil/commitees/blogs/link/<?php echo $link; ?>/detail/<?php echo $bnew['nid']; ?>"> 
				                            	<figure>
				                            		<img class="a_img" src="<?php echo $BASE; ?>/ui/images/<?php echo $bnew['picture']; ?>" alt="">
				                            	</figure>
				                             </a>
				                            <p class="a_p"><?php echo $this->raw(substr($bnew['bntx'],0,480).'...'); ?></p>
				                        </div>
			                    	</div>
				                <?php endforeach; ?>
				                
	                    	</div>
	                    	<div class="a_control">
		                        <a class="left carousel-control" href="/counsil/commitees/blogs/link/<?php echo $link; ?>/<?php echo $offsetBack; ?>" data-slide="prev"> 
		                            <i class="fa fa-chevron-left" aria-hidden="true"></i> 
		                        </a>
		                        <a class="right carousel-control" href="/counsil/commitees/blogs/link/<?php echo $link; ?>/<?php echo $offset; ?>" data-slide="next"> 
		                            <i class="fa fa-chevron-right" aria-hidden="true"></i> 
		                        </a>
				            </div>
			            </div>
			        </div>
                </div>
            </div>
        </div>
       
	</main>


    <!--footer start here-->
<?php echo $this->render('views/base/footer/footer.htm',$this->mime,get_defined_vars(),0); ?>
</div>
    <!--Bootstrap core JavaScript-->
    <script src="<?php echo $BASE; ?>/ui/js/jquery.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/bootstrap.min.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/custom.js"></script>
</body>
</html>