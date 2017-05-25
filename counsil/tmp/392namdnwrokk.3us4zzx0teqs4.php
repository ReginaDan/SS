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
		<?php echo $this->render('views/commitees/projects/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
   <main class="a_main">
       <div class="a_section a_view_section">
            <div class="container">
                <div class="row">
	                <div class="col-md-10 col-md-offset-1">
	                    <div class="a_f_block">
		                    <h4 class="a_h4">Последние проекты</h4>
                             <div class="a_authur clearfix">
	                            <?php foreach (($projects?:array()) as $proj): ?>
	                            <div class="col-xs-12" style="padding: 0; margin-bottom: 30px">
	                            <div class="col-xs-12 col-sm-5" style="padding: 0">
		                            <a href="#">
	                            	<figure>
	                            		<img class="a_img" src="<?php echo $BASE; ?>/ui/images/<?php echo $proj['picture']; ?>" alt="">
	                            	</figure>
                            	</a>
	                            </div>
	                            <div class="col-xs-12 col-sm-7" style="padding: 0">
                            	<div class="a_author_text" style="padding: 0">
                            		<h4><?php echo $proj['pname']; ?></h4>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $proj['pdate']; ?></span>
                            		<p class="a_p"><?php echo $this->raw(substr($proj['pdesc'],0,270).'...'); ?></p>
                            	</div>
	                            </div>
	                            </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="a_control">
		                        <a class="left carousel-control" href="/counsil/commitees/projects/link/<?php echo $link; ?>/<?php echo $offsetBack; ?>" data-slide="prev"> 
		                            <i class="fa fa-chevron-left" aria-hidden="true"></i> 
		                        </a>
		                        <a class="right carousel-control" href="/counsil/commitees/projects/link/<?php echo $link; ?>/<?php echo $offset; ?>" data-slide="next"> 
		                            <i class="fa fa-chevron-right" aria-hidden="true"></i> 
		                        </a>
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