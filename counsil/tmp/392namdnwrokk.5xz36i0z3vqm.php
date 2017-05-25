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
		<?php echo $this->render('views/contain/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
   <main class="a_main">
	   <!--listing  section start here-->
        <div class="a_section a_view_section">
            <div class="container">
                <div class="row">
	                <h4 class="a_h4">ПРЕДСЕДАТЕЛЬ И СЕКРЕТАРЬ СТУДСОВЕТА НИУ ВШЭ</h4>
	                <div class="col-sm-6">
	                    <div class="a_f_block_team a_list_members">
		                    <?php foreach (($people1?:array()) as $p): ?>
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $p['pphoto']; ?>">
			                    <h4><?php echo $p['pname']; ?> <?php echo $p['psurname']; ?></h4>
			                    <strong><span><?php echo $p['dname']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo $p['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				                    </ul>
			                    </div>
		                    </div>
		                    <?php endforeach; ?>
	                    </div>
	                </div>
	                <div class="col-sm-6">
	                    <div class="a_f_block_team a_list_members">
		                    <?php foreach (($people2?:array()) as $p): ?>
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $p['pphoto']; ?>">
			                    <h4><?php echo $p['pname']; ?> <?php echo $p['psurname']; ?></h4>
			                    <strong><span><?php echo $p['dname']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo $p['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
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
	                <h4 class="a_h4">РУКОВОДИТЕЛИ КОМИТЕТОВ</h4>
	                <?php foreach (($people3?:array()) as $p): ?>
	                <div class="col-sm-4">
	                    <div class="a_f_block_team a_list_members">
		                    
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $p['pphoto']; ?>">
			                    <h4><?php echo $p['pname']; ?> <?php echo $p['psurname']; ?></h4>
			                    <strong><span><?php echo $p['dname']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo $p['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				                    </ul>
			                    </div>
		                    </div>
		                   
	                    </div>
	                </div>
	                 <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="a_section a_view_section">
            <div class="container">
                <div class="row">
	                <h4 class="a_h4">ЧЛЕНЫ СТУДСОВЕТА</h4>
	                <?php foreach (($people4?:array()) as $p): ?>
	                <div class="col-sm-4">
	                    <div class="a_f_block_team a_list_members">
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $p['pphoto']; ?>">
			                    <h4><?php echo $p['pname']; ?> <?php echo $p['psurname']; ?></h4>
			                    <strong><span><?php echo $p['dname']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo $p['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $p['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				                    </ul>
			                    </div>
		                    </div>
	                    </div>
	                </div>
	                 <?php endforeach; ?>
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