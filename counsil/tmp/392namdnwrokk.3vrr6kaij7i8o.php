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
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-visible" id="spy1">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span ></span>Задачи студсовета</div>
                </div>
                <div class="panel-body pn">
                  <table  class="table" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Задача</th>
                        <th>Картинка</th>
                       <th style="width: 30px">Действие</th> 
                      </tr>
                    </thead>
                    <tbody>
	                    <?php foreach (($missions?:array()) as $mis): ?>
		                    <tr>
			                    <td><?php echo $mis['name']; ?></td>
			                    <td><?php echo $mis['picture']; ?></td>
			                    
		                          <td>
                                <a href="<?php echo $BASE; ?>/admin/about/missions/change/<?php echo $mis['id']; ?>" type="button" class="btn btn-xs btn-info btn-block">Изменить</a>
                                <form method="post" action="<?php echo $BASE; ?>/admin/about/missions/delete/<?php echo $mis['id']; ?>">
                                <input type="text" name="id" id="id" class="hidden" value="<?php echo $mis['id']; ?>"> 
                                <button style="margin-top:5px" type="submit" id="delete" name="delete"  class="btn btn-xs btn-danger btn-block">Удалить</button>
                                </form>
                              </td>
                            
		                    </tr>
	                    <?php endforeach; ?>
                    </tbody>
                  </table>
                  <a href="<?php echo $BASE; ?>/admin/about/missions/add" type="button" class="btn btn-sm btn-dark btn-block">Добавить</a>
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

	    });
    //////
    // IN TABLE CONTROLS (EDIT/DELETE) EXAMPLE
    //
      </script>
  <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/demos/absolute/1.1/tables_datatables-editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2015 13:20:05 GMT -->
</html>
