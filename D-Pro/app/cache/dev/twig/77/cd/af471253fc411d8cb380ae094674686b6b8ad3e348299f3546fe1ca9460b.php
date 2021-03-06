<?php

/* projectAdminBundle:Default:home.html.twig */
class __TwigTemplate_77cdaf471253fc411d8cb380ae094674686b6b8ad3e348299f3546fe1ca9460b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- start Main Wrapper -->
    <div class=\"main-wrapper\">

        <div class=\"flexslider-hero-slider\">
            <div id=\"mainFlexSlider\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li class=\"slide\">
                            <div class=\"flexslider-image-bg\" style=\"background: url(bundles/projectadmin/front/images/hero-header/02.jpg) center center no-repeat; background-size:cover\"></div>
                        </li><!-- slide1 end -->

                        <li class=\"slide\">
                            <div class=\"flexslider-image-bg\" style=\"background: url(bundles/projectadmin/front/images/hero-header/03.jpg) center center no-repeat; background-size:cover\"></div>
                        </li><!-- slide2 end -->

                        <li class=\"slide\">
                            <div class=\"flexslider-image-bg\" style=\"background: url(bundles/projectadmin/front/images/hero-header/04.jpg) center center no-repeat; background-size:cover\"></div>
                        </li><!-- slide3 end -->

                        <li class=\"slide\">
                            <div class=\"flexslider-image-bg\" style=\"background: url(bundles/projectadmin/front/images/hero-header/05.jpg) center center no-repeat; background-size:cover\"></div>
                        </li><!-- slide4 end -->

                        <li class=\"slide\">
                            <div class=\"flexslider-image-bg\" style=\"background: url(bundles/projectadmin/front/images/hero-header/06.html) center center no-repeat; background-size:cover\"></div>
                        </li><!-- slide5 end -->

                    </ul><!-- slides end -->

                    <div class=\"flexslider-overlay\"></div>

                </div><!-- flexslider end -->
            </div>

            <div class=\"main-search-holder\">

                <div class=\"container\">

                    <div class=\"row\">

                        <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">

                            <h1 class=\"hero-title\">G-Pro Brings Everything To Your Doorstep</h1>
                            <p class=\"lead\">Find professionals, Artisans, Sellers and other services !</p>

                        </div>

                    </div>

                    <div class=\"main-search-wrapper full-width\">

                        <div class=\"inner\">

                            <div class=\"column-item\">

                                <div class=\"form-group\">

                                    <select name=\"destination\" class=\"select2-multi form-control\" data-placeholder=\"Choose a Destination\" multiple>
                                        <option value=\"\">Choose a Destination</option>
                                        <option value=\"0\">Any Destination</option>
                                        <option value=\"Albania\">Albania</option>
                                        <option value=\"Austria\">Austria</option>
                                        <option value=\"Belgium\">Belgium</option>
                                        <option value=\"Bosnia\">Bosnia</option>
                                        <option value=\"Croatia\">Croatia</option>
                                        <option value=\"Czech Republic\">Czech Republic</option>
                                        <option value=\"Denmark\">Denmark</option>
                                        <option value=\"Egypt\">Egypt</option>
                                        <option value=\"England\">England</option>
                                        <option value=\"Estonia\">Estonia</option>
                                        <option value=\"Finland\">Finland</option>
                                        <option value=\"France\">France</option>
                                        <option value=\"Germany\">Germany</option>
                                        <option value=\"Greece\">Greece</option>
                                        <option value=\"Herzegovina\">Herzegovina</option>
                                        <option value=\"Hungary\">Hungary</option>
                                        <option value=\"Ireland\">Ireland</option>
                                        <option value=\"Italy\">Italy</option>
                                        <option value=\"Latvia\">Latvia</option>
                                        <option value=\"Liechtenstein\">Liechtenstein</option>
                                        <option value=\"Lithuania\">Lithuania</option>
                                        <option value=\"Luxembourg\">Luxembourg</option>
                                        <option value=\"Monaco\">Monaco</option>
                                        <option value=\"Montenegro\">Montenegro</option>
                                        <option value=\"Netherlands\">Netherlands</option>
                                        <option value=\"Northern Ireland\">Northern Ireland</option>
                                        <option value=\"Poland\">Poland</option>
                                        <option value=\"Portugal\">Portugal</option>
                                        <option value=\"Russia\">Russia</option>
                                        <option value=\"Scotland\">Scotland</option>
                                        <option value=\"Serbia\">Serbia</option>
                                        <option value=\"Slovakia\">Slovakia</option>
                                        <option value=\"Slovenia\">Slovenia</option>
                                        <option value=\"Spain\">Spain</option>
                                        <option value=\"Sweden\">Sweden</option>
                                        <option value=\"Switzerland\">Switzerland</option>
                                        <option value=\"Turkey\">Turkey</option>
                                        <option value=\"Vatican City\">Vatican City</option>
                                        <option value=\"Wales\">Wales</option>
                                    </select>

                                </div>

                            </div>

                            <div class=\"column-item\">

                                <div class=\"form-group\">

                                    <select name=\"month\" class=\"select2-multi form-control\" data-placeholder=\"Choose a Departure Month\" multiple>
                                        <option value=\"\">Choose a Departure Month</option>
                                        <option value=\"0\">Any Departure Month</option>
                                        <option value=\"1\">January</option>
                                        <option value=\"2\">February</option>
                                        <option value=\"3\">March</option>
                                        <option value=\"4\">April</option>
                                        <option value=\"5\">May</option>
                                        <option value=\"6\">June</option>
                                        <option value=\"7\">July</option>
                                        <option value=\"8\">August</option>
                                        <option value=\"9\">September</option>
                                        <option value=\"10\">October</option>
                                        <option value=\"11\">November</option>
                                        <option value=\"12\">December</option>
                                    </select>

                                </div>

                            </div>

                            <div class=\"column-item\">

                                <div class=\"form-group\">

                                    <select name=\"year\" class=\"select2-multi form-control\" data-placeholder=\"Choose a Departure Year\" multiple>
                                        <option value=\"\">Choose a Departure Year</option>
                                        <option value=\"0\">Any Departure Year</option>
                                        <option value=\"2016\">2016</option>
                                        <option value=\"2017\">2017</option>
                                    </select>

                                </div>

                            </div>

                            <div class=\"column-item for-btn\">

                                <div class=\"form-group\">

                                    <a href=\"#\" class=\"btn btn-primary btn-block\">Search</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class=\"clear\"></div>


        <div class=\"post-hero bg-light\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-4\">
                        <div class=\"featured-count clearfix\">
                            <div class=\"icon\"><i class=\"pe-7s-map-marker\"></i></div>
                            <div class=\"content\">
                                <h6>300+ Destinations</h6>
                                <span>Tastes giving in passed direct me valley supply.</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-4\">
                        <div class=\"featured-count clearfix\">
                            <div class=\"icon\"> <i class=\"pe-7s-user\"></i></div>
                            <div class=\"content\">
                                <h6>500+ Travel Guides</h6>
                                <span>Prepared do an dissuade whatever steepest.</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-4\">
                        <div class=\"featured-count clearfix\">
                            <div class=\"icon\"> <i class=\"pe-7s-smile\"></i></div>
                            <div class=\"content\">
                                <h6>20000+ Happy Customers</h6>
                                <span>Devonshire invitation discovered indulgence.</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <section>

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                        <div class=\"section-title\">

                            <h3>Top Destinations</h3>

                        </div>

                    </div>

                </div>

                <div class=\"grid destination-grid-wrapper\">

                    <div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"10\">
                        <a href=\"result-grid.html\" class=\"top-destination-image-bg\" style=\"background-image:url('bundles/projectadmin/front/images/destination-grid/01.jpg');\">
                            <div class=\"relative\">
                                <h4>Turkey</h4>
                                <span>Starting from \$322</span>
                            </div>
                        </a>
                    </div>

                    <div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"4\">
                        <a href=\"result-grid.html\" class=\"top-destination-image-bg\" style=\"background-image:url('bundles/projectadmin/front/images/destination-grid/02.jpg');\">
                            <div class=\"relative\">
                                <h4>Croatia</h4>
                                <span>Starting from \$322</span>
                            </div>
                        </a>
                    </div>

                    <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">
                        <a href=\"result-grid.html\" class=\"top-destination-image-bg\" style=\"background-image:url('bundles/projectadmin/front/images/destination-grid/03.jpg');\">
                            <div class=\"relative\">
                                <h4>USA</h4>
                                <span>Starting from \$322</span>
                            </div>
                        </a>
                    </div>

                    <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">
                        <a href=\"result-grid.html\" class=\"top-destination-image-bg\" style=\"background-image:url('bundles/projectadmin/front/images/destination-grid/04.jpg');\">
                            <div class=\"relative\">
                                <h4>Emirates</h4>
                                <span>Starting from \$322</span>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section>

        <section class=\"bg-light\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                        <div class=\"section-title\">

                            <h3>Special Packages</h3>
                            <p>Of distrusts immediate enjoyment curiosity do. Marianne numerous saw thoughts the humoured.</p>

                        </div>

                    </div>

                </div>

                <div class=\"GridLex-gap-30-wrappper package-grid-item-wrapper\">

                    <div class=\"GridLex-grid-noGutter-equalHeight\">

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/01.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Paris in Love</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"4.0\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/02.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Classic Europe</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"3.5\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/03.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Best of Egypt</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"4.5\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/04.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Adriatic Coastal Explorer</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"5.0\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/05.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Athens, Mykonos &amp; Santorini</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"4.5\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/06.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Honeymoon Time in Maldives</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"4.5\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/07.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Scandinavia Attractions</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"5.0\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/08.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Monaco in Love</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"4.0\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"GridLex-col-4_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"detail-page.html\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/tour-package/09.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>4 days 3 nights</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>Highlights of Italy</h5>
                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div class=\"star-rating-read-only\" data-rating-score=\"4.5\"></div> <span> / 7 review</span>
                                            </div>
                                        </div>
                                        <div class=\"absolute-in-content\">
                                            <span class=\"btn\"><i class=\"fa fa-heart-o\"></i></span>
                                            <div class=\"price\">\$1422</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class=\"overflow-hidden why-us-half-image-wrapper\">

            <div class=\"GridLex-grid-noGutter-equalHeight\">

                <div class=\"GridLex-col-6_sm-12\">

                    <div class=\"why-us-half-image-content\">

                        <div class=\"section-title text-left\">

                            <h3>Why Booking With Us</h3>
                            <p>There are several seasons that you must travel with us</p>

                        </div>

                        <div class=\"featured-item\">

                            <h4>Experts On Tour</h4>

                            <div class=\"content clearfix\">

                                <div class=\"icon\">
                                    <i class=\"pe-7s-users\"></i>
                                </div>

                                <p>Blind would equal while oh mr lain led and fact none. One preferred sportsmen resolving the happiness continued. High at of in loud rich true.</p>

                            </div>
                        </div>

                        <div class=\"featured-item\">

                            <h4>Quality Accommodation</h4>

                            <div class=\"content clearfix\">

                                <div class=\"icon\">
                                    <i class=\"pe-7s-home\"></i>
                                </div>

                                <p>Admiration stimulated cultivated reasonable be projection possession of. Real no near room ye bred sake if some. Is arranging furnished knowledge.</p>

                            </div>
                        </div>


                        <div class=\"featured-item\">

                            <h4>Comfortable Transport</h4>

                            <div class=\"content clearfix\">

                                <div class=\"icon\">
                                    <i class=\"pe-7s-car\"></i>
                                </div>

                                <p>Effect twenty indeed beyond for not had county. The use him without greatly can private. Increasing it unpleasant no of contrasted no continuing.</p>

                            </div>
                        </div>

                    </div>

                </div>

                <div class=\"GridLex-col-6_sm-12 image-bg\">
                    <div class=\"image-bg\" style=\"background-image:url('bundles/projectadmin/front/images/image-01.jpg');\"></div>
                </div>

            </div>

        </section>

        <section class=\"bg-light\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                        <div class=\"section-title\">

                            <h3>Testimonial</h3>
                            <p>What our customers say about us</p>
                        </div>

                    </div>

                </div>

                <div class=\"testimonial-wrapper\">

                    <div class=\"row\">

                        <div class=\"col-xs-12 col-sm-12 col-md-6\">
                            <div class=\"testimonial-item clearfix\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/man/01.jpg"), "html", null, true);
        echo "\" alt=\"Man\" />
                                </div>
                                <div class=\"content\">
                                    <h4>Antony Robert</h4>
                                    <h6>From Spain</h6>
                                    <p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-12 col-sm-12 col-md-6\">
                            <div class=\"testimonial-item clearfix\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/front/images/man/02.jpg"), "html", null, true);
        echo "\" alt=\"Man\" />
                                </div>
                                <div class=\"content\">
                                    <h4>Mohammed Salem</h4>
                                    <h6>From Turkey</h6>
                                    <p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females sentiments increasing particular.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <div class=\"newsletter-wrapper\">

            <div class=\"container\">

                <div class=\"flex-row flex-align-middle flex-gap-30\">

                    <div class=\"flex-column flex-sm-12\">
                        <div class=\"newsletter-text clearfix\">
                            <div class=\"icon\">
                                <i class=\"pe-7s-mail\"></i>
                            </div>
                            <div class=\"content\">
                                <h3>Signup for Newsletter</h3>
                                <p>Affronting everything discretion men now own did. Still round match we to. Frankness pronounce daughters remainder extensive has but.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"flex-columns flex-sm-12\">
                        <div class=\"newsletter-form\">
                            <form class=\"\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-primary\" type=\"button\">Signup <i class=\"fa fa-long-arrow-right\"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class=\"overflow-hidden\">

            <div class=\"instagram-wrapper\">
                <div id=\"instagram\" class=\"instagram\"></div>
            </div>

        </div>

    </div>
    <!-- end Main Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 642,  694 => 629,  564 => 502,  536 => 477,  508 => 452,  480 => 427,  452 => 402,  424 => 377,  396 => 352,  368 => 327,  340 => 302,  39 => 3,  36 => 2,  11 => 1,);
    }
}
