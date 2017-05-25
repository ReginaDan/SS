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
        <div class="a_main_content">
            <div class="container">
            	<div class="row">
            		<div class="col-md-8">
            			<div class="a_content">
            				<h4 class="a_h4" style="margin: 0 0 10px 0;"><?php echo $bnews['0']['bnname']; ?></h4>
                            <span ><?php echo $bnews['0']['bnd']; ?></span>
            			</br>
            				<figure class="a_feature_img">
            					<img class="a_news_img" src="<?php echo $BASE; ?>/ui/images/<?php echo $bnews['0']['picture']; ?>" alt="">
            				</figure>
            				<p class="a_p"><?php echo $this->raw($bnews['0']['bntx']); ?></p>
            			</div>
            		</div>
            		</br>
            		</br>
            	</div>
            </div>
        </div>
        </br>
            		</br>
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