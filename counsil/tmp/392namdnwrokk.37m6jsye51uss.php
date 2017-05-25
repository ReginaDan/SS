<!DOCTYPE html>
<html>


<!-- Mirrored from admindesigns.com/demos/absolute/1.1/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2015 13:18:47 GMT -->
<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>Студсовет НИУ ВШЭ – Панель администратора</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AbsoluteAdmin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Summernote CSS  -->
  <link rel="stylesheet" type="text/css" href="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/summernote/summernote.css">

  <!-- X-editable CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/css/bootstrap-editable.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/address/address.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js-bootstrap.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $BASE; ?>/ui/views/admin/assets/skin/default_skin/css/theme.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo $BASE; ?>/ui/images/logo.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="form-editors-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">

  <!-- Start: Theme Preview Pane -->
  <!-- End: Theme Preview Pane -->

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
<?php echo $this->render('views/admin/base/header.htm',$this->mime,get_defined_vars(),0); ?>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
<?php echo $this->render('views/admin/base/sidebar.htm',$this->mime,get_defined_vars(),0); ?>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">

        <!-- begin: .tray-center -->
        <div class="col-sm-10  ">

          <!-- Summernote Editor -->
          <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    Новость
                   </div>
                </div>
          <form  method="POST" enctype="multipart/form-data" id="update" class="form-horizontal" role="form">
	         <div class="panel">
              
              <div class="panel-body">

                <div class="col-sm-12">
						<div class="form-group">
							<label for="inputStandard" style="text-align: center; line-height: 40px" class="col-lg-3 control-label">Новость</label>
							<div class="col-lg-8" >
								<div>
									<input type="text" name="name" id="inputStandard" class="form-control" value="<?php echo $blognews['0']['bnname']; ?>">
	                    		</div>
                    		</div>
                  		</div>
	                </div>
                    <div class="col-sm-12">
						<div class="form-group">
							<label for="inputStandard" style="text-align: center; line-height: 30px" class="col-lg-3 control-label">Картинка</label>
								<div class="section col-lg-8" style="padding: 10px 10px 20px;">
									<input type="file" name="picture">
                          		</div>
						</div>
                    </div>
                                              <input type="hidden" name="commitee" value="<?php echo $commitee['0']['link']; ?>">

              </div>
            </div>

		          <div class="panel">
		            <div class="panel-body pn of-h" id="summer-demo">
		              <textarea name="text" class="summernote" ><?php echo $blognews['0']['bntx']; ?>

		              </textarea>
		            </div>
		          </div>
				  <button id="submit" value="submit" type="submit" class="btn btn-dark btn-gradient dark btn-block sendForm" name="postType" style="margin-top: 20px;">Сохранить изменения</button>
				  </div>
        		</form>
          

       </div>
              <footer id="content-footer" class="affix">
		        <div class="row">
		          <div class="col-md-6">
		            <span class="footer-legal">© 2017 Бизнес в стиле . RU</span>
		          </div>
		        </div>
		      </footer>
          </section>
        </section>
  	</div>
  
  <style>
  /* demo styles -summernote */
  .btn-toolbar > .btn-group.note-fontname {
    display: none;
  }
  /* demo styles - hides several ckeditor toolbar buttons */
  #cke_52,
  #cke_53 {
    display: none !important;
  }
  </style>

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Theme Javascript -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/utility/utility.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/demo/demo.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/main.js"></script>

  <!-- Ckeditor JS -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/ckeditor/ckeditor.js"></script>

  <!-- Summernote Plugin -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/summernote/summernote.min.js"></script>

  <!-- MarkDown JS -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/markdown/markdown.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/markdown/to-markdown.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/markdown/bootstrap-markdown.js"></script>

  <!-- X-Edit JS -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/moment/moment.min.js"></script>
  <!-- X-Edit Dependencies -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/js/bootstrap-editable.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/address/address.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/plugins/xeditable/inputs/typeaheadjs/typeaheadjs.js"></script>

  <!-- Page Javascript -->
    <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();


    // Init Summernote Plugin
    $('.summernote').summernote({
      height: 255, //set editable area's height
      focus: false, //set focus editable area after Initialize summernote
      oninit: function() {},
      onChange: function(contents, $editable) {},
    });

    // Init Inline Summernote Plugin
    $('.summernote-edit').summernote({
      airMode: true,
      focus: false //set focus editable area after Initialize summernote            
    });

    // Turn off automatic editor initilization.
    // Used to prevent conflictions with multiple text 
    // editors being displayed on the same page.
    CKEDITOR.disableAutoInline = true;

    // Init Ckeditor
    // CKEDITOR.replace('ckeditor1', {
    //   height: 210,
    //   on: {
    //     instanceReady: function(evt) {
    //       $('.cke').addClass('admin-skin cke-hide-bottom');
    //     }
    //   },
    // });
