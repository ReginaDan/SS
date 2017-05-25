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
              <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span></span>Обращения к Уполномоченному по правам студентов</div>
                </div>
                <div class="panel-body pn">
                  <table class="table table-striped table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Имя студента</th>
                        <th>Фамилия студента</th>
                        <th>E-mail студента</th>
                        <th>Текст обращения</th>
                        <th>Статус обращения</th>
                        <th>Ответ</th>
                        <th>Действие</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach (($appeals?:array()) as $appeal): ?>
                        <tr>
                          <td><?php echo $appeal['author_name']; ?></td>
                          <td><?php echo $appeal['author_surname']; ?></td>
                          <td><?php echo $appeal['email']; ?></td>
                          <td><?php echo $appeal['appeal']; ?></td>
                          <td><?php if ($appeal['status'] == 0): ?>Новое<?php else: ?>Решенное<?php endif; ?></td>
                          <form method="post" id="answerF" name="answerF">
                          <td><textarea id="answer" name="answer" class="form-control" placeholder="ответ" cols="40" rows="5"></textarea></td>
                          <td>
                              <input id="id_appeal" name="id_appeal" class="form-control hidden" type="text" value="<?php echo $appeal['id']; ?>">
                              <button id="submit" value="submit" type="submit" data-dismiss="modal" class="btn btn-primary sendForm" name="postType" value="ChangeRole">Отправить</button>
                          </td>
                          </form>
                        </tr>
                      <?php endforeach; ?>
                      
                    </tbody>
                  </table>
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
    $(document).on("submit", "#answerF", function (e){
                                    e.preventDefault()
                                        $.ajax({

                                            url: '../admin/appeals', // url where to submit the request
                                            type : "POST", // type of action POST || GET
                                            dataType : 'json', // data type
                                            data : $("#answerF").serialize(), // post data || get data
                                            success : function() {
                                                alert("Ответ отправлен");
                                                return;
                                                //console.log(result);
                                            },
                                            error: function() {
                                                alert("Ответ отправлен");
                                                return;
                                                //console.log(xhr, resp, text);
                                            }
                                        });
                                    return false
                                    });
    

    $('#datatable2').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
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
