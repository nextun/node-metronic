<?php
require_once "includes/init.php";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #4 | User Login 6</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #4 for " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link rel="stylesheet" href="includes/styles/styles.css">
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-2 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 login-container bs-reset">
            <img class="login-logo login-6" src="../assets/pages/img/login/login-invert.png" />
            <div class="login-content">
                <h1 class="font-blue-steel">Register an Account</h1>
                <p> Simply fill out the form below to create your account. All fields are required. </p>
                <form action="javascript:;" class="login-form" method="post">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>Please fill out all the fields which are highlighted in red. </span>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Full Name"
                                    name="fullName"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Mobile Number"
                                    name="mobileTelephone"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Email Address"
                                    name="email"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Email Confirm"
                                    name="email2"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Address"
                                    name="address1"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Address 2"
                                    name="address2"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="City/Town"
                                    name="city"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="text"
                                    autocomplete="off"
                                    placeholder="Postcode"
                                    name="postcode"
                                    required
                            />
                        </div>
                        <hr />
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="password"
                                    autocomplete="off"
                                    placeholder="Password"
                                    name="password1"
                                    required
                            />
                        </div>
                        <div class="form-group col-sm-6">
                            <input
                                    class="form-control form-control-solid placeholder-no-fix form-group"
                                    type="password"
                                    autocomplete="off"
                                    placeholder="Password Confirm"
                                    name="password2"
                                    required
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="rememberme mt-checkbox mt-checkbox-outline">
                                <input type="checkbox" name="remember" value="1" /> Remember me
                                <span></span>
                            </label>
                        </div>
                        <div class="col-sm-8 text-right">
                            <button class="btn red btn-outline" type="submit">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                        <ul class="login-social">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>&copy; Salon Administrator 2016 - <?php echo date('Y') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-reset">
            <div class="login-bg"> </div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-2 -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
</body>

</html>