/*
    	var lesdata = new FormData($('#info').get(0)); 
		lesdata.append('text', $('.summernote').summernote('code')); 
*/
	//var lesdata = JSON.stringify($('.summernote').summernote('code')); 
	//document.getElementById("text").value = JSON.stringify(lesdata);
	//alert(lesdata);
  
	$(document).on("submit", "#info", function (e)
	{					
    //document.getElementById("text").value = lesdata;
            var lesdata = new FormData($('#info').get(0));
            var textareaValue = $('#summernote').summernote('code');
                lesdata.append('text', textareaValue);
                                    //e.preventDefault()
                                    
                                        $.ajax({

                                            url: '../about/info', // url where to submit the request
                                            type : "POST", // type of action POST || GET
                                            dataType : 'json', // data type
                                            data : lesdata,
                                            //$("#info").serialize(), // post data || get data
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
                                    //return false
                                    });
    

        // Init Inline Ckeditors
    // CKEDITOR.inline('ckeditor-inline1');
    // CKEDITOR.inline('ckeditor-inline2');

    // Init MarkDown Editor
    $("#markdown-editor").markdown({
      savable: false,
      onChange: function(e) {
        var content = e.parseContent(),
          content_length = (content.match(/\n/g) || []).length + content.length
        if (content == '') {
          $('#md-footer').hide()
        } else {
          $('#md-footer').show().html(content)
        }
      }
    });

    // Init X-editable Plugin
    function XEdit() {
      //enable / disable xedit
      $('#enable').click(function() {
        $(this).toggleClass('active');
        $('#user .editable').editable('toggleDisabled');
      });

      //editables 
      $('#username').editable({
        type: 'text',
        pk: 1,
        name: 'username',
        title: 'Enter username'
      });

      $('#firstname').editable({
        validate: function(value) {
          if ($.trim(value) == '') return 'This field is required';
        }
      });

      $('#sex').editable({
        prepend: "not selected",
        source: [{
          value: 1,
          text: 'Male'
        }, {
          value: 2,
          text: 'Female'
        }],
        display: function(value, sourceData) {
          var colors = {
              "": "gray",
              1: "green",
              2: "blue"
            },
            elem = $.grep(sourceData, function(o) {
              return o.value == value;
            });

          if (elem.length) {
            $(this).text(elem[0].text).css("color", colors[value]);
          } else {
            $(this).empty();
          }
        }
      });

      $('#status').editable();

      $('#group').editable({
        showbuttons: false
      });

      $('#vacation').editable({
        datepicker: {
          todayBtn: 'linked'
        }
      });

      $('#dob').editable();

      $('#event').editable({
        placement: 'right',
        combodate: {
          firstItem: 'name'
        }
      });

      $('#meeting_start').editable({
        format: 'yyyy-mm-dd hh:ii',
        viewformat: 'dd/mm/yyyy hh:ii',
        validate: function(v) {
          if (v && v.getDate() == 10) return 'Day cant be 10!';
        },
        datetimepicker: {
          todayBtn: 'linked',
          weekStart: 1
        }
      });

      $('#comments').editable({
        showbuttons: 'bottom'
      });

      $('#note').editable();
      $('#pencil').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note').editable('toggle');
      });

      $('#state').editable({
        source: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
      });

      $('#state2').editable({
        value: 'California',
        typeahead: {
          name: 'state',
          local: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
        }
      });

      $('#fruits').editable({
        pk: 1,
        limit: 3,
        source: [{
          value: 1,
          text: 'banana'
        }, {
          value: 2,
          text: 'peach'
        }, {
          value: 3,
          text: 'apple'
        }, {
          value: 4,
          text: 'watermelon'
        }, {
          value: 5,
          text: 'orange'
        }]
      });

      $('#address').editable({
        url: '/post',
        value: {
          city: "Moscow",
          street: "Lenina",
          building: "12"
        },
        validate: function(value) {
          if (value.city == '') return 'city is required!';
        },
        display: function(value) {
          if (!value) {
            $(this).empty();
            return;
          }
          var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street).html() + ' st., bld. ' + $('<div>').text(value.building).html();
          $(this).html(html);
        }
      });

      $('#user .editable').on('hidden', function(e, reason) {
        if (reason === 'save' || reason === 'nochange') {
          var $next = $(this).closest('tr').next().find('.editable');
          if ($('#autoopen').is(':checked')) {
            setTimeout(function() {
              $next.editable('show');
            }, 300);
          } else {
            $next.focus();
          }
        }
      });

    };
    XEdit();

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/demos/absolute/1.1/form_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2015 13:18:58 GMT -->
</html>
