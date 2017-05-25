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
              <div class="panel panel-visible" id="spy1">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span ></span>Руководители студорганизаций</div>
                </div>
                <div class="panel-body pn">
                  <table  class="table" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Фото</th>
                        <th>E-mail</th>
                        <th>VK</th>
                        <th>FB</th>
                        <th>twitter</th>
                        <th style="width: 40px">Действие</th>
                      </tr>
                    </thead>
                    <tbody>
	                    <?php foreach (($directors?:array()) as $dir): ?>
		                    <tr>
			                    <td><?php echo $dir['name']; ?></td>
		                        <td><?php echo $dir['surname']; ?></td>
		                        <td><?php echo $dir['photo']; ?></td>
		                        <td><?php echo $dir['email']; ?></td>
		                        <td><?php echo $dir['vk']; ?></td>
		                        <td><?php echo $dir['fb']; ?></td>
		                        <td><?php echo $dir['twitter']; ?></th>
		                        <td>
				                    <a href="<?php echo $BASE; ?>/admin/organizations/heads/change/<?php echo $dir['id']; ?>" type="button" class="btn btn-xs btn-info btn-block">Изменить</a>
	                                <form method="post" action="<?php echo $BASE; ?>/admin/organizations/heads/delete/<?php echo $dir['id']; ?>">
	                                <input type="text" name="id" id="id" class="hidden" value="<?php echo $dir['id']; ?>"> 
	                                <button style="margin-top:5px" type="submit" id="delete" name="delete"  class="btn btn-xs btn-danger btn-block">Удалить</button>
	                                </form>
                                </td>
		                    </tr>
	                    <?php endforeach; ?>
                    </tbody>
                  </table>
				  <a href="<?php echo $BASE; ?>/admin/organizations/heads/add" type="button" class="btn btn-sm btn-dark btn-block">Добавить</a>
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
  <script src="<?php echo $BASE; ?>/ui/views/admin/endor/plugins/xeditable/inputs/typeaheadjs/typeaheadjs.js"></script>

  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();

		// Init X-Editable Popup mode on Table1
	  $('#editable-table1').find('a').editable({
		    disabled: true
		});
		$('#editable-table1').hoverIntent(
		  function() {
		    $(this).find('a').editable('toggleDisabled');
		  }, function() {
		    $(this).find('a').editable('toggleDisabled');
		 });

		// Init X-Editable Inline mode on Table2
	  $('#editable-table2').find('a').editable({
		    disabled: true,
		    mode: 'inline'
		});
		$('#editable-table2').hoverIntent(
		  function() {
		    $(this).find('a').editable('toggleDisabled');
		  }, function() {
		    $(this).find('a').editable('toggleDisabled');
		});


    // Define and Init Datatables Editor
    var editor; // use a global for the submit and return data rendering in the examples
    editor = new $.fn.dataTable.Editor({
      ajax: "vendor/plugins/datatables/extensions/Editor/examples/php/staff.php",
      table: "#example",
      fields: [{
        label: "First name:",
        name: "first_name"
      }, {
        label: "Last name:",
        name: "last_name"
      }, {
        label: "Position:",
        name: "position"
      }, {
        label: "Office:",
        name: "office"
      }, {
        label: "Extension:",
        name: "extn"
      }, {
        label: "Start date:",
        name: "start_date",
      }, {
        label: "Salary:",
        name: "salary"
      }]
    });

    $('#example').DataTable({
      dom: '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
      ajax: "vendor/plugins/datatables/extensions/Editor/examples/php/staff.php",
      columns: [{
        data: null,
        render: function(data, type, row) {
          // Combine the first and last names into a single table field
          return data.first_name + ' ' + data.last_name;
        }
      }, {
        data: "position"
      }, {
        data: "office"
      }, {
        data: "extn"
      }, {
        data: "start_date"
      }, {
        data: "salary",
        render: $.fn.dataTable.render.number(',', '.', 0, '$')
      }],
      tableTools: {
        sRowSelect: "os",
        aButtons: [{
          sExtends: "editor_create",
          editor: editor
        }, {
          sExtends: "editor_edit",
          editor: editor
        }, {
          sExtends: "editor_remove",
          editor: editor
        }]
      }
    });
    });
    //////
    // IN TABLE CONTROLS (EDIT/DELETE) EXAMPLE
    //
      </script>
  <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/demos/absolute/1.1/tables_datatables-editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2015 13:20:05 GMT -->
</html>
