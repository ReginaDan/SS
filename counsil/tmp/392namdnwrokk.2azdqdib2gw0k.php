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
        <div class="a_section a_questions_section">
            <div class="container">
                <div class="row">
	                <?php foreach (($categories?:array()) as $cat): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="a_q_box" style="margin-bottom: 20px;">
                            <h4><?php echo $cat['cname']; ?>

	                           <a href="/counsil/documents_category_detail/<?php echo $cat['cid']; ?>">Все</a></h4>
                            <div class="a_q_list">
                                <ul class="a_list">
	                                <?php echo $documentsgetter($cat['cid']); ?>

	                                <?php foreach (($documents?:array()) as $doc): ?>
                                    <li><a href="<?php echo $doc['dlink']; ?>"><i class="fa fa-file-text-o" aria-hidden="true"></i> <?php echo $doc['dname']; ?></a></li>
	                                <?php endforeach; ?>
	                               
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
<?php echo $this->render('views/base/footer/footer.htm',$this->mime,get_defined_vars(),0); ?>
</div>
    <!--Bootstrap core JavaScript-->
    <script src="<?php echo $BASE; ?>/ui/js/jquery.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/bootstrap.min.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/custom.js"></script>
</body>
</html>