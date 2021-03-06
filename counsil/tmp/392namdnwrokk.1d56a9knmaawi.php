<!DOCTYPE html>
<html>


<!-- Mirrored from admindesigns.com/demos/absolute/1.1/pages_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2015 13:17:40 GMT -->
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

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $BASE; ?>/ui/views/admin/assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $BASE; ?>/ui/views/admin/assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo $BASE; ?>/ui/images/logo.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page external-alt sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Begin: Content -->
      <section id="content">

        <div class="admin-form theme-primary mw600" style="margin-top: 3%;" id="register">

          <!-- Registration Logo -->
          <div class="row table-layout">
            <a href="dashboard.html" title="Return to Dashboard">
              <img src="<?php echo $BASE; ?>/ui/images/logo.png" title="AdminDesigns Logo" class="center-block img-responsive" style="max-width: 255px;">
            </a>
          </div>

          <!-- Registration Panel/Form -->
          <div class="panel mt40">

            <form method="post" id="contact">
              <div class="panel-body bg-light p25 pb15">

              
                <div class="section row">
                  <div class="col-md-6">
                    <label for="firstname" class="field prepend-icon">
                      <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Имя">
                      <label for="firstname" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="col-md-6">
                    <label for="lastname" class="field prepend-icon">
                      <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Фамилия">
                      <label for="lastname" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->
                </div>
                <!-- end .section row section -->
                <!-- end section -->

                <div class="section">
                  <label for="email" class="field prepend-icon">
                    <input type="text" name="email" id="email" class="gui-input" placeholder="E-mail/Логин">
                    <label for="email" class="field-icon">
                      <i class="fa fa-user"></i>
                    </label>
                  </label>
                </div>

                <hr class="alt short">

                <div class="section">
                  <label for="password" class="field prepend-icon">
                    <input type="password" name="password" id="password" class="gui-input" placeholder="Пароль">
                    <label for="password" class="field-icon">
                      <i class="fa fa-unlock-alt"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section">
                  <label for="confirmPassword" class="field prepend-icon">
                    <input type="password" name="confirmPassword" id="confirmPassword" class="gui-input" placeholder="Повторите пароль">
                    <label for="confirmPassword" class="field-icon">
                      <i class="fa fa-lock"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->


              </div>

              <div class="panel-footer clearfix">
                <button type="submit" class="button btn-dark mr10 pull-right">Зарегистрироваться</button>

              </div>

            </form>
          </div>

          <!--  Divider -->


          <!-- Registration Links -->
          <div class="login-links">
            
            <p>Уже зарегистрированы?
              <a href="<?php echo $BASE; ?>/admin/login" class="active"  style="color:#3b3f4f" title="Sign In">Войдите</a>
            </p>
          </div>


        </div>

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

  </div>
  <!-- End: Main -->


  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Theme Javascript -->
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/utility/utility.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/demo/demo.js"></script>
  <script src="<?php echo $BASE; ?>/ui/views/admin/assets/js/main.js"></script>

  <!-- Page Javascript -->
  <script type="text/javascript">
  // jQuery(document).ready(function() {

  //   "use strict";

  //   // Init Theme Core      
  //   Core.init();

  //   // Init Demo JS
  //   Demo.init();

  // });
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/demos/absolute/1.1/pages_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2015 13:17:43 GMT -->
</html>
