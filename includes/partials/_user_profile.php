<div class="page-content-wrapper">

    <!-- BEGIN CONTENT BODY -->

    <div class="page-content">

        <!-- BEGIN ALERT -->

        <?php require "includes/partials/_alerts.php"; ?>

        <!-- END ALERT -->

        <!-- BEGIN PAGE HEAD-->

        <div class="page-head">

            <!-- BEGIN PAGE TITLE -->

            <div class="page-title">

                <h1>Staff Profile | Account</h1>

            </div>

            <!-- END PAGE TITLE -->

        </div>



        <!-- END PAGE HEAD-->

        <!-- BEGIN PAGE BREADCRUMB -->

        <ul class="page-breadcrumb breadcrumb">

            <li>

                <a href="index.html">Home</a>

                <i class="fa fa-circle"></i>

            </li>

            <li>

                <span class="active">My Profile</span>

            </li>

        </ul>

        <!-- END PAGE BREADCRUMB -->

        <!-- BEGIN PAGE BASE CONTENT -->

        <div class="row">

            <div class="col-md-12">

                <!-- BEGIN PROFILE SIDEBAR -->

                <div class="profile-sidebar">

                    <!-- PORTLET MAIN -->

                    <div class="portlet light profile-sidebar-portlet bordered">

                        <!-- SIDEBAR USERPIC -->

                        <div class="profile-userpic">

                            <img src="img/default-profile.png" class="img-responsive profile-pic" alt=""> </div>

                        <!-- END SIDEBAR USERPIC -->

                        <!-- SIDEBAR USER TITLE -->

                        <div class="profile-usertitle">

                            <div class="profile-usertitle-name full-name"> </div>

                            <div class="profile-usertitle-job"> Staff </div>

                        </div>

                        <!-- END SIDEBAR USER TITLE -->

                        <div>&nbsp;</div>

                    </div>

                    <!-- END PORTLET MAIN -->

                </div>

                <!-- END BEGIN PROFILE SIDEBAR -->

                <!-- BEGIN PROFILE CONTENT -->

                <div class="profile-content">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="portlet light bordered" id="main_window">

                                <div class="portlet-title tabbable-line">

                                    <div class="caption caption-md">

                                        <i class="icon-globe theme-font hide"></i>

                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>

                                    </div>

                                    <ul class="nav nav-tabs">

                                        <li class="active">

                                            <a href="#personal" data-toggle="tab">Personal Info</a>

                                        </li>

                                        <li>

                                            <a href="#profilePic" data-toggle="tab">Change Image</a>

                                        </li>

                                        <li>

                                            <a href="#password" data-toggle="tab">Change Password</a>

                                        </li>

                                    </ul>

                                </div>

                                <div class="portlet-body">

                                    <div class="tab-content">

                                        <!-- PERSONAL INFO TAB -->

                                        <div class="tab-pane active" id="personal">

                                            <form role="form" action="#" method="post" name="editStaff" id="editStaff">

                                                <div class="form-group">

                                                    <label class="control-label">Full Name</label>

                                                    <input type="text" placeholder="" name="staffName" id="staffName" value="" class="form-control" /> </div>

                                                <div class="form-group">

                                                    <label class="control-label">Email Address</label>

                                                    <input type="text" placeholder="" name="staffEmail" disabled id="staffEmail" value="" class="form-control" /> </div>

                                                <div class="form-group">

                                                    <label class="control-label">Mobile Number</label>

                                                    <input type="text" placeholder="" name="staffMobile" id="staffMobile" value="" class="form-control" /> </div>

                                                <div class="form-group">

                                                    <label class="control-label">Address</label>

                                                    <input type="text" placeholder="" name="staffAddress" id="staffAddress"  value="" class="form-control" /> </div>

                                                <div class="form-group">

                                                    <label class="control-label">City</label>

                                                    <input type="text" placeholder="" name="staffCity" id="staffCity"  value="" class="form-control" /> </div>

                                                <div class="form-group">

                                                    <label class="control-label">Postcode</label>

                                                    <input type="text" class="form-control" name="staffPostcode" id="staffPostcode"  placeholder="" value=""></textarea>

                                                </div>

                                                <div class="margiv-top-10">

                                                    <input type="submit" value="Submit" class="btn btn-outline red pull-right" />

                                                    <span class="clearfix"></span>

                                                </div>

                                            </form>

                                        </div>

                                        <!-- END PERSONAL INFO TAB -->

                                        <!-- CHANGE AVATAR TAB -->

                                        <div class="tab-pane" id="profilePic">

                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. </p>
                                            <form action="#" role="form">
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="..."> </span>
                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="label label-danger">NOTE! </span>
                                                        <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                    </div>
                                                </div>
                                                <div class="margin-top-10 pull-right">
                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                    <a href="javascript:;" class="btn btn-outline red"> Submit </a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>

                                        </div>

                                        <!-- END CHANGE AVATAR TAB -->

                                        <!-- CHANGE PASSWORD TAB -->

                                        <div class="tab-pane" id="password">

                                            <form action="#" id="editStaffPasswordForm" name="editStaffPasswordForm" method="post">

                                                <div class="form-group">

                                                    <label class="control-label">New Password</label>

                                                    <input type="password" class="form-control" id="staffPassword" name="staffPassword" tabindex="1" />

                                                    <div id="pswd_info">

                                                        <h4>Password must meet the following requirements:</h4>

                                                        <ul>

                                                            <li id="letter" class="invalid">At least <strong>one letter</strong></li>

                                                            <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>

                                                            <li id="number" class="invalid">At least <strong>one number</strong></li>

                                                            <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>

                                                            <li id="altC" class="invalid">Have at least <strong>one alt char</strong><a href="javascript:;" title="Alt characters are dots, dashes and slashes etc." data-placement="top" class="tooltips"> ?</a></li>

                                                        </ul>

                                                    </div>

                                                    <input type="hidden" name="pwScore" id="pwScore" value="" />

                                                </div>

                                                <div class="form-group">

                                                    <label class="control-label">Re-type New Password</label>

                                                    <input type="password" id="staffNewPasswordConfirm" name="staffNewPasswordConfirm" class="form-control" tabindex="3" />

                                                </div>

                                                <div class="margin-top-20">

                                                    <input type="submit" value="Change Password" class="btn btn-outline red pull-right" />

                                                    <span class="clearfix"></span>

                                                </div>

                                                <p>&nbsp;</p>

                                        </div>

                                        <p>&nbsp;</p>

                                        </form>

                                    </div>

                                    <!-- END CHANGE PASSWORD TAB -->

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- END PROFILE CONTENT -->

        </div>

    </div>

    <!-- END PAGE BASE CONTENT -->

</div>