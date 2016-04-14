<?php

/* ::main.html.twig */
class __TwigTemplate_a9e52c44c934b97c1bff6d0ae5175422c7afa7787284a4e323b998dc848aa15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

    </head>
    <body style=\"overflow-x:hidden;\">
        ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 495
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 536
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "G-Pro";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


            <meta name=\"description\" content=\"HTML Responsive Template for Tour Agency or Company Based on Twitter Bootstrap 3.x.x\" />
            <meta name=\"keywords\" content=\"tour package, holiday, hotel, vocation, booking, trip, travel, tourism, tourist\" />
            <meta name=\"author\" content=\"crenoveative\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

            <!-- Fav and Touch Icons -->

            <!-- CSS Custom -->
            <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"bundles/projectadmin/front/images/ico/apple-touch-icon-144-precomposed.png\">
            <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"bundles/projectadmin/front/images/ico/apple-touch-icon-114-precomposed.png\">
            <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"bundles/projectadmin/front/images/ico/apple-touch-icon-72-precomposed.png\">
            <link rel=\"apple-touch-icon-precomposed\" href=\"bundles/projectadmin/front/images/ico/apple-touch-icon-57-precomposed.png\">
            <link rel=\"shortcut icon\" href=\"images/ico/favicon.png\">

            <!-- CSS Plugins -->
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">\t
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- CSS Font Icons -->
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/icons/ionicons/css/ionicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/icons/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/icons/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/icons/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/icons/rivolicons/style.css"), "html", null, true);
        echo "\">
         ";
        // line 47
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
                    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "            <div id=\"introLoader\" class=\"introLoading\"></div>

            <!-- BEGIN # MODAL LOGIN -->
            <div class=\"modal fade modal-login modal-border-transparent\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">

                        <button type=\"button\" class=\"btn btn-close close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                        </button>

                        <div class=\"clear\"></div>

                        <!-- Begin # DIV Form -->
                        <div id=\"modal-login-form-wrapper\">

                            <!-- Begin # Login Form -->
                            <form id=\"login-form\">

                                <div class=\"modal-body pb-5\">

                                    <h4 class=\"text-center heading mt-10 mb-20\">Sign-in</h4>

                                    <button class=\"btn btn-facebook btn-block\">Sign-in with Facebook</button>

                                    <div class=\"modal-seperator\">
                                        <span>or</span>
                                    </div>

                                    <div class=\"form-group\"> 
                                        <input id=\"login_username\" class=\"form-control\" placeholder=\"username\" type=\"text\"> 
                                    </div>
                                    <div class=\"form-group\"> 
                                        <input id=\"login_password\" class=\"form-control\" placeholder=\"password\" type=\"password\"> 
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"row gap-5\">
                                            <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                                <div class=\"checkbox-block fa-checkbox\"> 
                                                    <input id=\"remember_me_checkbox\" name=\"remember_me_checkbox\" class=\"checkbox\" value=\"First Choice\" type=\"checkbox\"> 
                                                    <label class=\"\" for=\"remember_me_checkbox\">remember</label>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\"> 
                                                <button id=\"login_lost_btn\" type=\"button\" class=\"btn btn-link\">forgot pass?</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class=\"modal-footer\">

                                    <div class=\"row gap-10\">
                                        <div class=\"col-xs-6 col-sm-6 mb-10\">
                                            <button id=\"login\" type=\"button\" class=\"btn btn-primary btn-block\">Sign-in</button>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-6 mb-10\">
                                            <button type=\"button\" class=\"btn btn-primary btn-block btn-inverse\" data-dismiss=\"modal\" aria-label=\"Close\">Cancel</button>
                                        </div>
                                    </div>
                                    <div class=\"text-left\">
                                        No account? 
                                        <button id=\"login_register_btn\" type=\"button\" class=\"btn btn-link\">Register</button>
                                    </div>

                                </div>
                            </form>
                            <!-- End # Login Form -->

                            <!-- Begin | Lost Password Form -->
                            <form id=\"lost-form\" style=\"display:none;\">
                                <div class=\"modal-body pb-5\">

                                    <h3 class=\"text-center heading mt-10 mb-20\">Forgot password</h3>
                                    <div class=\"form-group mb-10\"> 
                                        <input id=\"lost_email\" class=\"form-control\" type=\"text\" placeholder=\"Enter Your Email\">
                                    </div>

                                    <div class=\"text-center\">
                                        <button id=\"lost_login_btn\" type=\"button\" class=\"btn btn-link\">Sign-in</button> or 
                                        <button id=\"lost_register_btn\" type=\"button\" class=\"btn btn-link\">Register</button>
                                    </div>

                                </div>

                                <div class=\"modal-footer mt-10\">

                                    <div class=\"row gap-10\">
                                        <div class=\"col-xs-6 col-sm-6\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Submit</button>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-6\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-inverse btn-block\" data-dismiss=\"modal\" aria-label=\"Close\">Cancel</button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                            <!-- End | Lost Password Form -->

                            <!-- Begin | Register Form -->
                            <form id=\"register-form\" style=\"display:none;\">

                                <div class=\"modal-body pb-5\">

                                    <h3 class=\"text-center heading mt-10 mb-20\">Register</h3>

                                    <button class=\"btn btn-facebook btn-block\">Register with Facebook</button>

                                    <div class=\"modal-seperator\">
                                        <span>or</span>
                                    </div>

                                    <div class=\"form-group\"> 
                                        <input id=\"register_username\" class=\"form-control\" type=\"text\" placeholder=\"Username\"> 
                                    </div>

                                    <div class=\"form-group\"> 
                                        <input id=\"register_email\" class=\"form-control\" type=\"email\" placeholder=\"Email\">
                                    </div>

                                    <div class=\"form-group\"> 
                                        <input id=\"register_password\" class=\"form-control\" type=\"password\" placeholder=\"Password\">
                                    </div>

                                    <div class=\"form-group\"> 
                                        <input id=\"register_password_confirm\" class=\"form-control\" type=\"password\" placeholder=\"Confirm Password\">
                                    </div>

                                </div>

                                <div class=\"modal-footer mt-10\">

                                    <div class=\"row gap-10\">
                                        <div class=\"col-xs-6 col-sm-6 mb-10\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Register</button>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-6 mb-10\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-inverse btn-block\" data-dismiss=\"modal\" aria-label=\"Close\">Cancel</button>
                                        </div>
                                    </div>

                                    <div class=\"text-left\">
                                        Already have account? <button id=\"register_login_btn\" type=\"button\" class=\"btn btn-link\">Sign-in</button>
                                    </div>

                                </div>

                            </form>
                            <!-- End | Register Form -->

                        </div>
                        <!-- End # DIV Form -->

                    </div>
                </div>
            </div>
            <!-- END # MODAL LOGIN -->

            <!-- start Container Wrapper -->
            <div class=\"container-wrapper\">

                <header id=\"header\">

                    <!-- start Navbar (Header) -->
                    <nav class=\"navbar navbar-primary navbar-fixed-top navbar-sticky-function\">

                        <div class=\"navbar-top\">

                            <div class=\"container\">

                                <div class=\"flex-row flex-align-middle\">
                                    <div class=\"flex-shrink flex-columns\">
                                        <a class=\"navbar-logo\" href=\"index-2.html\">
                                            <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/logo-white.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
                                        </a>
                                    </div>
                                    <div class=\"flex-columns\">
                                        <div class=\"pull-right\">

                                            <div class=\"navbar-mini\">
                                                <ul class=\"clearfix\">

                                                    <li class=\"dropdown bt-dropdown-click hidden-xs\">
                                                        <a id=\"language-dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            ";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "username", array()), "html", null, true);
        echo "
                                                        </a>
                                                        ";
        // line 259
        echo "                                                    </li>

                                                    <li class=\"dropdown bt-dropdown-click hidden-xs\">
                                                        <a id=\"currncy-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            <i class=\"ion-android-globe hidden-xss\"></i> Name
                                                            <span class=\"caret\"></span>
                                                        </a>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
                                                            <li><a href=\"#\">Settings</a></li>
                                                            <li><a href=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("project_upload_photo");
        echo "\">Profile Image</a></li>
                                                            <li><a href=\"#\">Logout</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class=\"dropdown bt-dropdown-click visible-xs\">
                                                        <a id=\"currncy-language-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            <i class=\"fa fa-cog\"></i>
                                                        </a>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
                                                            <li><a href=\"#\"><i class=\"ion-social-usd\"></i> Dollar</a></li>
                                                            <li><a href=\"#\"><i class=\"ion-social-euro\"></i> Europe</a></li>
                                                            <li><a href=\"#\"><i class=\"ion-social-yen\"></i> Yen</a></li>
                                                            <li class=\"divider\"></li>
                                                            <li><a href=\"#\">English</a></li>
                                                            <li><a href=\"#\">France</a></li>
                                                            <li><a href=\"#\">Japanese</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class=\"user-action\">
                                                        <a data-toggle=\"modal\" href=\"";
        // line 289
        echo $this->env->getExtension('routing')->getPath("project_login");
        echo "\" class=\"btn\">Sign up/in</a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class=\"navbar-bottom hidden-sm hidden-xs\">

                            <div class=\"container\">

                                <div class=\"row\">

                                    <div class=\"col-sm-9\">

                                        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
                                            <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                                                <li><a href=\"index-2.html\">Home</a>
                                                    <ul>
                                                        <li><a href=\"index-2.html\">Home 01 - Default</a></li>
                                                        <li><a href=\"index-02.html\">Home 02 - Background Slider</a></li>
                                                        <li><a href=\"index-03.html\">Home 03 - Video Background</a></li>
                                                        <li><a href=\"index-04.html\">Home 04 - Smaller Package Items</a></li>
                                                        <li>
                                                            <a href=\"#\">Sub-menu</a>
                                                            <ul>
                                                                <li><a href=\"#\">Sub-menu 2</a></li>
                                                                <li><a href=\"#\">Sub-menu 2</a></li>
                                                                <li><a href=\"#\">Sub-menu 2</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"result-grid.html\">Tour Package</a>
                                                    <ul>
                                                        <li><a href=\"result-list.html\">Result - List</a></li>
                                                        <li><a href=\"result-grid.html\">Result - Grid</a></li>
                                                        <li><a href=\"detail-page.html\">Detail Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"about.html\">About Us</a></li>
                                                <li><a href=\"blog.html\">Blog</a>
                                                    <ul>
                                                        <li><a href=\"blog.html\">Blog</a></li>
                                                        <li><a href=\"blog-single.html\">Blog Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"#\">Pages</a>
                                                    <ul>
                                                        <li><a href=\"result-list.html\">Result - List</a></li>
                                                        <li><a href=\"result-grid.html\">Result - Grid</a></li>
                                                        <li><a href=\"detail-page.html\">Detail Page</a></li>
                                                        <li><a href=\"payment.html\">Payment</a></li>
                                                        <li><a href=\"confirmation.html\">Confirmation</a></li>
                                                        <li><a href=\"faq.html\">FAQ</a></li>
                                                        <li><a href=\"about.html\">About Us</a></li>
                                                        <li><a href=\"static-page.html\">Static Page</a></li>
                                                        <li><a href=\"blog.html\">Blog</a></li>
                                                        <li><a href=\"blog-single.html\">Blog Single</a></li>
                                                        <li><a href=\"contact.html\">Contact us</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"contact.html\">Contact us</a></li>
                                            </ul>
                                        </div><!--/.nav-collapse -->

                                    </div>

                                    <div class=\"col-sm-3\">

                                        <div class=\"navbar-phone\"><i class=\"fa fa-phone\"></i> Call us: +66 28 878 5452</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id=\"slicknav-mobile\"></div>

                    </nav>
                    <!-- end Navbar (Header) -->

                </header>

                <div class=\"clear\"></div>

            ";
        // line 385
        $this->displayBlock('content', $context, $blocks);
        // line 386
        echo "
            <footer class=\"footer\">

                <div class=\"container\">

                    <div class=\"main-footer\">

                        <div class=\"row\">

                            <div class=\"col-xs-12 col-sm-5 col-md-3\">

                                <div class=\"footer-logo\">
                                    <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/logo-white.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
                                </div>

                                <p class=\"footer-address\">324 Yarang Road, T.Chabangtigo, Muanng Pattani 9400 <br/> <i class=\"fa fa-phone\"></i> +66 28 878 5452 <br/> <i class=\"fa fa-phone\"></i> +66 2 547 2223 <br/> <i class=\"fa fa-envelope-o\"></i> <a href=\"#\">support@tourpacker.com</a></p>

                                <div class=\"footer-social\">

                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pinterest\"><i class=\"fa fa-pinterest\"></i></a>

                                </div>

                                <p class=\"copy-right\">&#169; Copyright 2016 D-Pro. All Rights Reserved</p>

                            </div>

                            <div class=\"col-xs-12 col-sm-7 col-md-9\">

                                <div class=\"row gap-10\">

                                    <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-offset-3 mt-30-xs\">

                                        <h5 class=\"footer-title\">About D-Pro</h5>

                                        <ul class=\"footer-menu\">

                                            <li><a href=\"static-page.html\">Who we are</a></li>
                                            <li><a href=\"static-page.html\">Careers</a></li>
                                            <li><a href=\"static-page.html\">Company history</a></li>
                                            <li><a href=\"static-page.html\">Legal</a></li>
                                            <li><a href=\"static-page.html\">Partners</a></li>
                                            <li><a href=\"static-page.html\">Privacy notice</a></li>

                                        </ul>

                                    </div>

                                    <div class=\"col-xs-12 col-sm-4 col-md-3 mt-30-xs\">

                                        <h5 class=\"footer-title\">Customer service</h5>

                                        <ul class=\"footer-menu\">

                                            <li><a href=\"static-page.html\">Payment</a></li>
                                            <li><a href=\"static-page.html\">Feedback</a></li>
                                            <li><a href=\"static-page.html\">Contact us</a></li>
                                            <li><a href=\"static-page.html\">Travel advisories</a></li>
                                            <li><a href=\"static-page.html\">FAQ</a></li>
                                            <li><a href=\"static-page.html\">Site map</a></li>

                                        </ul>

                                    </div>

                                    <div class=\"col-xs-12 col-sm-4 col-md-3 mt-30-xs\">

                                        <h5 class=\"footer-title\">Others</h5>

                                        <ul class=\"footer-menu\">

                                            <li><a href=\"static-page.html\">Destinations</a></li>
                                            <li><a href=\"static-page.html\">Blog</a></li>
                                            <li><a href=\"static-page.html\">Pre Departure Planning</a></li>
                                            <li><a href=\"static-page.html\">Visas</a></li>
                                            <li><a href=\"static-page.html\">Insurance</a></li>
                                            <li><a href=\"static-page.html\">Travel Guide</a></li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </footer>

        </div>  <!-- end Container Wrapper -->



        <!-- start Back To Top -->
        <div id=\"back-to-top\">
            <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
        <!-- end Back To Top -->


    ";
    }

    // line 385
    public function block_content($context, array $blocks = array())
    {
    }

    // line 495
    public function block_javascripts($context, array $blocks = array())
    {
        // line 496
        echo "
        <!-- JS -->

        <script type=\"text/javascript\" src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/instagram.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/spin.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.introLoader.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/select2.full.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.responsivegrid.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/readmore.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/validator.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.raty.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/customs.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script> 
        <script>
            \$(document).ready(function () {
                

                \$('#mainFlexSlider').flexslider(
                        {
                            animation: 'fade',
                            slideshow: true,
                            pauseOnHover: false,
                            controlNav: false,
                            directionNav: false,
                            slideshowSpeed: 4000,
                        }
                );

            });
        </script> 
    ";
    }

    public function getTemplateName()
    {
        return "::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 517,  685 => 516,  681 => 515,  677 => 514,  673 => 513,  669 => 512,  665 => 511,  661 => 510,  657 => 509,  653 => 508,  649 => 507,  645 => 506,  641 => 505,  637 => 504,  633 => 503,  629 => 502,  625 => 501,  621 => 500,  617 => 499,  612 => 496,  609 => 495,  604 => 385,  503 => 398,  489 => 386,  487 => 385,  388 => 289,  364 => 268,  353 => 259,  348 => 252,  334 => 241,  155 => 64,  152 => 63,  139 => 47,  135 => 40,  131 => 39,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  68 => 7,  65 => 6,  59 => 5,  53 => 536,  50 => 495,  48 => 63,  36 => 55,  34 => 6,  30 => 5,  24 => 1,);
    }
}
