<?php echo $this->render('views/admin/base/head.htm',$this->mime,get_defined_vars(),0); ?>

<body class="datatables-editor-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">

  <!-- Start: Theme Preview Pane -->
  <!-- End: Theme Preview Pane -->

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
<?php echo $this->render('views/admin/base/header.htm',$this->mime,get_defined_vars(),0); ?>

    <!-- Start: Sidebar -->
<?php echo $this->render('views/admin/base/sidebar.htm',$this->mime,get_defined_vars(),0); ?>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">
    <!-- begin: .tray-center -->
        <div class="tray tray-center">
          <div class="row">
            <div class="col-md-12">
              <div id="content" class="animated fadeIn">
              <div class="row center-block mt10" style="">
                <div class="panel col-md-6 col-md-offset-3" style="padding: 0; border: 0;">
                    <div class="panel-heading">
                      <span class="panel-title"></span>
                    </div>
                    <div class="panel-body">
                      <form method="post" method="POST" enctype="multipart/form-data" action="" id="update" class="form-horizontal" role="form">
                        <label for="inputStandard" class="col-lg-3 control-label">Студсовет</label>
                          <div class="col-lg-8" style="padding-bottom: 20px;">
                            <div >
                              <input type="text" id="inputStandard" name="name" class="form-control" placeholder="<?php echo $locals['0']['name']; ?>" value="">
                            </div>
                          </div>
                          <label for="inputStandard" class="col-lg-3 control-label">Ссылка</label>
                          <div class="col-lg-8" style="padding-bottom: 20px;">
                            <div >
                              <input type="text" id="inputStandard" name="link" class="form-control" placeholder="<?php echo $locals['0']['link']; ?>" value="">
                            </div>
                          </div>

                        <button type="sumbit" class="btn btn-hover btn-dark btn-block">Сохранить изменения</button>
                      </form>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- end: .tray-center -->
      </section>
      <!-- End: Content -->
    </section>
  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Datatables -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

  <!-- Datatables Tabletools addon -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

  <!-- Datatables Editor addon - READ LICENSING NOT MIT  -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/datatables/extensions/Editor/js/dataTables.editor.js"></script>

  <!-- Datatables Bootstrap Modifications  -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/datatables/extensions/Editor/js/editor.bootstrap.js"></script>

  <!-- Theme Javascript -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/utility/utility.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/demo/demo.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/main.js"></script>

  <!-- Xedit JS -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/moment/moment.min.js"></script>
  <!-- Dependency -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/js/bootstrap-editable.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/address/address.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/typeaheadjs/typeaheadjs.js"></script>

  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();

    // Init X-Editable Popup mode on Table1
    
    });
    //////
    // IN TABLE CONTROLS (EDIT/DELETE) EXAMPLE
    //
      </script>
  <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/demos/absolute/1.1/tables_datatables-editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2015 13:20:05 GMT -->
</html>
