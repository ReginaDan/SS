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
		<?php echo $this->render('views/about/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
       <main class="a_main">
        <div class="a_main_content">
            <div class="container">
	            <h4 class="a_h4">ОСНОВНАЯ ИНФОРМАЦИЯ</h4>
            	<div class="row">
            		<div class="a_content">
	            		
	            			<div class="col-md-4">
	            				<figure class="a_feature_img">
	            					<img class="a_logo" src="<?php echo $BASE; ?>/ui/images/<?php echo $council['0']['picture']; ?>" alt="">
	            				</figure>
	            			</div>
	            			<div class="col-md-7">
								<p  class="a_p"><?php echo $this->raw($council['0']['info']); ?></p>
	            			</div>
            		
            		</div>
            	</div>
            </div>
        </br>
         </br>
        </div>
      
           <div class="a_section a_listing_section">
            <div class="container">
	            <h4 class="a_h4">ЗАДАЧИ СТУДСОВЕТА</h4>
                <div class="row">
	                <?php foreach (($missions?:array()) as $mis): ?>
	                    <div class="a_missions col-xs-6 col-sm-4">
	                        <img class="img-responsive center-block" src="<?php echo $BASE; ?>/ui/images/<?php echo $mis['picture']; ?>"><p><?php echo $mis['name']; ?></p>
	                    </div>
                    <?php endforeach; ?>
                 </div>
            </div>
        </div>
               <div class=" a_section a_faq_section">
	            <div class="container">
	                <h4 class="a_h4">КОМИТЕТЫ СТУДСОВЕТА</h4>
	                <div class="row">
	                    <div class="col-md-4">
	                        <div class="a_faq_list">
	                            <ul class="a_list">
		                       <?php foreach (($commitees?:array()) as $com): ?>
	                               <?php if ($com['id']=='1'): ?> <li class="active" >  <?php else: ?><li> <?php endif; ?> <a href="#<?php echo $com['id']; ?>" data-toggle="tab"><?php echo $com['name']; ?></a></li>	
		                       <?php endforeach; ?>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-md-7 col-md-offset-1">
	                        <div class="tab-content">
		                        <?php foreach (($commitees?:array()) as $com): ?>
	                           <?php if ($com['id'] == 1): ?>  <div id="<?php echo $com['id']; ?>" class="tab-pane fade in active"> <?php else: ?><div id="<?php echo $com['id']; ?>" class="tab-pane fade"><?php endif; ?>
	                                <p  class="a_p"><?php echo $this->raw($com['info']); ?></p>
	                            </div>
		                        <?php endforeach; ?>
	                        </div>
	                    </div>
	                </div>
                </div>  
               </div>
               
                       	<div class="container">
			<h4 class="a_h4" style="margin-top: 50px;">ПАРТНЕРЫ СТУДСОВЕТА</h4>
        	</div>
	         <div class=" a_section a_testimonial_section">		        
	            <div class="container">
	                <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
	                    <!-- Wrapper for slides -->
	                    <div class="carousel-inner">
	                        <div class="item active">
		                        <ul class="a_list_partners">
			                  	   <?php foreach (($partners?:array()) as $par): ?>
		                            <li>
			                            <h5 class="a_h5"><?php echo $par['name']; ?></h4>
			                            <span><a href="<?php echo $par['link']; ?>"><img src="<?php echo $BASE; ?>/ui/images/<?php echo $par['photo']; ?>"></a></span>
		                            </li>
			                  	   <?php endforeach; ?>
			                  	   
		                        </ul>                        
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