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
                <h1>Salon Administrator
                    <small>Company Not Found</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.php">Home</a>
                <i class="fa fa-circle"></i>
            </li>

            <li>
                <span class="active">Add Company</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->

        <div class="row">
            <div class="col-md-8 ">

                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-thumbs-o-up font-grey-gallery"></i>
                            <span class="caption-subject bold font-grey-gallery uppercase"> Let's get you started </span>
                            <span class="caption-helper"></span>
                        </div>
                        <div class="tools">
                            <a class="collapse" href="" data-original-title="" title=""> </a>
                            <a class="reload" href="" data-original-title="" title=""> </a>
                            <a class="fullscreen" href="" data-original-title="" title=""> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <h4>Welcome aboard!</h4>

                        <p>You've now created a user account which gives you access to our platform. Next, we need to add a company. </p>

                        <p>Your company is at the top level of your account, and you will add your salon(s) at a later stage. Please fill out the form on this page. The information submitted will be used as your billing details so please make sure that it is correct.</p>

                    </div>
                </div>
                <!-- END GRID PORTLET-->

            </div>
            <div class="col-md-4 ">
                <!-- BEGIN Portlet PORTLET-->
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet light" id="addCompanyPortlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-building-o font-grey-gallery"></i>
                            <span class="caption-subject bold font-grey-gallery uppercase"> Add Company </span>
                            <span class="caption-helper"></span>
                        </div>
                        <div class="tools">
                            <a class="collapse" href="" data-original-title="" title=""> </a>
                            <a class="reload" href="" data-original-title="" title=""> </a>
                            <a class="fullscreen" href="" data-original-title="" title=""> </a>
                        </div>
                    </div>
                    <div class="portlet-body">

                        <p>The information that you submit below will be used for your billing details. Required fields are marked with an asterisk (*).</p>

                        <form action="#" name="addCompanyForm" id="addCompanyForm" method="POST" >

                            <div class="form-group">
                                <label>Company Name* <a href="javascript:;" title="Enter your company's name" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="companyName" id="companyName" class="form-control" placeholder="Enter the name of your company" tabindex="1" autofocus />
                            </div>
                            <div class="form-group">
                                <label>Company Address* <a href="javascript:;" title="Enter your company's address" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="companyAddress" id="companyAddress" class="form-control" placeholder="Enter the address" tabindex="2" />
                            </div>
                            <div class="form-group">
                                <label>Company City* <a href="javascript:;" title="Enter your company's city" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="companyCity" id="companyCity" class="form-control" placeholder="Enter the city" tabindex="3" />
                            </div>
                            <div class="form-group">
                                <label>Company Postcode* <a href="javascript:;" title="Enter your company's postcode" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="companyPostcode" id="companyPostcode" class="form-control" placeholder="Enter the postcode" tabindex="4" />
                            </div>
                            <div class="form-group">
                                <label>Company Telephone* <a href="javascript:;" title="Enter your company's telephone number" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="companyTelephone" id="companyTelephone" class="form-control" placeholder="Enter your telephone number" tabindex="5" />
                            </div>
                            <div class="form-group">
                                <label>Company Email* <a href="javascript:;" title="Enter your company's email address" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="companyEmail" id="companyEmail" class="form-control"  placeholder="Enter the email address for your company" tabindex="6" />
                            </div>
                            <div class="form-group">
                                <label>Company Website  <a href="javascript:;" title="Enter your company's website if you have one" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="companyWebsite" id="companyWebsite" class="form-control" placeholder="Enter your company website" tabindex="7" />
                            </div>
                            <div class="form-group">
                                <label>VAT Registered? *  <a href="javascript:;" title="Let us know if you are VAT registered so that we can help with your accounts" class="tooltips" data-placement="right">?</a></label>
                                <select name="isVat" id="isVat" class="form-control" tabindex="8" >

                                    <option value="">Please Select</option>

                                    <option value="true">Yes</option>

                                    <option value="false">No</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>VAT ID? *  <a href="javascript:;" title="Please enter your VAT number" class="tooltips" data-placement="right">?</a></label>
                                <input type="text" name="vatId" id="vatId" class="form-control" placeholder="Please enter your VAT number" tabindex="9" />
                            </div>
                            <input type="hidden" name="companyStatus" id="companyStatus" value="active" />

                            <input type="hidden" name="ownerId" id="ownerId" value="<?php echo $_SESSION['user']['id']; ?>" />

                            <br />

                            <input type="submit" value="Submit" class="btn btn-outline red pull-right" tabindex="10" />

                            <span class="clearfix"></span>

                        </form>

                    </div>
                </div>
                <!-- END GRID PORTLET-->

            </div>

        </div>


        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>