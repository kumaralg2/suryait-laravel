<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SURYA ITTECH | PROGRESSIVE WEB APP (PWA) Development and Training.</title>

<meta name="robots" content="index, follow" />
<meta name="keywords" content="PROGRESSIVE WEB APP (PWA) Development and Training." />
<meta name="description" content="http://www.suryaittech.com Is a PROGRESSIVE WEB APP (PWA) Development and Training. " />
<meta name="author" content="http://www.suryaittech.com" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta name="google-site-verification" content="dLwwDy3ED2omIG	FGSdwhziz_1eJZyXNiRR9XpI1fII8" />
<!--<meta name="google-site-verification" content="olt_KMuJwtpSEvmeWAnUETSZTeWdVTzDcYep39YhJmU" />-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="https/fontsgoogleapiscom/MS_2.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-440/css/MS_3.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- LIBRARY CSS-->
    <link rel="stylesheet" href="assets/libs/animate/animate.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-335/css/MS_4.css">
    <link rel="stylesheet" href="assets/libs/owl-carousel-20/assets/MS_0.css">
    <link rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="progressive-web-app-development-training.html" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/index.html' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }
    </script>
    
    <!-- Mega menu files -->
	<link href="assets/css/mega_menu.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/mega_menu.min.js"></script>
    <!-- Including repsonsive tabs--->
