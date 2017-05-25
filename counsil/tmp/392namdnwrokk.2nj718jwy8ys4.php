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
		<?php echo $this->render('views/locals/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
   <main class="a_main">
	   <!--listing  section start here-->
        <div class="a_section a_view_section">
            <div class="container">
                <div class="row">
	                <h4 class="a_h4">СОСТАВ</h4>
	                <div class="col-sm-6">
	                    <div class="a_f_block_team a_list_members">
		                    <?php foreach (($head?:array()) as $h): ?>
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $h['pphoto']; ?>">
			                    <h4><?php echo $h['pname']; ?> <?php echo $h['psurname']; ?></h4>
			                    <strong><span><?php echo $h['ppost']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo $h['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $h['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $h['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $h['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				                    </ul>
			                    </div>
		                    </div>
		                    <?php endforeach; ?>
	                    </div>
	                </div>
	                
	                <div class="col-sm-6">
	                    <div class="a_f_block_team a_list_members">
		                    <?php foreach (($secretary?:array()) as $sec): ?>
		                    <div class="a_member">			                   
				                    <img src="<?php echo $BASE; ?>/ui/images/<?php echo $sec['pphoto']; ?>">
			                    <h4><?php echo $sec['pname']; ?> <?php echo $sec['psurname']; ?></h4>
			                    <strong><span><?php echo $sec['ppost']; ?></span></strong>
			                    <div class="contacts">
				                    <ul class="a_list a_social_icons_members">
					                    <li><a href="<?php echo $sec['pe']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $sec['pf']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $sec['pt']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                        <li><a href="<?php echo $sec['pv']; ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				                    </ul>
			                    </div>
		                    </div>
		                    <?php endforeach; ?>
	                    </div>
	                </div>
	                
                        <div class="a_faq_list">
                            <ul class="a_list_dep " style=" -webkit-padding-start: 0px;">
	                            <!-- 	                            <?php echo $i=0; ?> -->
	                            <?php foreach (($schools?:array()) as $sch): ?>
<!-- 	                            <?php echo $i++; ?> -->
                                 <?php if ($i=='1'): ?> <li class="active" >  <?php else: ?><li> <?php endif; ?> <a href="#<?php echo $sch['id']; ?>" data-toggle="tab"><?php echo $sch['name']; ?></a></li>	
                                <?php endforeach; ?>
                            </ul>
                        </div>
						
						 <div class="col-sm-12">
	                        <div class="tab-content" >
		                           <!-- 	                            <?php echo $i=0; ?> -->

		                        <?php foreach (($schools?:array()) as $sch): ?>
		                        <!-- 	                            <?php echo $i++; ?> -->

                                	 <?php if ($i=='1'): ?> <div id="<?php echo $sch['id']; ?>" class="fade in tab-pane active"><?php else: ?> <div id="<?php echo $sch['id']; ?>" class="fade in tab-pane "><?php endif; ?>
			                        	<?php foreach (($member?:array()) as $mem): ?>
											<?php if ($sch['id'] == $mem['ps']): ?>
												<div class="col-sm-4">
													<div class="a_f_block_team a_list_members">
														<div class="a_member" >	
															<img src="<?php echo $BASE; ?>/ui/images/<?php echo $mem['pphoto']; ?>">
															<h4><?php echo $mem['pname']; ?> <?php echo $mem['psurname']; ?></h4>
															<strong><span><?php echo $mem['ppost']; ?></span></strong>
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
											
											<?php endif; ?>
										<?php endforeach; ?>
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
	                <h4 class="a_h4">БЛОГ</h4>
	                	<?php foreach (($bnews?:array()) as $bnew): ?>
		                	<div class="col-sm-4">
	                        <div class="a_profile">
	                            <span><?php echo $bnew['bnd']; ?></span>
	                            <a href="/counsil/locals/blogs/link/<?php echo $link; ?>/detail/<?php echo $bnew['id']; ?>"> 
	                            <h5 class="a_h5"><?php echo $bnew['bnname']; ?></h5>
	                            </a>
	                            <p class="a_p"><?php echo $bnew['bntx']; ?></p>
	                        </div>
                    	</div>
	                <?php endforeach; ?>
	            </div>
            </div>
        </div>
        <div class="a_section a_questions_section">
            <div class="container">
                <div class="row">
	                <h4 class="a_h4">ДОКУМЕНТЫ</h4>
	                <?php foreach (($categories?:array()) as $cat): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="a_q_box" style="margin-bottom: 20px;">
                            <h4><?php echo $cat['cname']; ?>

	                           <a href="/counsil/documents_category_detail/<?php echo $cat['cid']; ?>">Все</a></h4>
                            <div class="a_q_list">
                                <ul class="a_list">
	                                <?php echo $documentsgetter($cat['cid'], $link); ?>


	                               
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

	</main>


    <!--footer start here-->
<?php echo $this->render('/views/base/footer/footer.htm',$this->mime,get_defined_vars(),0); ?>
</div>
    <!--Bootstrap core JavaScript-->
    <script src="<?php echo $BASE; ?>/ui/js/jquery.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/bootstrap.min.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/custom.js"></script>
</body>
</html>