<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 12/21/2016
 * Time: 10:19 AM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8"/>
    <meta property="og:url" content="http://www.fiorano.com/new/" />
    <meta property="og:type" content="website" />
    <meta property="og:title"  content=" Notice of Passing" />
    <meta property="og:description"   content="Notice of Passing " />
    <meta property="og:image" content="http://objdevelopment.com/notice/wp-content/uploads/65a4465e9258729f8085c4d780700dad.jpg" />
    <link rel="canonical" href="http://www.fiorano.com/new/" />
    <title><?php if(!empty($title)){ echo $title;} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="esb, rest, industry standards, event enabled, peer to peer, web services"/><meta name="description" content="Reduce complexity and increases flexibility by enabling linear,  build-as-you-grow scalability with no performance bottlenecks and 24x7 forever availability. Integrate applications and processes as standards-based,  event-enabled services over a distributed,  centrally managed infrastructure built entirely on industry standards including XML,  Web Services and REST"/> <link rel='stylesheet' id='rs-plugin-settings-css'

    <!--Font Awsome-->
    <link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
   <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"> </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>-->


    <link href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery.timepicker.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/fiorano.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/revSlider.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation (navbar-fixed-top)-->
<nav class="navbar navbar-default" role="navigation">

    <div class="container container-fluid">
        <div class="col-xs-12 align-center text-center site-head" >
            <div class="col-xs-1 pull-right">
                <div class="widget widget_text">
                    <div class="textwidget">
                        <a id="lang-sel" class="lang-sel" href="#">
                            <img id="lang-sel1" class="lang-sel" src="/images/flags/usa.gif" /> <i style="padding-top: 3px" id="lang-sel2" class="fa fa-angle-down"></i>
                        </a>
                    </div>
                    <ul id="lang-drop" class="flags">
                        <li style="padding:10px" class="vc_box_shadow"><a href="<?php echo __ROOT__?>/jp/"><img src="/images/flags/japan.gif" /> Japan</a></li>
                        <li style="padding:10px" class="vc_box_shadow"><a href="<?php echo __ROOT__?>/de/"><img src="/images/flags/germany.gif" /> Germany</a></li>
                    </ul>
                </div>
            </div>
            <div class="textwidget1 pull-right">
                <div class="textwidget">

                    <a id="lang-sel" class="lang-sel" href="<?php echo __ROOT__?>/Accounts/Login/">
                        Login
                    </a>
                </div>
            </div>
            <div class="textwidget1 pull-right">
                <div class="textwidget">
                    <a id="lang-sel" class="lang-sel" href="<?php echo site_url('company/about');?>">
                        About
                    </a>
                </div>
            </div>
            <div class="textwidget   pull-right hidden-xs" style="margin-top: 7px;">
            <div class="textwidget">
                <a id="lang-sel" target="_blank" class="lang-sel" href="<?php echo __ROOT__?>/blog/">
                    Blog
                </a>
            </div>
        </div>
            <div class="textwidget2 pull-right hidden-xs">
                <div class="textwidget">
                    <a id="lang-sel" class="lang-sel" href="<?php echo site_url('company/news');?>">
                        News & Press
                    </a>
                </div>
            </div>
            <div class="textwidget1 pull-right hidden-xs">
                <div class="textwidget">
                    <a id="lang-sel" class="lang-sel" href="<?php echo site_url('resources/downloads')?>">
                        Downloads
                    </a>
                </div>
            </div>
            <div class="textwidget3 pull-right">
                <div class="textwidget">
                    <a id="contactBtn" class="lang-sel" href="#" data-toggle="modal" data-target="#contact_us">
                        <button class="btn btn-primary">Get in touch</button>

                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-header page-scroll">
            <button type="button" class=" navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="<?php echo site_url();?>">
                <img src="<?php echo base_url('assets/images/fiorano_logo.png'); ?>" />
               </a>
        </div>
        <div id="navbarDiv" class="pull-right">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="collapse  navbar-collapse navbar-ex1-collapse navbar-right">

            <ul class="nav navbar-nav align-right menu" id="navBarMenu">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li class="dropdown">
                    <a class="page-scroll dropbtn" href="<?php echo site_url('products');?>">PRODUCTS</a>

                    <div class="hasSubMenu productsMenu padding-bottom-50">
                        <ul class="sub-menu">
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Business Integration</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo site_url('products/fiorano_integration');?>">Fiorano Integration</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('products/fiorano_esb');?>">Fiorano ESB</a></li>
                                    <!--<li class="menu-submenu"><a href="">Fiorano Cloud</a></li>-->
                                   <!-- <li class="menu-submenu"><a href="<?php /*echo site_url('products/fiorano_b2b');*/?>">Fiorano B2B</a></li>-->
                                   <!-- <li class="menu-submenu"><a href="">Fiorano Adapters</a></li>-->
                                    <li class="menu-submenu"><a href="<?php echo site_url('products/fiorano_api');?>">Fiorano API Management</a></li>
                                <!--    <li class="menu-submenu"><a href="">Fiorano Mobile Integration</a></li>-->
                                </ul>

                            </li>
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Enterprise Messaging</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo site_url('products/fiorano_mq');?>">FioranoMQ</a></li>
                                    <!--                                    <li class="menu-submenu"><a href="">Fiorano MQTT</a></li>-->

                                </ul>
                                <!--<h4>Composite Applications</h4>
                                <ul class="">
                                    <li id="" class="menu-submenu"><a href="/products/SOA-service-oriented-architecture/SOA-choreography-fiorano-studio.php">Fiorano Studio Tool</a></li>
                                </ul>-->

                                <h4>Opensource</h4>
                                <ul class="">
                                    <li id="" class="menu-submenu"><a href="<?php echo site_url('products/open_source_fiorano_esb');?>">Fiorano ESB Community Edition</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </li>
                <li class="dropdown">
                    <a class="page-scroll dropbtn" href="<?php echo site_url('solutions')?>">SOLUTIONS</a>
                    <div class="hasSubMenu solutionMenu padding-bottom-50">
                        <ul class="sub-menu">
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Industry Solutions</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo site_url('solutions/psd2')?>">PSD2</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('solutions/temenos_t24_core_banking_integration')?>">Core Banking</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('solutions/government_defense')?>">Government/Defense</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('solutions/health')?>">Health care</a></li>
                                  </ul>

                            </li>
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Application Solutions</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo site_url('solutions/sap_solution')?>">SAP Integration</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('solutions/salesforce_integration')?>">Salesforce Integration</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('solutions/swift_integration')?>">SWIFT Integration</a></li>
                                </ul>

                            </li>

                        </ul>
                    </div>

                </li>
                <li class="dropdown">
                    <a class="page-scroll dropbtn" href="<?php echo site_url('services')?>">SERVICES</a>
                    <div class="hasSubMenuCenter serviceMenu padding-bottom-50">
                        <ul class="sub-menu">
                            <li class="menu-item col-sm-12 nopadding">
                                <h4>Professional Services</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo site_url('services/architecture_assessment_design')?>">Architecture Design</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('services/implementation')?>">Implementation</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('services/performance_tuning')?>">Performance Tuning</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('services/training')?>">Training</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('services/premium_support')?>">Premium Support</a></li>
                                </ul>

                            </li>


                        </ul>
                    </div>

                </li>
                <li class="dropdown">
                    <a class="page-scroll dropbtn" href="<?php echo site_url('customers')?>">CUSTOMERS</a>
                    <div class="hasSubMenu customersMenu col-sm-12 padding-bottom-50">
                        <ul class="sub-menu">
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Customers</h4>
                                <ul class="">
                                    <!--<li class="menu-submenu"><a href="<?php /*echo site_url('customers/customer_by_company')*/?>">Customers - By Company</a></li>-->
                                    <li class="menu-submenu"><a href="<?php echo site_url('customers/customers_by_industry')?>">Customers - By Industry</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('customers/customer_testimonials')?>">Customer Testimonials</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('resources/casestudies')?>">Case Studies</a></li>

                                </ul>

                            </li>
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Featured Case Studies</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo __ROOT__?>/customers/casestudies/exelis.php">Harris Exelis</a></li>
                                    <li class="menu-submenu"><a href="<?php echo __ROOT__?>/customers/casestudies/polaris-transport.php">Polaris Transport</a></li>
                                    <li class="menu-submenu"><a href="<?php echo __ROOT__?>/customers/casestudies/loreal.php">L'Or&#xE9;al</a></li>
                                    <li class="menu-submenu"><a href="<?php echo __ROOT__?>/customers/casestudies/fujinami.php">Fujinami Towel Service</a></li>
                                </ul>

                            </li>

                        </ul>
                    </div>

                </li>
                <li class="dropdown">
                    <a class="page-scroll dropbtn" href="<?php echo site_url('partners'); ?>">PARTNERS</a>
                 <!--<div class="hasSubMenu partnerMenu ">
                        <ul class="sub-menu">
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Fiorano Partner Program</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="">Overview</a></li>
                                    <li class="menu-submenu"><a href="">Partner Categories</a></li>
                                    <li class="menu-submenu"><a href="">Partner Levels</a></li>
                                    <li class="menu-submenu"><a href="">Become a Partner</a></li>

                                </ul>
                                <h4>Composite Applications</h4>
                                <ul class="">
                                    <li id="" class="menu-submenu"><a href="">Fiorano Studio Tool</a></li>
                                </ul>
                            </li>
                            <li class="menu-item col-sm-6 nopadding">
                                <h4>Partner Resources</h4>
                                <ul class="">
                                    <li class="menu-submenu"><a href="">Fiorano Partner Program Overview</a></li>
                                    <li class="menu-submenu"><a href="">Partner Program Guide</a></li>

                                </ul>
                                <h4>Partner Portal Login</h4>
                                <ul class="">
                                    <li id="" class="menu-submenu"><a href="">Login to Portal</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>-->

               </li>
                <li class="dropdown">
                    <a class="page-scroll dropbtn" href="<?php echo site_url('resources'); ?>">RESOURCES</a>
                   <div class="hasSubMenu resourceMenu padding-bottom-50">
                        <ul class="sub-menu">
                            <li class="menu-item col-sm-6 nopadding">

                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo site_url('resources/downloads'); ?>">Product Downloads</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('resources/datasheets'); ?>">Product Datasheets</a></li>
                                     <li class="menu-submenu"><a href="<?php echo site_url('resources/documentation'); ?>">Product Documentation</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('resources/online_tutorials'); ?>">Online Demos &amp; Product Tutorials</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('resources/twominute_explainers'); ?>">2-Min Explainers</a></li>

                                </ul>

                            </li>
                            <li class="menu-item col-sm-6 nopadding">

                                <ul class="">
                                    <li class="menu-submenu"><a href="<?php echo site_url('resources/whitepapers'); ?>">Whitepapers</a></li>
                                    <li class="menu-submenu"><a href="<?php echo site_url('resources/casestudies'); ?>">Customer Case Studies</a></li>
                                     <li class="menu-submenu"><a href="<?php echo site_url('company/prod_review'); ?>">Analyst Reports &amp; Product Reviews</a></li>
                                     <li class="menu-submenu"><a href="<?php echo __ROOT__ ?>/devzone/support.php">Technical Support</a></li>
                                     <li class="menu-submenu"><a href="<?php echo __ROOT__ ?>/componentgallery/comp_index.php">Component Gallery</a></li>
                                </ul>

                            </li>

                        </ul>
                    </div>

                </li>

            </ul>
            <div class="divRightMenuSearch">

                <a id="searchId">
                    <i class="fa fa-search"></i>
                </a>

            </div>
            <div class="searchBoxHeader">
                <?php echo form_open('','')?>
                <div class="nopadding">  <input type='text' class='searchbox' id="query" placeholder="Search.."/></div>
                <div class="nopadding"> <a class="searchclose" id="searchclose"><i class="fa fa-times-circle-o"></i></a></div>
                <?php echo form_close()?>
            </div>
            <div class="col-xs-12 hidden-sm hidden-lg hidden-md">
                <div class="col-xs-6 hidden-sm">
                    <div class="textwidget">
                        <a id="lang-sel" class="lang-sel" href="<?php echo site_url('company/news');?>">
                            News & Press
                        </a>
                    </div>
                </div>
                <div class=" col-xs-6 textwidget1 hidden-sm">
                    <div class="textwidget">
                        <a id="lang-sel" class="lang-sel" href="<?php echo site_url('resources/downloads')?>">
                            Downloads
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<script>
    $('#searchId').click(function () {
        //$( "#navbarDiv" ).replaceWith( "<input type='text' class='searchbox'>" );
      $("#searchId").hide();
        $('.searchBoxHeader').show();

    });
    $('#searchclose').click(function () {
        //$( "#navbarDiv" ).replaceWith( "<input type='text' class='searchbox'>" );
       // $("#navbarDiv").show();
        $('.searchBoxHeader').hide();
        $("#searchId").show();
    });

    $(document).ready(function() {
        $('#query').keydown(function(e) {

            if (e.which === 13) {

               var query= $('#query').val();
               var urlgo="http://www.fiorano.com/search.php?query="+query;
                //location.href = urlgo;
               window.open(urlgo)
                return true;
            }
        });
    });

    </script>
