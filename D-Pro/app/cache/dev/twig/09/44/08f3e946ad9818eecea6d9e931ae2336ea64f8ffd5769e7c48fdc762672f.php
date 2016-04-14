<?php

/* projectAdminBundle:Default:productDetail.html.twig */
class __TwigTemplate_094408f3e946ad9818eecea6d9e931ae2336ea64f8ffd5769e7c48fdc762672f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
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

                                <ul class=\"scrollspy-sidenav\">

                                    <li>
                                        <ul class=\"nav\">
                                            <li><a href=\"#section-0\" class=\"anchor\"><strong>Name :</strong>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a></li>
                                            <li><a href=\"#section-1\" class=\"anchor\"><strong>Description :</strong>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</a></li>
                                            <li><a href=\"#section-2\" class=\"anchor\"><strong>Price :</strong>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</a></li>


                                        </ul>
                                    </li>

                                </ul>
                            </div>

                            <div id=\"section-1\" class=\"detail-content\">

                                <div class=\"section-title text-left\">
                                    <h4>Product Images</h4>
                                </div>
                                <div class=\"row\">
                                    ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productImages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 114
            echo "                                        <div class=\"col-sm-6 col-md-4\">
                                            <div class=\"thumbnail\">
                                                    <img class=\"img-thumbnail img-responsive\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/productImages/" . $this->getAttribute($context["image"], "path", array()))), "html", null, true);
            echo "\" style=\"width: 300px; height: 250px\" />
                                            </div>
                                        </div>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "                                        <img style=\"height: 242px; width: 200px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/productImages/no_image_available.jpg"), "html", null, true);
            echo "\" alt=\"...\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                                </div>

                            </div>




                           

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
        return "projectAdminBundle:Default:productDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 122,  187 => 120,  178 => 116,  174 => 114,  169 => 113,  151 => 98,  147 => 97,  143 => 96,  117 => 73,  112 => 71,  53 => 15,  39 => 3,  36 => 2,  11 => 1,);
    }
}