<!--   <link type="text/css" rel="stylesheet" href="assets/css/responsive-tabs.css" />-->

    
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            // variables
            var Options, get_options;

            // object
            Options = (function () {

                // constructor
                function Options(a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z) {
                    this.logo_align = a;
                    this.links_align = b;
                    this.socialBar_align = c;
                    this.searchBar_align = d;
                    this.trigger = e;
                    this.effect = f;
                    this.effect_speed = g;
                    this.sibling = h;
                    this.outside_click_close = i;
                    this.top_fixed = j;
                    this.sticky_header = k;
                    this.sticky_header_height = l;
                    this.menu_position = m;
                    this.full_width = n;
                    this.color_change = o;
                    this.color_button = p;
                }

                // object classes
                Options.prototype.optionsChange = function () {
                    // menu initialize
                    $('#menu-1').megaMenu({
                        // DESKTOP MODE SETTINGS
                        logo_align          : this.logo_align,
                        links_align         : this.links_align,
                        socialBar_align     : this.socialBar_align,
                        searchBar_align     : this.searchBar_align,
                        trigger             : this.trigger,
                        effect              : this.effect,
                        effect_speed        : 400,
                        sibling             : true,
                        outside_click_close : true,
                        top_fixed           : this.top_fixed,
                        sticky_header       : this.sticky_header,
                        sticky_header_height: 200,
                        menu_position       : this.menu_position,
                        full_width          : false,
                        // MOBILE MODE SETTINGS
                        mobile_settings     : {
                            collapse            : true,
                            sibling             : true,
                            scrollBar           : true,
                            scrollBar_height    : 400,
                            top_fixed           : false,
                            sticky_header       : false,
                            sticky_header_height: 200
                        }
                    });
                };

                // color change function
                Options.prototype.colorChange = function (selector, color) {
                    $(selector).click(function () {
                        $('#menu-1').attr('data-color', color);
                    })
                };

                // return options
                return Options;
            })();

            // call object
            get_options = new Options();
            // call options change
            get_options.optionsChange();
            // call color change function
            get_options.colorChange();
            // data colors
            get_options.colorChange('#color-1', 'blue-grey');
            get_options.colorChange('#color-2', 'blue-grey-invert');
            get_options.colorChange('#color-3', 'brown');
            get_options.colorChange('#color-4', 'brown-invert');
            get_options.colorChange('#color-5', 'cyan');
            get_options.colorChange('#color-6', 'cyan-invert');
            get_options.colorChange('#color-7', 'deep-orange');
            get_options.colorChange('#color-8', 'deep-orange-invert');
            get_options.colorChange('#color-9', 'deep-purple');
            get_options.colorChange('#color-10', 'deep-purple-invert');
            get_options.colorChange('#color-11', 'grey');
            get_options.colorChange('#color-12', 'grey-invert');
            get_options.colorChange('#color-13', 'indigo');
            get_options.colorChange('#color-14', 'indigo-invert');
            get_options.colorChange('#color-15', 'light-blue');
            get_options.colorChange('#color-16', 'light-blue-invert');
            get_options.colorChange('#color-17', 'light-green');
            get_options.colorChange('#color-18', 'light-green-invert');
            get_options.colorChange('#color-19', 'lime');
            get_options.colorChange('#color-20', 'lime-invert');
            get_options.colorChange('#color-21', 'orange');
            get_options.colorChange('#color-22', 'orange-invert');
            get_options.colorChange('#color-23', 'pink');
            get_options.colorChange('#color-24', 'pink-invert');
            get_options.colorChange('#color-25', 'purple');
            get_options.colorChange('#color-26', 'purple-invert');
            get_options.colorChange('#color-27', 'red');
            get_options.colorChange('#color-28', 'red-invert');
            get_options.colorChange('#color-29', 'teal');
            get_options.colorChange('#color-30', 'teal-invert');

            // logo align left or right
            var bt1 = true;
            $('#btn1').prop('checked', false).click(function () {
                if (bt1 === true) {
                    get_options.logo_align = 'right';
                    get_options.optionsChange();
                    bt1 = false;
                } else {
                    get_options.logo_align = 'left';
                    get_options.optionsChange();
                    bt1 = true;
                }
            });

            // links align left or right
            var bt2 = true;
            $('#btn2').prop('checked', false).click(function () {
                if (bt2 === true) {
                    get_options.links_align = 'right';
                    get_options.optionsChange();
                    $('#align-1').addClass('margin-fix');
                    $('#align-2').addClass('margin-fix-1');
                    bt2 = false;
                } else {
                    get_options.links_align = 'left';
                    get_options.optionsChange();
                    $('#align-1').removeClass('margin-fix');
                    $('#align-2').removeClass('margin-fix-1');
                    bt2 = true;
                }
            });

            // social icons left or right
            var bt3 = true;
            $('#btn3').prop('checked', false).click(function () {
                if (bt3 === true) {
                    get_options.socialBar_align = 'right';
                    get_options.optionsChange();
                    bt3 = false;
                } else {
                    get_options.socialBar_align = 'left';
                    get_options.optionsChange();
                    bt3 = true;
                }
            });

            // search bar left or right
            var bt4 = true;
            $('#btn4').prop('checked', false).click(function () {
                if (bt4 === true) {
                    get_options.searchBar_align = 'left';
                    get_options.optionsChange();
                    bt4 = false;
                } else {
                    get_options.searchBar_align = 'right';
                    get_options.optionsChange();
                    bt4 = true;
                }
            });

            // fixed on top
            var bt5 = true;
            $('#btn5').prop('checked', false).click(function () {
                if (bt5 === true) {
                    get_options.top_fixed = true;
                    get_options.optionsChange();
                    $('#hide-label-1').css('visibility', 'hidden');
                    bt5 = false;
                } else {
                    get_options.top_fixed = false;
                    get_options.optionsChange();
                    $('#hide-label-1').css('visibility', 'visible');
                    bt5 = true;
                }
            });

            // sticky header
            var bt6 = true;
            $('#btn6').prop('checked', false).click(function () {
                if (bt6 === true) {
                    get_options.sticky_header = true;
                    get_options.optionsChange();
                    $('body').css('height', '2000px');
                    $('#hide-label').css('visibility', 'hidden');
                    bt6 = false;
                } else {
                    get_options.sticky_header = false;
                    get_options.optionsChange();
                    $('body').css('height', '');
                    $('#hide-label').css('visibility', 'visible');
                    bt6 = true;
                }
            });

            // position change
            $('#btn7').val('horizontal').on('change keydown keyup', function () {
                get_options.menu_position = $(this).val();
                get_options.optionsChange();
                var get_value = $(this).val();
                if (get_value === 'vertical-left' || get_value === 'vertical-right') {
                    $('.abc').hide(0);
                } else {
                    $('.abc').show(0);
                }
            });

            // drop down effects
            $('#btn8').val('fade').on('change keydown keyup', function () {
                get_options.effect = $(this).val();
                get_options.optionsChange();
            });

            // trigger change
            $('#btn9').val('hover').on('change keydown keyup', function () {
                get_options.trigger = $(this).val();
                get_options.optionsChange();
                console.log($(this).val())
            });

          
    </script>

