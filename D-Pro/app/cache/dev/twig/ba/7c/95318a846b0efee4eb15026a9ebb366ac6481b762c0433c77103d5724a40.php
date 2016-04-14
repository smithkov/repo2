<?php

/* projectAdminBundle:Default:detail.html.twig */
class __TwigTemplate_ba7c95318a846b0efee4eb15026a9ebb366ac6481b762c0433c77103d5724a40 extends Twig_Template
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
    <div class=\"main-wrapper scrollspy-container\">

        <!-- start end Page title -->
        <div class=\"page-title detail-page-title\" style=\"background-image:url('/bundles/projectadmin/front/images/detail/header.jpg');\">

            <div class=\"container\">

                <div class=\"flex-row\">

                    <div class=\"flex-column flex-md-8 flex-sm-12\">

                        <h1 class=\"hero-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1>
                        <p class=\"line18\">He do subjects prepared bachelor juvenile ye oh. He feelings removing informed he as ignorant we prepared.</p>

                        <ul class=\"list-col clearfix\">


                            <li class=\"fav-box\">
                                <div class=\"meta\">
                                    <span class=\"block\"><button class=\"btn btn-fav\"><i class=\"fa fa-heart-o\"></i></button></span>
                                    98 Favorites 
                                </div>
                            </li>

                            <li class=\"duration-box\">
                                <div class=\"meta\">
                                    <span class=\"block\">4</span>
                                    Days
                                </div>
                                <div class=\"meta\">
                                    &amp;
                                </div>
                                <div class=\"meta\">
                                    <span class=\"block\">3</span>
                                    Nights
                                </div>
                            </li>

                            <li class=\"price-box\">
                                <div class=\"meta\">
                                    <span class=\"block\">\$1422</span>
                                    starting from
                                </div>
                            </li>

                        </ul>

                    </div>

                    <div class=\"flex-column flex-md-4 flex-align-bottom flex-sm-12 mt-20-sm\">
                        <div class=\"text-right text-left-sm\">
                            <a href=\"#section-5\" class=\"anchor btn btn-primary\">Message Now</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class=\"breadcrumb-wrapper bg-light-2\">

            <div class=\"container\">

                <ol class=\"breadcrumb-list\">
                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("project_timeline");
        echo "\">Timeline</a></li>

                    <li><span>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span></li>
                </ol>

            </div>

        </div>

        <div class=\"content-wrapper\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-md-9\" role=\"main\">

                        <div class=\"detail-content-wrapper\">

                            <div id=\"section-0\" class=\"detail-content\">

                                <div class=\"section-title text-left\">
                                    <h4>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h4>
                                </div>

                                <img src=\"/bundles/projectadmin/front/images/map-route.jpg\" alt=\"Map\" class=\"map-route\" />
                                <h5>BIO</h5>
                                ";
        // line 98
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path", array())) {
            // line 99
            echo "                                    <img class=\"img-thumbnail img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/no_profile.png"), "html", null, true);
            echo "\" style=\"width: 200px; height: 200px\" />
                                ";
        } else {
            // line 101
            echo "                                    <img class=\"img-thumbnail img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path", array()))), "html", null, true);
            echo "\" style=\"width: 200px; height: 200px\" />
                                ";
        }
        // line 103
        echo "                                <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bio", array()), "html", null, true);
        echo "</p>



                            </div>
                            ";
        // line 108
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "products", array())) > 0)) {
            // line 109
            echo "                                <div id=\"section-1\" class=\"detail-content\">

                                    <div class=\"section-title text-left\">
                                        <h4>Goods</h4>
                                    </div>
                                    <div class=\"row\">
                                        ";
            // line 115
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 116
                echo "                                            <div class=\"col-sm-6 col-md-4\">
                                                <div class=\"thumbnail\">
                                                    ";
                // line 118
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($context["product"], "productImages", array()), 0, 1));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 119
                    echo "                                                         <img class=\"img-thumbnail img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/productImages/" . $this->getAttribute($context["image"], "path", array()))), "html", null, true);
                    echo "\" style=\"width: 300px; height: 250px\" />
                                                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 121
                    echo "                                                          <img style=\"height: 242px; width: 200px\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/productImages/no_image_available.jpg"), "html", null, true);
                    echo "\" alt=\"...\">
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                                                    <div style=\"text-align: center\" class=\"caption\">
                                                        <h5>";
                // line 124
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["product"], "name", array())), "html", null, true);
                echo "</h5>
                                                        <p>";
                // line 125
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["product"], "description", array())) > 30)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bio", array()), 0, 30) . "...")) : ($this->getAttribute($context["product"], "description", array()))), "html", null, true);
                echo "</p>
                                                        <p><a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_user_product_detail", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\" role=\"button\">More Details</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                                    </div>

                                </div>
                            ";
        }
        // line 135
        echo "
                            <div id=\"section-7\" class=\"detail-content\">

                                <div class=\"section-title text-left\">
                                    <h4>Reviews</h4>
                                </div>

                                <div class=\"review-wrapper\">



                                    <div class=\"review-content\">

                                        <div class=\"row gap-20\">

                                            <div class=\"col-sm-6\">
                                                <h5>There are ";
        // line 151
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ratings", array())), "html", null, true);
        echo " reviews</h5>
                                            </div>

                                            <div class=\"col-sm-6 text-right text-left-xs\">
                                                <a href=\"#leave-comment\" class=\"anchor btn btn-primary btn-inverse btn-sm\">Leave comments</a>
                                            </div>

                                        </div>


                                        <ul class=\"review-list\">
                                            ";
        // line 162
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ratings", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 163
            echo "                                                <li class=\"clearfix\">
                                                    <div class=\"image img-circle\">
                                                        ";
            // line 165
            if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path", array())) {
                // line 166
                echo "                                                            <img class=\"img-circle img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/no_profile.png"), "html", null, true);
                echo "\" style=\"width: 50px; height: 50px\" alt=\"Man\"  />
                                                        ";
            } else {
                // line 168
                echo "                                                            <img class=\"img-circle img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($context["rating"], "user", array()), "path", array()))), "html", null, true);
                echo "\" style=\"width: 50px; height: 50px\" alt=\"Man\"  />
                                                        ";
            }
            // line 170
            echo "
                                                    </div>
                                                    <div class=\"content\">
                                                        <div class=\"row gap-20 mb-0\">
                                                            <div class=\"col-sm-9\">
                                                                <h6>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rating"], "user", array()), "username", array()), "html", null, true);
            echo " <span>/ from ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rating"], "user", array()), "lga", array()), "state", array()), "name", array()), "html", null, true);
            echo "</span></h6>
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <p class=\"review-date\">18/03/2016</p>
                                                            </div>
                                                        </div>



                                                        <div class=\"review-text\">

                                                            <p>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "content", array()), "html", null, true);
            echo "</p>


                                                        </div>

                                                        <div class=\"review-other\">

                                                            <div class=\"row gap-20 mb-0\">

                                                                <div class=\"col-sm-6\">

                                                                    <ul class=\"social-share-sm\">

                                                                        <li><span><i class=\"fa fa-share-square\"></i> share</span></li>
                                                                        <li class=\"the-label\"><a href=\"#\">Facebook</a></li>
                                                                        <li class=\"the-label\"><a href=\"#\">Twitter</a></li>
                                                                        <li class=\"the-label\"><a href=\"#\">Google Plus</a></li>

                                                                    </ul>

                                                                </div>

                                                                <div class=\"col-sm-6\">

                                                                    <ul class=\"social-share-sm for-useful\">
                                                                        <li><span>Was this review helpful? </span></li>
                                                                        <li class=\"the-label\"><a href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a> 2</li>
                                                                        <li class=\"the-label\"><a href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a> 1</li>
                                                                    </ul>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
                                        </ul>

                                        <div class=\"bt text-center pt-30\">
                                            <a href=\"#\" class=\"btn btn-primary\">Load More</a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div id=\"leave-comment\" class=\"detail-content\">
                                ";
        // line 239
        if ((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData"))) {
            // line 240
            echo "                                    <div class=\"section-title text-left\">
                                        <h4>Leave Your Review</h4>
                                    </div>

                                    <div class=\"review-form\">

                                        <form method='POST' class=\"\">

                                            <div class=\"row\">
                                                <div class=\"col-sm-12 col-md-8\">

                                                    <div class=\"form-group\">
                                                        <label>Your Message: </label>
                                                        ";
            // line 253
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName")));
            echo "
                                                    </div>
                                                </div>

                                                <div class=\"clear\"></div>
                                                ";
            // line 258
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                                                <div class=\"col-sm-12 col-md-8 mt-10\">
                                                    <button type='submit' class=\"btn btn-primary\">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                ";
        } else {
            // line 268
            echo "                                    <h4>Please login to rate ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo " <a href='";
            echo $this->env->getExtension('routing')->getPath("project_login");
            echo "' class='btn btn-primary'>Login</a></h4>
                                ";
        }
        // line 270
        echo "

                            </div>\t

                            <div class=\"call-to-action\">

                                Question? <a href=\"#\" class=\"btn btn-primary btn-sm btn-inverse\">Make an inquiry</a> or call +66 28 878 5452

                            </div>

                        </div>

                    </div>

                    <div class=\"col-sm-3 hidden-sm hidden-xs\">

                        <div class=\"scrollspy-sidebar sidebar-detail\" role=\"complementary\">

                            <ul class=\"scrollspy-sidenav\">

                                <li>
                                    <ul class=\"nav\">
                                        <li><a href=\"#section-0\" class=\"anchor\"><strong>Status :</strong>";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "area", array()), "name", array()), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#section-1\" class=\"anchor\"><strong>Specialty :</strong>";
        // line 293
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "specialty", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "specialty", array()), "name", array()), "html", null, true);
        } else {
            echo "<span>Not specified</span>";
        }
        echo "</a></li>
                                        <li><a href=\"#section-2\" class=\"anchor\"><strong>State :</strong>";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lga", array()), "state", array()), "name", array()), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#section-3\" class=\"anchor\"><strong>L.G.A :</strong>";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lga", array()), "name", array()), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#section-4\" class=\"anchor\"><strong>Email :</strong>";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#section-5\" class=\"anchor\"><strong>Phone :</strong>";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</a></li>

                                    </ul>
                                </li>

                            </ul>

                            <a href=\"#\" class=\"btn btn-primary\">Change Search</a>

                            <div style=\"width: 100%; height: 20px;\"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 297,  467 => 296,  463 => 295,  459 => 294,  451 => 293,  447 => 292,  423 => 270,  415 => 268,  402 => 258,  394 => 253,  379 => 240,  377 => 239,  361 => 225,  316 => 186,  300 => 175,  293 => 170,  287 => 168,  281 => 166,  279 => 165,  275 => 163,  271 => 162,  257 => 151,  239 => 135,  233 => 131,  222 => 126,  218 => 125,  214 => 124,  211 => 123,  202 => 121,  194 => 119,  189 => 118,  185 => 116,  181 => 115,  173 => 109,  171 => 108,  162 => 103,  156 => 101,  150 => 99,  148 => 98,  140 => 93,  117 => 73,  112 => 71,  53 => 15,  39 => 3,  36 => 2,  11 => 1,);
    }
}
