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
		<?php echo $this->render('views/organizations/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
    <main class="a_main">
        <div class="a_main_content">
            <div class="container">
            	<div class="row">
            		<div class="col-md-8">
            			<div class="a_content">
            				<h4 class="a_h4" style="margin: 0 0 10px 0;"><?php echo $organizations['0']['oname']; ?></h4>
                            <span ><?php echo $organizations['0']['odate_created']; ?></span>
            				<figure class="a_feature_img">
            					<img class="a_news_img" src="<?php echo $BASE; ?>/ui/images/<?php echo $organizations['0']['opict']; ?>" alt="">
            				</figure>
            				<p class="a_p"><?php echo $organizations['0']['odesc']; ?></p>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<div class="a_sidebar">
	            			<h4 class="a_h4">О руководителе</h4>
            				<div class="a_authur clearfix">
	            				<figure>
                            		<img class="a_img_min" src="<?php echo $BASE; ?>/ui/images/<?php echo $organizations['0']['dphoto']; ?>" alt="">
                            	</figure>
                            	<div class="a_author_text ">
                            		<h4><?php echo $organizations['0']['dname']; ?> <?php echo $organizations['0']['dsname']; ?></h4>
                            		<strong>Контакты</strong>
                            		<ul class="a_list">
                            			<li><a href="<?php echo $organizations['0']['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $organizations['0']['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $neorganizationsws['0']['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $organizations['0']['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                            		</ul>
                            	</div>
                            </div>
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