</head>
<body>
<!-- HEADER-->
<header role="heading">
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email">
                <a href="mailto:training@suryaittech.com"><i class="topbar-icon fa fa-envelope-o"></i><span>training@suryaittech.com</span></a>
                </div>
                <div class="hotline">
                <a href="#"><i class="topbar-icon fa fa-phone"></i><span>040 - 4003 0404</span></a></div>
            </div>
            <div class="topbar-right pull-right">
            
            <div class="group-sign-in"><a href="about-web-techies.html" class="register"><i class="fa fa-smile-o"></i> About Us</a></div>
            <div class="group-sign-in"><a href="careers.html" class="register"><i class="fa fa-user"></i> Careers</a></div>
                

            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-header">
                    <div class="logo pull-left"><a href="index.html" class="header-logo"></a>
                    <a href="index.html"><h2 class="wt-color wt-logo" title="Web and Mobile Technologies Training Institute">SURYA <div class="green">ITTECH</div><small>Learn for tomorrow...</small></h2></a>						
                    </div>
                    
                </div>
                <div class="learn-title pull-right">
                <h3>Making Future INDIA!!!</h3>
                </div>
                <!-- menu start -->

<nav id="menu-1" class="mega-menu navbar-right">
        <!-- menu list items container -->
    
        <section class="menu-list-items">
            <!-- menu logo -->
            <ul class="menu-logo">
                <li>
                    <a href="#" style="display:none"> <!--<i class="fa fa-circle-o-notch"></i>--> Company Logo
                        </a>
                </li>
            </ul>
        	<ul class="menu-links">
            <!-- active class -->
            <li><a href="index.html"> <i class="fa fa-home"></i> Home</a></li>            
            <li><a href="#">Courses <i class="fa fa-angle-down fa-indicator"></i></a>

                <!-- drop down with grid column 5 + offset-1 -->
                <div id="align-1" class="drop-down grid-col-12">
                    <!--grid row-->
                    <div class="grid-row">
                        <div class="grid-col-3">
                            <h4>UI Designing</h4>
                            <a href="ui-designing-training.html" class="space-0">
                                <img src="assets/images/ui-designing-course.png" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> Photoshop</a></li>
                                <li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> Illustrator</a></li>
                                <li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> HTML4 / HTML5</a></li>
                                <li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> CSS2 / CSS3</a></li>
                                <li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> JavaScripts(Basics)</a></li>
                                <li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> IONIC Framework</a></li>
                                <li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> Mobile User Interface</a></li>
                                <li><a href="ui-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> Web User Interface</a></li>
                            </ul>
                            
                        </div>
                        <div class="grid-col-3">
                            <h4>UX Designing</h4>
                            <a href="ux-designing-training.html" class="space-0">
                                <img src="assets/images/ux-designing-training-course.png" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> User Analysis </a></li>
                                <li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> UX Principles</a></li>
                                <li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> UX Methods</a></li>
                                <li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> UX WireFrames</a></li>
                                <li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> UI Mockups</a></li>
                                <li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> UI Prototypes</a></li>
                                <li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> Photoshop, Illustrator</a></li>
                                <li><a href="ux-designing-training.html"><i class="fa fa-arrow-circle-o-right"></i> Balsmiq / Sketch</a></li>
                            </ul>
                            
                        </div>
                        <div class="grid-col-3">
                            <h4>UI Development</h4>
                            <a href="ui-development-training.html" class="space-0">
                                <img src="assets/images/ui-development-training-course.jpg" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="ui-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> HTML5 & CSS3 </a></li>
                                <li><a href="ui-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> JavaScript (Bignner)</a></li>
                                <li><a href="ui-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> JavaScript (Advanced)</a></li>
                                <li><a href="ui-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> jQuery</a></li>
                                <li><a href="ui-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> Bootstrap</a></li>
                                <li><a href="ui-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> Responsive Web Design</a></li>
                                <li><a href="ui-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> Angular JS</a></li>
                                <li><a href="ui-developmen-training.html"><i class="fa fa-arrow-circle-o-right"></i> Node.JS</a></li>
                                
                            </ul>
                            
                        </div>
                        <div class="grid-col-3">
                            <h4>Web App Development</h4>
                            <a href="web-application-development-training.html" class="space-0">
                                <img src="assets/images/rwd-bootstrap-training-course.png" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> PHP/MySQL </a></li>
                                <li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> ASP.Net/SQL</a></li>
                                <li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> WordPress</a></li>
                                <li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> Joomla</a></li>
                                <li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> E-Commerece</a></li>
                                <li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> Web Applications</a></li>
                                <li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> Mobile Applications</a></li>
                                <li><a href="web-application-development-training.html"><i class="fa fa-arrow-circle-o-right"></i> Cross Plotform Applications</a></li>
                            </ul>
                            
                        </div>

                    </div>
                </div>

            </li>
            <li><a href="web-techies-solutions.html">Training <i class="fa fa-angle-down fa-indicator"></i></a>

            <!-- drop down multilevel  -->
            <ul class="drop-down-multilevel">                
                <li><a href="web-techies-online-training.html">Online Training </a></li>
                <li><a href="web-techies-class-room-training.html">Class Room Training</a></li>
                <li><a href="web-techies-corporate-training.html">Corporate Training</a></li>
                <li><a href="web-techies-schools-colleges-training.html">Schools / Colleges Training</a></li>
                <li><a href="web-techies-one-to-one-training.html">One-to-One Training</a></li>
             </ul>
             </li>
            <li><a href="javascript:void(0)">Services <i class="fa fa-angle-down fa-indicator"></i></a>

                <!-- drop down with grid column 5 + offset-1 -->
                <div id="align-1" class="drop-down grid-col-12">
                    <!--grid row-->
                    <div class="grid-row">
                        <div class="grid-col-3">
                            <h4>Web Application Development</h4>
                            <a href="web-application-development.html" class="space-0">
                                <img src="assets/images/gallery/gallery-25.jpg" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="web-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> Web Application Designing</a></li>
                                <li><a href="web-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> Wesite Re-designing</a></li>
                                <li><a href="web-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> Web Application Development</a></li>
                                <li><a href="web-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> CMS Application Development</a></li>
                                <li><a href="web-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> E-Com. App. Development</a></li>
                                <li><a href="web-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> Domain & Hosting</a></li>
                               
                            </ul>
                            
                        </div>
                        <div class="grid-col-3">
                            <h4>Mobile Application Development</h4>
                             <a href="mobile-application-development.html" class="space-0">
                                <img src="assets/images/gallery/gallery-25.jpg" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="mobile-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> HTML5 App. Development </a></li>
                                
                                <li><a href="mobile-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> Android App. Development</a></li>
                                <li><a href="mobile-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> iOS Application Development</a></li>
                                <li><a href="mobile-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> Windows App. Development</a></li>
                                
                                <li><a href="mobile-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> AngularJS App. Development</a></li>							
                                <li><a href="mobile-application-development.html"><i class="fa fa-arrow-circle-o-right"></i> Singpage App. Development</a></li>
                            </ul>
                           
                        </div>
                        <div class="grid-col-3">
                            <h4>Graphic & Print Designing</h4>
                            <a href="graphic-print-designing.html" class="space-0">
                                <img src="assets/images/gallery/gallery-25.jpg" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="graphic-print-designing.html"><i class="fa fa-arrow-circle-o-right"></i> Graphic Designing </a></li>
                                <li><a href="graphic-print-designing.html"><i class="fa fa-arrow-circle-o-right"></i> Corporate Branding</a></li>
                                <li><a href="graphic-print-designing.html"><i class="fa fa-arrow-circle-o-right"></i> Logo Designing</a></li>
                                <li><a href="graphic-print-designing.html"><i class="fa fa-arrow-circle-o-right"></i> Brochures & Pomplets</a></li>
                                
                                
                            </ul>
                            
                        </div>
                        <div class="grid-col-3">
                            <h4>SEO / SMM</h4>
                            <a href="seo-smm-marketing.html" class="space-0">
                                <img src="assets/images/gallery/gallery-25.jpg" alt="Image">
                            </a>
                            <ul>
                            	<li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> On-Page SEO </a></li>
                                <li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> Off-Page SEO</a></li>
                                <li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> Social Media Marketing</a></li>
                                <li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> Email Marketing</a></li>
                                <li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> SMS Marketing</a></li>
                                <li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> Google Advertising</a></li>
                                <li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> Mobile Applications</a></li>
                                <li><a href="seo-smm-marketing.html"><i class="fa fa-arrow-circle-o-right"></i> Pay-Per-Click</a></li>
                            </ul>
                            
                        </div>

                    </div>
                </div>

            </li>
            <li><a href="web-techies-solutions.html">Solutions <i class="fa fa-angle-down fa-indicator"></i></a>

            <!-- drop down multilevel  -->
            <ul class="drop-down-multilevel">                
                <li><a href="web-techies-solutions.html">Manufacturing </a></li>
                <li><a href="web-techies-solutions.html">Health Care</a></li>
                <li><a href="web-techies-solutions.html">Education</a></li>
                <li><a href="web-techies-solutions.html">Tours & Travels</a></li>
                <li><a href="web-techies-solutions.html">Retail</a></li>
             </ul>
             </li>
            <li><a href="clients.html">Clients</a></li>  
            <li><a href="contact-web-techies.html">Contact Us</a></li>
        	</ul>
       		<!-- Batch Info -->
            <div class="topbar-right batch-btn">            
           <a href="Coures-Batches.pdf.html" target="_blank" class="btn btn-success"><i class="fa fa-book"></i> NEW BATCHES</a>
            </div>
            <!-- Batch Info end-->
        </section>
       
