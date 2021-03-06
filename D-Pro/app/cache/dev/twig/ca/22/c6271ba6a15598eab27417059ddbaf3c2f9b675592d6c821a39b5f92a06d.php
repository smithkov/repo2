<?php

/* projectAdminBundle:Default:timeline.html.twig */
class __TwigTemplate_ca22c6271ba6a15598eab27417059ddbaf3c2f9b675592d6c821a39b5f92a06d extends Twig_Template
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

        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('/bundles/projectadmin/front/images/hero-header/breadcrumb.jpg');\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                        <h1 class=\"hero-title\">Result list</h1>

                        <ol class=\"breadcrumb-list\">
                            <li><a href=\"index-2.html\">Homepage</a></li>
                            <li><a href=\"#\">Desinations</a></li>
                            <li><a href=\"#\">City</a></li>
                            <li><span>Result list</span></li>
                        </ol>

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class=\"content-wrapper\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-4 col-md-3\">

                        <aside class=\"sidebar with-filter\">

                            <div class=\"sidebar-search-wrapper bg-light-2\">

                                <div class=\"sidebar-search-header\">
                                    <h4>Search Again</h4>
                                </div>

                                <div class=\"sidebar-search-content\">

                                    <div class=\"form-group\">

                                        <select name=\"destination\" class=\"select2-multi form-control\" data-placeholder=\"Choose a Destination\" multiple>
                                            <option value=\"\">Choose a Destination</option>
                                            <option value=\"0\">Any Destination</option>
                                            <option value=\"Albania\">Albania</option>
                                            <option value=\"Austria\" selected>Austria</option>
                                            <option value=\"Belgium\">Belgium</option>
                                            <option value=\"Bosnia\">Bosnia</option>
                                            <option value=\"Croatia\">Croatia</option>
                                            <option value=\"Czech Republic\">Czech Republic</option>
                                            <option value=\"Denmark\">Denmark</option>
                                            <option value=\"Egypt\">Egypt</option>
                                            <option value=\"England\">England</option>
                                            <option value=\"Estonia\">Estonia</option>
                                            <option value=\"Finland\">Finland</option>
                                            <option value=\"France\" selected>France</option>
                                            <option value=\"Germany\" selected>Germany</option>
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

                                    <div class=\"form-group\">

                                        <select name=\"month\" class=\"select2-multi form-control\" data-placeholder=\"Choose a Departure Month\" multiple>
                                            <option value=\"\">Choose a Departure Month</option>
                                            <option value=\"0\">Any Departure Month</option>
                                            <option value=\"1\">January</option>
                                            <option value=\"2\">February</option>
                                            <option value=\"3\">March</option>
                                            <option value=\"4\" selected>April</option>
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

                                    <div class=\"form-group\">

                                        <select name=\"year\" class=\"select2-multi form-control\" data-placeholder=\"Choose a Departure Year\" multiple>
                                            <option value=\"\">Choose a Departure Year</option>
                                            <option value=\"0\">Any Departure Year</option>
                                            <option value=\"2016\" selected>2016</option>
                                            <option value=\"2017\">2017</option>
                                        </select>

                                    </div>

                                    <a href=\"#\" class=\"btn btn-primary btn-block\">Search</a>

                                </div>

                            </div>

                            <div class=\"sidebar-header clearfix\">
                                <h4>Filter Results</h4>
                                <a href=\"#\" class=\"sidebar-reset-filter\"><i class=\"fa fa-times\"></i> reset filter</a>
                            </div>

                            <div class=\"sidebar-inner\">

                                <div class=\"sidebar-module\">
                                    <h6 class=\"sidebar-title\">Name Contain</h6>
                                    <div class=\"sidebar-module-inner\">
                                        <div class=\"sidebar-mini-search\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"sidebar-module\">
                                    <h6 class=\"sidebar-title\">Price Range</h6>
                                    <div class=\"sidebar-module-inner\">
                                        <input id=\"price_range\" />
                                    </div>
                                </div>

                                <div class=\"clear\"></div>

                                <div class=\"sidebar-module\">
                                    <h6 class=\"sidebar-title\">Star Range</h6>
                                    <div class=\"sidebar-module-inner\">
                                        <input id=\"star_range\" />
                                    </div>
                                </div>

                                <div class=\"clear\"></div>

                                <div class=\"sidebar-module\">

                                    <h6 class=\"sidebar-title\">Starting Point</h6>
                                    <div class=\"sidebar-module-inner\">
                                        <div class=\"checkbox-block\">
                                            <input id=\"starting_point-1\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"starting_point-1\">Berlin <span class=\"checkbox-count\">(854)</span></label>
                                        </div>
                                        <div class=\"checkbox-block\">
                                            <input id=\"starting_point-2\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"starting_point-2\">Paris <span class=\"checkbox-count\">(25)</span></label>
                                        </div>
                                        <div class=\"checkbox-block\">
                                            <input id=\"starting_point-3\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"starting_point-3\">Munich <span class=\"checkbox-count\">(254)</span></label>
                                        </div>
                                        <div class=\"starting_point-block\">
                                            <input id=\"property_type-4\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"property_type-4\">Lyon<span class=\"checkbox-count\">(22)</span></label>
                                        </div>
                                        <div class=\"starting_point-block\">
                                            <input id=\"property_type-5\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"property_type-5\">Vienna  <span class=\"checkbox-count\">(9)</span></label>
                                        </div>

                                        <div class=\"more-less-wrapper\">

                                            <div id=\"property_type_more_less\" class=\"collapse\"> 
                                                <div class=\"more-less-inner\">

                                                    <div class=\"checkbox-block\">
                                                        <input id=\"starting_point-6\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                                        <label class=\"\" for=\"starting_point-6\">Toulouse <span class=\"checkbox-count\">(3)</span></label>
                                                    </div>
                                                    <div class=\"checkbox-block\">
                                                        <input id=\"starting_point-7\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                                        <label class=\"\" for=\"starting_point-7\">Graz  <span class=\"checkbox-count\">(25)</span></label>
                                                    </div>
                                                    <div class=\"checkbox-block\">
                                                        <input id=\"starting_point-8\" name=\"starting_point\" type=\"checkbox\" class=\"checkbox\"/>
                                                        <label class=\"\" for=\"starting_point-8\">Linz  <span class=\"checkbox-count\">(2)</span></label>
                                                    </div>

                                                </div>
                                            </div>
                                            <button class=\"btn btn-more-less collapsed\" data-toggle=\"collapse\" data-target=\"#property_type_more_less\">Show more</button>

                                        </div>

                                    </div>

                                </div>

                                <div class=\"clear\"></div>

                                <div class=\"sidebar-module\">

                                    <h6 class=\"sidebar-title\">Ending Point</h6>
                                    <div class=\"sidebar-module-inner\">
                                        <div class=\"checkbox-block\">
                                            <input id=\"ending_point-1\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"ending_point-1\">Berlin <span class=\"checkbox-count\">(854)</span></label>
                                        </div>
                                        <div class=\"checkbox-block\">
                                            <input id=\"ending_point-2\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"ending_point-2\">Paris <span class=\"checkbox-count\">(25)</span></label>
                                        </div>
                                        <div class=\"checkbox-block\">
                                            <input id=\"ending_point-3\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"ending_point-3\">Munich <span class=\"checkbox-count\">(254)</span></label>
                                        </div>
                                        <div class=\"starting_point-block\">
                                            <input id=\"ending_point-4\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"ending_point-4\">Lyon<span class=\"checkbox-count\">(22)</span></label>
                                        </div>
                                        <div class=\"starting_point-block\">
                                            <input id=\"ending_point-5\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                            <label class=\"\" for=\"ending_point-5\">Vienna  <span class=\"checkbox-count\">(9)</span></label>
                                        </div>

                                        <div class=\"more-less-wrapper\">

                                            <div id=\"hotel_facilities_more_less\" class=\"collapse\"> 
                                                <div class=\"more-less-inner\">

                                                    <div class=\"checkbox-block\">
                                                        <input id=\"ending_point-6\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                                        <label class=\"\" for=\"ending_point-6\">Toulouse <span class=\"checkbox-count\">(3)</span></label>
                                                    </div>
                                                    <div class=\"checkbox-block\">
                                                        <input id=\"ending_point-7\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                                        <label class=\"\" for=\"ending_point-7\">Graz  <span class=\"checkbox-count\">(25)</span></label>
                                                    </div>
                                                    <div class=\"checkbox-block\">
                                                        <input id=\"ending_point-8\" name=\"ending_point\" type=\"checkbox\" class=\"checkbox\"/>
                                                        <label class=\"\" for=\"ending_point-8\">Linz  <span class=\"checkbox-count\">(2)</span></label>
                                                    </div>

                                                </div>
                                            </div>
                                            <button class=\"btn btn-more-less collapsed\" data-toggle=\"collapse\" data-target=\"#hotel_facilities_more_less\">Show more</button>

                                        </div>

                                    </div>


                                </div>

                                <div class=\"clear\"></div>

                                <div class=\"sidebar-module\">

                                    <h6 class=\"sidebar-title\">Filter Select</h6>
                                    <div class=\"sidebar-module-inner\">
                                        <select class=\"select2-single form-control\" data-placeholder=\"Select Placeholder\">
                                            <option value=\"\">Select Placeholder</option>
                                            <option value=\"0\">Select One</option>
                                            <option value=\"1\">Select Two</option>
                                            <option value=\"2\">Select Three</option>
                                            <option value=\"3\">Select Four</option>
                                            <option value=\"4\">Select Five</option>
                                        </select>
                                    </div>

                                </div>

                                <div class=\"clear\"></div>

                                <div class=\"sidebar-module\">

                                    <h6 class=\"sidebar-title\">Filter Text Inside Sidebar Inner</h6>
                                    <div class=\"sidebar-module-inner\">
                                        <p>Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can.</p>
                                    </div>

                                </div>

                                <div class=\"clear\"></div>

                            </div>

                            <div class=\"sidebar-box\">
                                <h4 class=\"sidebar-title\">Sidebar Text</h4>
                                <p>Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can. Unreserved had she nay dissimilar admiration interested.</p>
                            </div>

                        </aside>


                    </div>

                    <div class=\"col-sm-8 col-md-9\">

                        <div class=\"sorting-wrappper\">

                            <div class=\"sorting-header\">
                                <h3 class=\"sorting-title uppercase\">3 Countries: Germany, France, Austria</h3>
                                <p class=\"sorting-lead\">587 results found</p>
                            </div>

                            <div class=\"sorting-content\">

                                <div class=\"row\">

                                    <div class=\"col-sm-12 col-md-8\">
                                        <div class=\"sort-by-wrapper\">
                                            <label class=\"sorting-label\">Sort by: </label> 
                                            <div class=\"sorting-middle-holder\">
                                                <ul class=\"sort-by\">
                                                    <li class=\"active up\"><a href=\"#\">Name <i class=\"fa fa-long-arrow-down\"></i></a></li>
                                                    <li><a href=\"#\">Price</a></li>
                                                    <li><a href=\"#\">Location</a></li>
                                                    <li><a href=\"#\">Start Rating</a></li>
                                                    <li><a href=\"#\">User Rating</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-sm-12 col-md-4\">
                                        <div class=\"sort-by-wrapper mt pull-right pull-left-sm mt-10-sm\">
                                            <label class=\"sorting-label\">View as: </label> 
                                            <div class=\"sorting-middle-holder\">
                                                <a href=\"result-list.html\" class=\"btn btn-sorting active\"><i class=\"fa fa-th-list\"></i></a>
                                                <a href=\"result-grid.html\" class=\"btn btn-sorting\"><i class=\"fa fa-th-large\"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        ";
        // line 371
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 372
            echo "                            <div class=\"package-list-item-wrapper on-page-result-page\">

                                <div class=\"package-list-item clearfix\">
                                    <div class=\"image\">
                                        ";
            // line 376
            if ( !$this->getAttribute($context["user"], "path", array())) {
                // line 377
                echo "                                            <img class=\"img-thumbnail img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/no_profile.png"), "html", null, true);
                echo "\" style=\"width: 200px; height: 200px\" />
                                        ";
            } else {
                // line 379
                echo "                                            <img class=\"img-thumbnail img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["user"], "path", array()))), "html", null, true);
                echo "\" style=\"width: 200px; height: 200px\" />
                                        ";
            }
            // line 381
            echo "                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>V.I.P</span></div>
                                        </div>
                                    </div>

                                    <div class=\"content\">

                                        <h5>";
            // line 388
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\">";
            // line 392
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["user"], "bio", array())) > 110)) ? ((twig_slice($this->env, $this->getAttribute($context["user"], "bio", array()), 0, 110) . "...")) : ($this->getAttribute($context["user"], "bio", array()))), "html", null, true);
            echo "</p>

                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">L.G.A: </span> ";
            // line 395
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "lga", array()), "name", array()), "html", null, true);
            echo "</li>
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-signs\"></i></span> <span class=\"font600\">State:</span> ";
            // line 396
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "lga", array()), "state", array()), "name", array()), "html", null, true);
            echo "</li>
                                                    <li><span class=\"icon\"><i class=\"fa fa-flag\"></i></span> <span class=\"font600\">Designation:</span> ";
            // line 397
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "area", array()), "name", array()), "html", null, true);
            echo "</li>
                                                    <li><span class=\"icon\"><i class=\"fa fa-briefcase\"></i></span> <span class=\"font600\">Specialty:</span> ";
            // line 398
            if ($this->getAttribute($context["user"], "specialty", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "specialty", array()), "name", array()), "html", null, true);
            } else {
                echo "<span>Not specified</span>";
            }
            echo " </li>
                                                </ul>

                                            </div>
                                            <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">

                                                ";
            // line 409
            echo "
                                                <div class=\"price\">";
            // line 410
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["user"], "ratings", array())), "html", null, true);
            echo " rating(s)</div>

                                                <a href=\"";
            // line 412
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_user_detail", array("username" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">view more</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        echo "

                        <div class=\"pager-wrappper clearfix\">

                            <div class=\"pager-innner\">

                                <div class=\"flex-row flex-align-middle\">

                                    <div class=\"flex-column flex-sm-12\">
                                        Showing reslut 1 to 15 from 248 
                                    </div>

                                    <div class=\"flex-column flex-sm-12\">
                                        <nav class=\"pager-right\">
                                            <ul class=\"pagination\">
                                                <li>
                                                    <a href=\"#\" aria-label=\"Previous\">
                                                        <span aria-hidden=\"true\">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class=\"active\"><a href=\"#\">1</a></li>
                                                <li><a href=\"#\">2</a></li>
                                                <li><a href=\"#\">3</a></li>
                                                <li><span>...</span></li>
                                                <li><a href=\"#\">11</a></li>
                                                <li><a href=\"#\">12</a></li>
                                                <li><a href=\"#\">13</a></li>
                                                <li>
                                                    <a href=\"#\" aria-label=\"Next\">
                                                        <span aria-hidden=\"true\">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>
    <!-- end Main Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Default:timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 424,  488 => 412,  483 => 410,  480 => 409,  467 => 398,  463 => 397,  459 => 396,  455 => 395,  449 => 392,  442 => 388,  433 => 381,  427 => 379,  421 => 377,  419 => 376,  413 => 372,  409 => 371,  39 => 3,  36 => 2,  11 => 1,);
    }
}
