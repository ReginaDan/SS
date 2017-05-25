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
		<?php echo $this->render('views/documents/banner.htm',$this->mime,get_defined_vars(),0); ?>
        <!--banner section-->
    </header>
    <main class="a_main">
        <!--questions  section start here-->
        <div class=" a_section a_faq_section">
	            <div class="container">
                	<div class="row">
                    	<div class="col-md-6 col-md-offset-1">
	                    	<h4 class="a_h4"><?php echo $documents['0']['cname']; ?></h4>
						    <ul class="a_list a_arrow_list">
			
	                                <?php foreach (($documents?:array()) as $doc): ?>
                                    <li><a href="<?php echo $doc['dlink']; ?>"><i class="fa fa-file-text-o" aria-hidden="true"></i> <?php echo $doc['dname']; ?></a></li>
	                                <?php endforeach; ?>
							</ul>
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