</nav>

				<!-- menu end -->
            </div>
        </div>
    </div>
</header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
<div id="page-wrapper"><!-- MAIN CONTENT-->
<div class="main-content"><!-- CONTENT-->
<div class="content">
	
    
    
    <!-- SLIDER BANNER-->
    <div class="section">
                    <div class="search-input">
                        <div class="container">
                            <div class="search-input-wrapper">
                                <h2 class="captions white">Web App Development Certification Course</h2>
                                <ol class="breadcrumb ">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="web-app-certification-course.html">Web App Development Certification Course</a></li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
   	<!-- COURSES -->
    
    <div class="container">
    <div class="intro-edu-wrapper">
        <div class="row topMar20">
        <div class="col-md-4">
            <img src="assets/images/Web_App_Development.jpg" alt="About SURYA ITTECH" class="intro-image fadeInLeft animated wow" style="display: block;width:100%;margin-top: 30px"/>
        </div><br/>
        <div class="col-md-5">
                <div class="intro-content"><h3>Web Development Certification Course</h3></div>
                <div class="intro-content" style="text-align:justify;">
                    <p>Get Online Certificate on Web Development.This course will help you to learn all the technologies need to become a Complete Web Developer</p>
<!--                <p><span class="bebas-font">Web App Development Certification Course</span> are user experiences that have the reach of the web, and are:</p>-->
                
                <div>
                	<h3>Course Content</h3>
                       <ul>
                            	<li><a href=""><i class="fa fa-arrow-circle-o-right"></i> Getting Started & HTML </a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> CSS</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> Javascript</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> JQuery</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> Twitter Bootstrap</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> Wordpress</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> PHP</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> MySQL</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> API's</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> Mobile Apps</a></li>
                                <li><a href=""><i class="fa fa-arrow-circle-o-right"></i> What's Next</a></li>
                           
                            </ul>
                    <h3>Description</h3>
                    <p>Learn What It Takes to Code Dynamic, Professional Websites and Web Apps From The Comfort of Your Own Home.</p>

                    <p>Do you ever browse the internet wondering how your favorite websites were built?Facebook, Twitter, Amazon—they were all created by people who at one point in time didn’t know anything about coding. How did they obtain this knowledge?</p>

                    <p>In this comprehensive course, I’m going to show you everything you need to know so that you can follow in these people’s footsteps.</p>

                    <p>You’re going to learn how to code AND you’re going to become a certified professional from a recognized international trainer. And best of all, you’re going to have fun doing it.</p>
                    
                        
                </div>
             </div>
                
            
        </div>
        <div class="col-md-3">
            <h3>Certificate Registration</h3>
            <hr>
            <h4>Get Your Course Complete Certificate Now!</h4>
            <div><a><h2>Rs.5,500/-</h2></a><strike>Rs.15,500/-</strike>,65% off
            </div>
            <a><b>2 days</b> left at this price!</a>
            <hr>
            <br>
           <div class="pm-button"><a href="https://www.payumoney.com/paybypayumoney/#/377689"><img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/232.png" /></a></div>
            
        </div>
        </div>
        </div>
    <br>
