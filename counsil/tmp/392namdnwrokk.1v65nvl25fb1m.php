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
	   <!--listing  section start here-->
        <div class="a_sectionm a_view_section">
            <div class="container">
                <div class="row">
	                <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12">
	                    <div class="a_f_block">
	                        <h4 class="a_h4" style="margin: 30px 0 30px;">Организации</h4>
          
                            <div class="a_authur clearfix">
	                            <?php foreach (($organizations?:array()) as $org): ?>
	                            <div class="col-xs-12" style="padding: 0; margin-bottom: 30px">
	                            <div class="col-xs-12 col-sm-4" style="padding: 0">
		                            <a href="/counsil/organizations_detail/<?php echo $org['id']; ?>">
	                            	<figure>
	                            		<img class="a_img" src="<?php echo $BASE; ?>/ui/images/<?php echo $org['opict']; ?>" alt="">
	                            	</figure>
                            	</a>
	                            </div>
	                            <div class="col-xs-12 col-sm-8" style="padding: 0">
                            	<div class="a_author_text" style="padding: 0">
                            		<h4><?php echo $org['oname']; ?></h4>
                            		<span><i class="fa fa-user" aria-hidden="true"></i> <?php echo $org['dname']; ?> <?php echo $org['dsname']; ?></span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $org['odate_created']; ?></span>
                            		<p class="a_p"><?php echo substr($org['odesc'],0,370).'...';; ?></p>
                            	</div>
	                            </div>
	                            </div>
                            <?php endforeach; ?>
                            </div>
                            
                        </div>
                	</div>
<!--
                	<div class="col-xs-12 col-sm-4  col-md-3 col-md-offset-1">
            			<div class="a_sidebar">
            				<h4 class="a_h4" style="margin-top: 30px;">Категории</h4>
            				<ul class="a_list_cat a_categories_list">
	            				<?php foreach (($org_categories?:array()) as $oc): ?>	
                                	<li><a href="#."><i class="fa fa-chevron-right" aria-hidden="true"></i><?php echo $oc['cn']; ?></a></li>
	            				<?php endforeach; ?>
                            </ul>
                            <h4 class="a_h4">Тэги</h4>
                            <div class="a_tags clearfix">
                                <ul class="a_list">
	                                <?php foreach (($org_categories?:array()) as $oc): ?>	
                                    <li><a href="#."><?php echo $oc['cn']; ?></a></li>
	                                <?php endforeach; ?>
                                </ul>
                            </div>
            			</div>
                    </div>
-->
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