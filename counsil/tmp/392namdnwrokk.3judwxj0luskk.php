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
		<?php echo $this->render('views/commitees/info/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
       <main class="a_main">
        <div class="a_main_content">
            <div class=" a_section a_faq_section">
	            <div class="container">
                <h4 class="a_h4">О КОМИТЕТЕ</h4>
	                <div class="row">
	                    <div class="col-md-4">
		                    <figure class="a_feature_img">
	            				<img class="a_img" src="<?php echo $BASE; ?>/ui/images/<?php echo $commitee['0']['logo']; ?>" alt="">
	            			</figure>
	                    </div>
	                    <div class="col-md-8">
	                        <div class="tab-content">
	                            <div id="content1" class="tab-pane fade in active">
	                                <p  class="a_p"><?php echo $commitee['0']['info']; ?></p>
	                            </div>

	                        </div>
	                    </div>
	                </div>
	            </div>
            </div>
        </div>
          <div class="a_section a_view_section">
            <div class="container">
                <div class="row">
	                <h4 class="a_h4">РУКОВОДИТЕЛЬ</h4>
	                <div class="col-md-4 col-md-offset-4 col-sm-8">
	                    <div class="a_f_block_team a_list_members">
		                    <?php foreach (($director?:array()) as $dir): ?>
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $dir['pphoto']; ?>">
			                    <h4><?php echo $dir['pname']; ?> <?php echo $dir['psurname']; ?></h4>
			                    <strong><span><?php echo $dir['dname']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo $dir['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $dir['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $dir['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $dir['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				                    </ul>
			                    </div>
		                    </div>
		                    <?php endforeach; ?>
	                    </div>
                	</div>
                </div>
            </div>
        </div>  
        <div class="a_section a_view_section">
            <div class="container">
                <div class="row">
	                <h4 class="a_h4">КОМАНДА</h4>
	                <div class="col-sm-4">
					<div class="a_f_block_team a_list_members">
		                    <?php foreach (($member?:array()) as $mem): ?>
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