<!-- Nav Tabs -->
  <div id="horizontalTab" class="container">	
         <ul>
			<li class="active">         
                <a  href="#1a">Course Details</a>
			</li>
			<li><a href="#2a">Offerings</a>
			</li>
			<li><a href="#3a">Prerequisite</a>
			</li>
  		     <li><a href="#4a">Who Should Attend</a>
			</li>
             <li><a href="#5a">Refund Policy</a>
			</li>
		</ul>
			  
      <div class="tab-pane active" id="1a">
                  <br>
                  <ul>
                 <li> The course starts with the fundamentals. I’ll show you insider tips to work quickly and efficiently with web technologies like HTML5, CSS3 and PHP.
                 </li>
                  <li>Once you’ve got that locked down, I’ll show you how to build your own responsive websites using more advanced techniques such as iQuery PHP 7, MySQL 5 and Twitter Bootstrap.
                </li>
                <li>By then you’ll be developing blogs and eCommerce sites with Wordpress, and learn smart ways to add dynamic content, using APls to connect to sites such as Google Maps and Facebook.
                </li>
                 </ul>
                 <br>
                 <img src="assets/images/course-content.png" alt="Image">
                
              </div>
      <div class="tab-pane" id="2a">
                  <br>
                  <ul>
                        <li>A printed certificate indicating your new certification that you can present to employers or prospects.</li>
                        <li>A letter explaining the certification and its value to a prospective employer. The letter will state exactly what mastery the certification represents.</li>
                        <h4>Sample Certificate</h4>
                     <img src="assets/images/sample-certificate.png" alt="Image">
                      <p>Note:This is just a sample not an actual certificate, your certificate may vary as per the course.</p>
                        
                    </ul>     
              </div>
      <div class="tab-pane" id="3a">
                  <br>
                <ul>
                     <li>There are no skill prerequisites for this course although it's helpful if you are familiar with operating your computer and using the internet.</li>
                    <li>You can take this course using a Mac, PC(Windows) or Linux machine.</li>
                    <li>It is recommended that you download the free Brackets text editor.</li>
                 </ul>
                            
             </div>
            <div class="tab-pane" id="4a">
                  <br>
                   <ul>
                    <li>Web Designers who Want to Learn To Code.</li>
                    <li>Students who want Practical Development Skills.</li>
                    <li>Those Considering a Career in Web Development.</li>
                    <li>Those who are new to Programming.</li>
                    <li>College Students who are pursuing education or currently looking for a new internship or full time job.</li>
                       
                    </ul>    
              </div>
             <div class="tab-pane" id="5a">
                  <br>
                   <ul>
                    <li>Please contact our Customer Care <b><i>support@suryaittech.com</i></b></li>
                    <li>We will be ready to help you out in any issues concerning the course.</li>

                   </ul>
                    
              </div>
  </div>

