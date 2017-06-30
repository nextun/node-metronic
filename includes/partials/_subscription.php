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

                <h1><?php echo $settings->siteName; ?>

                    <small></small>

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

                <span class="active">Billing</span>

            </li>

        </ul>

        <!-- END PAGE BREADCRUMB -->

        <!-- BEGIN PAGE BASE CONTENT -->

        <div class="row">

            <div class="col-md-12 col-lg-8">

                <?php

                // WE'RE GOING TO NEED TO CHECK IF THE CURRENT COMPANY HAS A STRIPE ID BEFORE WE RUN THIS CODE-BLOCK //

                if($companyInfo->stripeId!="")

                {

                    if($companyInfo->subscriptionId!=''&&$companyInfo->paymentStatus!='cancelled')
                    {

                        ?>

                        <div class="portlet light">

                            <div class="portlet-title">

                                <div class="caption">

                                    <i class="fa fa-retweet font-blue-sharp"></i>

                                    <span class="caption-subject bold font-grey-gallery uppercase">Subscription Information</span>

                                    <!-- <span class="caption-helper">more samples...</span> -->

                                </div>

                                <div class="tools">

                                    <a class="collapse" href="" data-original-title="" title=""> </a>

                                    <a class="fullscreen" href="" data-original-title="" title=""> </a>

                                </div>

                            </div>

                            <div class="portlet-body">

                                <div class="col-md-6">

                                    <h4>Your plan</h4>

                                    <?php

                                    if($settings->isVat=='true'){$vat = "+VAT";};

                                    ?>

                                    <p>You are subscribed to our <?php echo $subscriptionInfo->plan->name; ?> plan. You pay &pound;<?php echo number_format($subscriptionInfo->plan->amount/100, 2, '.', '')." ".$vat." per ".$subscriptionInfo->plan->interval; ?> Your current billing period started on <?php echo date("d/m/Y", $subscriptionInfo['current_period_start']); ?> and ends on <?php echo date("d/m/Y", $subscriptionInfo['current_period_end']); ?>. You can switch to another plan using the feature on this page.</p>

                                    <h4>Switching Plans</h4>

                                    <p>If you switch your plan, your billing will be processed on a prorate basis. Please note that if you upgrade your subscription, the fee will be added to your next invoice on <?php echo humanDate($companyInfo->payDate); ?>. </p>

                                </div>

                                <div class="col-md-6">

                                    <h4>Switch Plan</h4>

                                    <form name="changePlanForm" id="changePlanForm" action="#" method="post">

                                        <select name="plan" id="plan" class="form-control">

                                            <?php

                                            $sql = "SELECT * FROM plans ORDER BY planNetPrice DESC";
                                            if($result=$con->query($sql))
                                            {

                                                if($result->num_rows>0)
                                                {

                                                    while($row = $result->fetch_object())
                                                    {

                                                        ?>

                                                        <option value="<?php echo $row->planId ?>" <?php  if($companyInfo->companyPlan == $row->planId) {echo "selected='true' "."disabled ";}; ?>>

                                                            <?php echo $row->planName." - &pound;".($row->planNetPrice/100)." ".$vat." per ".$row->planInterval; ?>

                                                        </option>

                                                        <?php

                                                    }

                                                } else {

                                                    echo "No rows";

                                                }

                                            } else {

                                                echo "<option=''>Error</option";

                                            }

                                            ?>
                                            <?php
                                            /*
                                            <option <?php if($companyInfo->companyPlan==$plan['id']) {echo "selected disabled";}; ?> value="<?php echo $plan['id'] ?>"><?php echo $plan['name']." - &pound;".($plan['amount']/100)." ".$vat." per ".$plan['interval']; ?></option>
                                            */

                                            ?>

                                        </select>

                                        <input type="hidden" name="subscriptionId" id="subscriptionId" value="<?php echo $companyInfo->subscriptionId; ?>" id="subscriptionId" />

                                        <br />

                                        <input type="submit" class="btn btn-outline red pull-right" name="changePlan" id="changePlan" value="Change Plan" />

                                        <a class="btn btn-outline blue-sharp pull-right" name="cancelSubscription" id="cancelSubscription" style="margin-right: 3px;">Cancel</a>

                                        <span class="clearfix"></span>

                                    </form>

                                    <h4>Note:</h4>

                                    <p>Refunds are not offered on downgraded subscriptions. Instead, the credit will be issued on a prorate basis.</p>

                                </div>

                                <div class="clearfix"></div>

                            </div><!-- INVOICE PORTLET BODY -->

                        </div><!-- SUBSCRIPTION PORTLET OUTER -->

                        <?php

                    }

                }

                ?>

                <?php

                // WE'RE GOING TO NEED TO CHECK IF THE CURRENT COMPANY HAS A STRIPE ID BEFORE WE RUN THIS CODE-BLOCK //

                if($companyInfo->stripeId!="")
                {

                    ?>

                    <div class="portlet light">

                        <div class="portlet-title">

                            <div class="caption">

                                <i class="fa fa-file font-blue-sharp"></i>

                                <span class="caption-subject bold font-grey-gallery uppercase"> Invoices <?php //echo "( ".count($invoiceInfo)." )"; ?></span>

                                <!-- <span class="caption-helper">more samples...</span> -->

                            </div>

                            <div class="tools">

                                <a class="collapse" href="" data-original-title="" title=""> </a>

                                <a class="fullscreen" href="" data-original-title="" title=""> </a>

                            </div>

                        </div>

                        <div class="portlet-body">

                            <div class="table-responsive">

                                <table class="table table-condensed table-hover">

                                    <thead>

                                    <tr>

                                        <th> Invoice Id </th>

                                        <th> Date </th>

                                        <th> Amount </th>

                                        <th> Settled </th>

                                        <th> <span class="pull-right"> </span> </th>

                                    </tr>

                                    </thead>

                                    <tbody>

                                    <?php
                                    $invoiceQ="SELECT * FROM invoices WHERE companyId = ".(int)$_SESSION['company']['id'];
                                    if($invoiceR=$con->query($invoiceQ))
                                    {

                                        if($invoiceR->num_rows>0)
                                        {

                                            while($invoiceInfo=$invoiceR->fetch_object())
                                            {

                                                if($invoiceInfo->invoicePaid=="1"){

                                                    $paid = "Yes";

                                                } else {

                                                    $paid = "No";

                                                }

                                                ?>

                                                <tr>

                                                    <td> <?php echo $invoiceInfo->stripeInvoiceId; ?> </td>

                                                    <td> <?php echo humanDate($invoiceInfo->invoiceDate); ?> </td>

                                                    <td> <?php echo "&pound;".number_format($invoiceInfo->invoiceTotal/100, 2, '.', ''); ?> </td>

                                                    <td> <?php echo $paid; ?> </td>

                                                    <td> <a class="btn btn-outline btn-sm red pull-right" href="view-invoice.php?id=<?php echo $invoiceInfo->stripeInvoiceId; ?>">

                                                            <i class="fa fa-file-o"></i> View

                                                        </a>

                                                    </td>

                                                </tr>

                                                <?php

                                            }

                                        } else {

                                            echo "<td> No invoices available </td>";

                                        }




                                    }


                                    ?>

                                    </tbody>

                                </table>

                            </div>

                        </div><!-- INVOICE PORTLET BODY -->

                    </div><!-- INVOICE PORTLET OUTER -->

                    <?php

                } else {

                    ?>

                    <div class="portlet light">

                        <div class="portlet-title">

                            <div class="caption">

                                <i class="fa fa-retweet font-blue-sharp"></i>

                                <span class="caption-subject bold font-grey-gallery uppercase"> Subscription </span>

                            </div>

                            <div class="tools">

                                <a class="collapse" href="" data-original-title="" title=""> </a>

                                <a class="fullscreen" href="" data-original-title="" title=""> </a>

                            </div>

                        </div>

                        <div class="portlet-body">

                            <h4>Information</h4>

                            <p>Welcome to the billing section of your account. Once you have subscribed to a plan and supplied your billing information you will be able to change your plan as well as your payment method. You can also view all of the invoices relating to your account.

                            </p>

                        </div>

                    </div>

                    <?php


                }

                ?>

            </div>

            <div class="col-md-12 col-lg-4">

                <div class="portlet light">

                    <div class="portlet-title">

                        <div class="caption">

                            <i class="fa fa-cc-visa font-blue-sharp"></i>

                            <span class="caption-subject bold font-grey-gallery uppercase"> Payment Info</span>

                            <span class="caption-helper"><?php //echo "Status - <span style='text-transform: capitalize;'>".$paymentStatus.'</span>'; ?></span>

                        </div>

                        <div class="tools">

                            <a class="collapse" href="" data-original-title="" title=""> </a>

                            <a class="fullscreen" href="" data-original-title="" title=""> </a>

                        </div>

                    </div>

                    <div class="portlet-body">

                        <?php

                        // WE'RE GOING TO NEED TO CHECK IF THE CURRENT COMPANY HAS A STRIPE ID BEFORE WE RUN THIS CODE-BLOCK //
                        // echo "<pre>";
                        // print_r($cu->subscriptions->data[0]->plan->name);
                        // echo "</pre>";
                        if($companyInfo->stripeId!=""&&$companyInfo->paymentStatus!='none'&&$companyInfo->paymentStatus!='cancelled')
                        {

                            echo "<div class='col-md-6 col-lg-6'>";

                            echo "<h4>Subscription:</h4>";

                            echo "<strong>Renewal Date: </strong><br />".$humanPayDate."<br /><br />";

                            echo "<strong>Plan Name:</strong> <br />".$cu->subscriptions->data[0]->plan->name;

                            echo "</div>";

                            echo "<div class='col-md-6 col-lg-6'>";

                            echo "<h4>Source: </h4>";

                            echo "<strong>".$cu->default_source->brand."</strong> (".$cu->default_source->funding.")";

                            echo "<br /><small>**** **** **** " . $cu->default_source->last4." (".$cu->default_source->country.")</small><br /><br />";

                            echo "<strong>Expires: </strong><br />".$cu->default_source->exp_month."/".$cu->default_source->exp_year."";

                            echo "<p class='lead'></p>";

                            echo "</div>";

                        }

                        ?>

                        <div class="clearfix"></div>

                        <?php

                        if($paymentStatus=='good')
                        {

                            ?>

                            <form action="" method="POST" class="pull-right">

                                <script

                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"

                                    data-key="<?php echo $stripePublishKey; ?>"

                                    data-image="img/tanning-icon-dark.png"

                                    data-name="<?php echo $settings->siteName; ?> Subscription"

                                    data-panel-label="Update Card Details"

                                    data-label="UPDATE PAYMENT INFO"

                                    data-allow-remember-me=false

                                    data-locale="auto"

                                    data-email="<?php echo $companyInfo->companyEmail; ?>">

                                </script>

                            </form>



                            <?php

                        } else if($paymentStatus=='failed') {

                            ?>

                            <form action="" method="POST" class="pull-right">

                                <script

                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"

                                    data-key="<?php echo $stripePublishKey; ?>"

                                    data-image="img/tanning-icon-dark.png"

                                    data-name="<?php echo $settings->siteName; ?> Subscription"

                                    data-panel-label="Update Payment Information"

                                    data-label="UPDATE BILLING INFO"

                                    data-allow-remember-me=false

                                    data-locale="auto"

                                    data-email="<?php echo $companyInfo->companyEmail; ?>">

                                </script>

                            </form>



                            <?php

                        } else if($paymentStatus=='none') {

                            ?>

                            <p>You have now set up your company and your billing profile is almost complete. The next step is to select a plan. Once this has been completed, you will be able to start using <?php echo $settings->siteName; ?></p>

                            <a class="btn red btn-outline sbold pull-right" data-toggle="modal" href="#setupPaymentModal"><i class="fa fa-plus"></i> Choose Plan </a>

                            <span class="clearfix"></span>

                            <?php

                        } elseif ($paymentStatus=='cancelled') {


                            ?>
                            <p class="pull-left">You must resubscribe to contimue using <?php echo $settings->siteName; ?></p>

                            <form action="charge.php" method="POST" class="pull-right">

                                <input type="hidden" name="planAllowance" id="planAllowance" value="<?php echo $companyInfo->planAllowance; ?>" />

                                <input type="hidden" name="userPlan" id="userPlan" value="<?php echo $companyInfo->companyPlan; ?>" />

                                <script

                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"

                                    data-key="<?php echo $stripePublishKey; ?>"

                                    data-amount="2880"

                                    data-name="<?php echo $settings->siteName; ?>"

                                    data-description="<?php echo $settings->siteName; ?> Subscription"

                                    data-image="img/tanning-icon-dark.png"

                                    data-locale="auto"

                                    data-zip-code="false"

                                    data-label="RE-SUBSCRIBE"

                                    data-panel-label="Monthly Billing - "

                                    data-email="<?php echo $companyInfo->companyEmail; ?>"

                                    data-currency="gbp">

                                </script>

                            </form>

                            <?php

                        }


                        ?>

                        <div class="clearfix"></div>

                        <hr />

                        <h3>Note: </h3>

                        <p>

                            Your subscription will auto-renew as long as you have a valid payment source. If a payment fails, you will be sent an email notification and we will wait three days before retrying. If we still cannot process your payment, your account will be suspended until you update your billing information. During this time your account will not be available to your staff or customers.

                        </p>

                    </div>

                </div>

                <div class="portlet light" id="editBilling">

                    <div class="portlet-title">

                        <div class="caption">

                            <i class="fa fa-cc-visa font-blue-sharp"></i>

                            <span class="caption-subject bold font-grey-gallery uppercase"> Billing Info </span>

                            <span class="caption-helper"></span>

                        </div>

                        <div class="tools">

                            <a class="collapse" href="" data-original-title="" title=""> </a>

                            <a class="fullscreen" href="" data-original-title="" title=""> </a>

                        </div>

                    </div>

                    <div class="portlet-body">

                        <p>The information that you submit below will be used for your billing details. Required fields are marked with an asterisk (*).</p>

                        <form action="#" name="editBillingInfo" id="editBillingInfo" method="POST" >

                            <label>Company Name* <a href="javascript:;" class="tooltips" title="Enter the name of your company" data-placement="right">?</a></label>

                            <input type="text" name="companyName" id="companyName" class="form-control" /><br />

                            <label>Company Address* <a href="javascript:;" class="tooltips" title="Enter the address of your company" data-placement="right">?</a></label>

                            <input type="text" name="companyAddress" id="companyAddress" class="form-control" /><br />

                            <label>Company City* <a href="javascript:;" class="tooltips" title="Enter the city of your company" data-placement="right">?</a></label>

                            <input type="text" name="companyCity" id="companyCity" class="form-control" /><br />

                            <label>Company Postcode* <a href="javascript:;" class="tooltips" title="Enter the postcode of your company" data-placement="right">?</a></label>

                            <input type="text" name="companyPostcode" id="companyPostcode" class="form-control" /><br />

                            <label>Company Telephone* <a href="javascript:;" class="tooltips" title="Enter your company's telephone number" data-placement="right">?</a></label>

                            <input type="text" name="companyTelephone" id="companyTelephone" class="form-control" /><br />

                            <label>Company Email* <a href="javascript:;" class="tooltips" title="Enter your company's email address" data-placement="right">?</a></label>

                            <input type="text" name="companyEmail" id="companyEmail" class="form-control" /><br />

                            <label>Company Website <a href="javascript:;" class="tooltips" title="Enter your company website if you have one" data-placement="right">?</a></label>

                            <input type="text" name="companyWebsite" id="companyWebsite" class="form-control" /><br />

                            <label>Vat Registered? *  <a href="javascript:;" class="tooltips" title="Please let us know if you are VAT registered. This will enable us to calculate your accounts" data-placement="right">?</a></label>
                            <select name="isVat" id="isVat" class="form-control" >

                                <option value="">Please Select</option>

                                <option value="true">Yes</option>

                                <option value="false">No</option>

                            </select>

                            <br />

                            <span id="showVat" style="display: none">

                                <label>VAT Number* <a href="javascript:;" class="tooltips" data-placement="right" title="Please provide your VAT number" >?</a></label>

                                <input type="text" name="vatNumber" id="vatNumber" class="form-control" />

                                <input type="hidden" name="companyId" id="companyId" value="<?php echo $companyInfo->id; ?>" />

                                <br />

                                </span>

                            <input type="submit" value="Submit" class="btn btn-outline red pull-right" />

                            <span class="clearfix"></span>

                        </form>

                        <div class="clearfix"></div>

                    </div>

                </div>

            </div>

            <!-- END PAGE BASE CONTENT -->

        </div>

    </div>

    <!-- END CONTENT BODY -->

</div>