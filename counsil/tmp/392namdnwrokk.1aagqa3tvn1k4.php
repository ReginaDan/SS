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
		<?php echo $this->render('views/ombudsman/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
    
          <main class="a_main">
        <div class="a_main_content">
            <div class="container">
	            <h4 class="a_h4">ОБРАЩЕНИЕ УПОЛНОМОЧЕННОГО</h4>
            	<div class="row">
            		<div class="a_content">
					<?php foreach (($ombudsman?:array()) as $om): ?>
	                <div class="col-sm-4">
	                    <div class="a_f_block_team a_list_members">
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $om['pphoto']; ?>">
			                    <h4><?php echo $om['pname']; ?> <?php echo $om['psurname']; ?></h4>
			                    <strong><span><?php echo $om['dname']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo om.pe; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $om['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $om['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $om['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				                    </ul>
			                    </div>
		                    </div>
	                    </div>
	                 </div>
	                 <?php endforeach; ?>
	                </div>
	            	<div class="col-md-7">
            			<?php echo $this->raw($allocution['0']['text']); ?>

	            	</div>
            		</div>
            		<div class="a_section a_view_section">
			            <div class="container">
			                <div class="row">
				                <h4 class="a_h4">КОМАНДА</h4>
				                 <?php foreach (($member?:array()) as $mem): ?>
					                <div class="col-sm-4">
					                    <div class="a_f_block_team a_list_members">
						                    <div class="a_member">			                   
								                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $mem['pphoto']; ?>">
							                    <h4><?php echo $mem['pname']; ?> <?php echo $mem['psurname']; ?></h4>
							                    <strong><span><?php echo $mem['dname']; ?></span></strong>
							                    <div class="contacts">
								                    <ul class="a_list a_social_icons_members">
									                    <li><a href="<?php echo $mem['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
								                        <li><a href="<?php echo $mem['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								                        <li><a href="<?php echo $mem['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								                        <li><a href="<?php echo $mem['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								                    </ul>
							                    </div>
						                    </div>
					                    </div>
					                </div>
					              <?php endforeach; ?>
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