<br/>
    <!--Nave tabs-->
        
        
<hr>
    
</div>
</div>
<!-- BUTTON BACK TO TOP-->
<div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-wrapper">
                <div class="footer-top-left"><p class="footer-top-focus">BECOME AN INSTRUCTOR</p>

                    <p class="footer-top-text">Join SURYA ITTECH community and earn money hassle free!</p></div>
                    
                
                <div class="footer-top-right">
                    <p>Contact: 040 - 4003 0404</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="container">
            <div class="footer-main-wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-12 sd380">
                            <div class="edugate-widget widget">
                                <div class="title-widget">CONTACT US</div>
                                <div class="content-widget">
                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-map-marker"></i><a href="#"><p>#63, 9<sup>th</sup>Phase, KPHB</p>

                                                <p>Behind Sujana Forum Mall</p>
                                                <p>Hyderabad - 500072</p>
                                                </a></li>
                                            <li><i class="fa fa-envelope-o"></i><a href="#">training@suryaittech.com</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#">040 - 4003 0404</a></li>
                                            
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 sd380">
                            <div class="useful-link-widget widget">
                                <div class="title-widget">TRAINING KEEWORDS</div>
                                <div class="content-widget">
                                    <div class="useful-link-list">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                
                <a href="#">PROGRESSIVE WEB APP (PWA) Development and Training.</a>|
                <a href="#">UI Designing Training </a>|                 
                <a href="#">UX Designing Training </a>| 
                <a href="#">UI Developmnet Training </a>| 
                <a href="#">HTML5 &amp; CSS3 Training </a>| 
                <a href="#">JavaScript Training </a>| 
                <a href="#">jQuery Training </a>| 
                <a href="#">Web Design Training </a>| 
                <a href="#">Responsive Web Design Training </a>| 
                <a href="#">Web Application Training </a>| 
                <a href="#">UI Designing Training </a>| 
                <a href="#">PHP Web Development Training </a>| 
                <a href="#">Bootstrap Training </a>| 
                <a href="#">UI Frameworks Training </a>| 
                <a href="#">Mobile UI Design Training </a>| 
                <a href="#">Less and SAAS Training </a>| 
                <a href="#">Responsive Website Training </a>| 
                <a href="#">Mobile Website Training </a>| 
                <a href="#">Mobile Application Training </a>| 
              	<a href="#">Web Development Training </a>| 
              	<a href="#">ASP.Net/MS Sql Training </a>| 
              	<a href="#">PHP/MySql Training </a>| 
                <a href="#">CMS Training </a>| 
                <a href="#">Social Network Marketing Training </a>| 
                <a href="#">PhotoshopCS6 Training </a>| 
                <a href="#">DreamweaverCS6 Training </a>| 
                <a href="#">Illustratrion Training </a>| 
                <a href="#">Graphic Design Training </a>| 
                <a href="#">&amp; Cloud Computing Training...</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        
                        <div class="col-md-3 col-sm-6 sd380">
                            <div class="mailing-widget widget">
                                <div class="title-widget">SUBSCRIBE & FOLLOW US</div>
                                <div class="content-wiget"><p>Sign up for our mailing list to get latest updates and offers.</p>

                                    <form action="#">
                                        <div class="input-group">
                                        <input type="text" placeholder="Email address" class="form-control form-email-widget"/><span class="input-group-btn">
                                        <input type="submit" value="✓" class="btn btn-email" disabled/>
                                        </span></div>
                                    </form>
                                    <p>We respect your privacy</p>

                                    <div class="socials">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hyperlink">
                <div class="pull-left hyper-left">
                    <ul class="list-inline">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="#">COURSES</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">CLIENTS</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
                <div class="pull-right hyper-right">Developed by <a href="http://www.web-grafix.in">WEB GRAFIX</a></div>
            </div>
        </div>
    </div>
</footer>
<!-- THEME SETTING-->
</div>

 <!-- Responsive Tabs JS -->
    <script src="assets/js/jquery.responsiveTabs.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var $tabs = $('#horizontalTab');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,

                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });

           
            $('.select-tab').on('click', function() {
                $tabs.responsiveTabs('activate', $(this).val());
            });

        });
    </script>
<script src="assets/libs/bootstrap-335/js/MS_13.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-20/MS_12.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
<script src="assets/libs/isotope/fit-columns.js"></script>
<script src="assets/js/pages/homepage.js"></script>
</body>

</html> 